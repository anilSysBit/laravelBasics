<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    //Create a form and view that page
    public function create(){
        $url = url('/customer');
        $title = 'Customer Registration';
        $customer = null;
        $data = compact('customer','url','title');
        return view("customer")->with($data);
    }

    // store the data on database from the view page
    public function submit(Request $request){
        // p($request->all());
        // die;
        $customer = new Customer;
        $customer->name = $request['name'];
        $customer->username = NULL;
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->dob = $request['dob'];
        $customer->password = md5($request['password']);
        $customer->state = $request['state'];
        $customer->country = 'Nepal';
        $customer->save();

        return redirect('/customer/view');
    }

    // this page views the saved data from the database 
    public function view(Request $request){
        $search = $request['search'] ?? "";
        if($search != ""){
            $customers = Customer::where('name',"LIKE","$search%")->get();
        }else{
            $customers = Customer::all();
        }
        $data = compact('customers','search');
        return view('customer-view')->with($data);
    }

    // this function deletes the data
    public function destroy($id){
        $customer = Customer::find($id);
        if (!is_null($customer)){
            $customer->delete();
        }
        return redirect('customer/view');
    }

    // this function retrives the data to be updated
    public function edit($id){
        $customer = Customer::find($id);
        if(is_null($customer)){
            return redirect('customer/view');
        }else{
            $url = url('/customer/update')."/".$id;
            $title = 'Edit Customer Data';
            $data = compact('customer','url','title');
            return view('customer')->with($data);
        }
    }

    // this function updates the data on the database
    public function update($id, Request $request){
        $customer = Customer::find($id);
        
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->dob = $request['dob'];
        // $customer->password = md5($request['password']);
        $customer->state = $request['state'];
        $customer->save();

        return redirect('customer/view');
    }
}
