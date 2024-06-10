<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    //

    public function index(){
        return view("customer");
    }

    public function submit(Request $request){
        echo "<pre>";
        print_r($request->all());

        $customer = new Customer;
        $customer->name = $request['name'];
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

    public function view(Request $request){
        $customers = Customer::all();
        $data = compact('customers');
        return view('customer-view')->with($data);
    }

    public function destroy($id){
        $customer = Customer::find($id)->delete();
        return redirect()->back();

    }
}
