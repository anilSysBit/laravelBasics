@extends('layouts.main')
@push('title')
<title>Customer Data</title>
@endpush

@section('main-section')
<div class="container mx-auto mt-10">
        <div class="overflow-x-auto">
            <form class="search_box flex" action="">
                <input type="search" name="search" placeholder="Search" value="{{$search}}" class="p-2 rounded text-slate-400 bg-slate-900 border border-slate-400 focus:outline-none">
                <button class="btn-primary rounded ml-1">Search</button>
            </form>
            <table class="min-w-full border-collapse  bg-transparent">
                <thead>
                    <tr>
                        <th class="th_class">ID</th>
                        <th class="th_class">Name</th>
                        <th class="th_class">Email</th>
                        <th class="th_class">Gender</th>
                        <th class="th_class">Address</th>
                        <th class="th_class">Date of Birth</th>
                        <th class="th_class">State</th>
                        <th class="th_class">Country</th>
                        <th class="th_class">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Sample Row -->
                    @foreach ($customers as $customer)
                    <tr class="border-b border-slate-500">
                        <td class="td_class">{{$customer->customer_id}}</td>
                        <td class="td_class">{{$customer->name}}</td>
                        <td class="td_class">{{$customer->email}}</td>
                        <td class="td_class">{{$customer->gender}}</td>
                        <td class="td_class">{{$customer->address}}</td>
                        <td class="td_class">{{$customer->dob}}</td>
                        <td class="td_class">{{$customer->state}}</td>
                        <td class="td_class">{{$customer->country}}</td>
                        <td class="td_class">
                            <a href="{{route('customer.edit',['id'=> $customer->customer_id])}}" class="text-slate-500 hover:text-slate-400 mr-2"><i class="fas fa-eye"></i></a>
                            <a href="{{route('customer.delete',['id'=> $customer->customer_id])}}" class="text-slate-500 hover:text-red-500"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>

@endsection