@extends('layouts.main')
@push('title')
<title>Customer Registration Form</title>
@endpush

@section('main-section')
<div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold text-slate-500 mb-6">Customer Form</h1>
        <form action="{{url('/')}}/customer" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-slate-500 mb-2">Name</label>
                <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-slate-500 rounded-lg text-slate-500 focus:outline-none focus:ring-2 focus:ring-slate-500">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-slate-500 mb-2">Email</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-slate-500 rounded-lg text-slate-500 focus:outline-none focus:ring-2 focus:ring-slate-500">
            </div>
            <div class="mb-4">
                <label for="gender" class="block text-slate-500 mb-2">Gender</label>
                <select id="gender" name="gender" class="w-full px-4 py-2 border border-slate-500 rounded-lg text-slate-500 focus:outline-none focus:ring-2 focus:ring-slate-500">
                    <option value="">Select Gender</option>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                    <option value="O">Otherse</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="address" class="block text-slate-500 mb-2">Address</label>
                <input type="text" id="address" name="address" class="w-full px-4 py-2 border border-slate-500 rounded-lg text-slate-500 focus:outline-none focus:ring-2 focus:ring-slate-500">
            </div>
            <div class="mb-4">
                <label for="dob" class="block text-slate-500 mb-2">Date of Birth</label>
                <input type="date" id="dob" name="dob" class="w-full px-4 py-2 border border-slate-500 rounded-lg text-slate-500 focus:outline-none focus:ring-2 focus:ring-slate-500">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-slate-500 mb-2">Password</label>
                <input type="password" id="password" name="password" class="w-full px-4 py-2 border border-slate-500 rounded-lg text-slate-500 focus:outline-none focus:ring-2 focus:ring-slate-500">
            </div>
            <div class="mb-4">
                <label for="state" class="block text-slate-500 mb-2">State</label>
                <input type="text" id="state" name="state" class="w-full px-4 py-2 border border-slate-500 rounded-lg text-slate-500 focus:outline-none focus:ring-2 focus:ring-slate-500">
            </div>
            <div class="mb-4">
                <button type="submit" class="w-full bg-slate-500 text-white px-4 py-2 rounded-lg hover:bg-slate-600 focus:outline-none focus:ring-2 focus:ring-slate-500">Submit</button>
            </div>
        </form>
    </div>

    @endsection