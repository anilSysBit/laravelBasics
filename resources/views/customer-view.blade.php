@extends('layouts.main')
@push('title')
<title>Customer Data</title>
@endpush

@section('main-section')
<div class="container mx-auto mt-10">
        <div class="overflow-x-auto">
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
                    </tr>
                    @endforeach
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>

@endsection