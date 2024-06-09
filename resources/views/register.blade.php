@extends('layouts.main')
@push('title')
<title>Login Form</title>
@endpush

@section('main-section')


    <div class="w-full h-svh p-10 flex place-content-center">
        <form action="{{url('/')}}/register" method="POST" class="border border-slate-500 h-auto min-w-[50%] p-10 rounded">
            @csrf
            <p class="text-3xl mb-2 text-slate-500 text-center">Register</p>
            <x-input name="fullname" type="text" label="Full name"/>
            <span class="mt-1 text-red-500">
            @error('fullname')
                {{$message}}
            @enderror
                </span>
             
            <x-input  name='email' type='email' label='Email Address'/>
            <span class="mt-1 text-red-500">
            @error('email')
                {{$message}}
            @enderror
                </span>
            <x-input name='password' type='password' label="Password"/>
            <span class="mt-1 text-red-500">
            @error('password')
                {{$message}}
            @enderror
                </span>
            <x-input  name='password_confirmation' type='password' label='Confirm Password'/>
            <span class="mt-1 text-red-500">
            @error('password_confirmation')
                {{$message}}
            @enderror
                </span>

            <button class="btn-primary mt-5 w-full">Login</button>
        </form>
</div>

    @endsection