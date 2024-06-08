@extends('layouts.main')
@push('title')
<title>Login Form</title>
@endpush

@section('main-section')


    <div class="w-full h-svh p-10 flex place-content-center">
        <form action="{{url('/')}}/register" method="POST" class="border border-slate-500 max-h-[400px] p-10 rounded">
            @csrf
            <p class="text-3xl mb-2 text-slate-500 text-center">Login</p>
            <div class="form-control p-2">
                <label for="username" class="text-slate-500">Username</label>
                <input type="text" name="username"   class="w-full mt-2 border-none rounded p-2 bg-slate-600 text-slate-400" id="username" placeholder="Email or Username">
            </div>

            <div class="form-control p-2">
                <label for="password" class="text-slate-500">Username</label>
                <input type="password" name="password" class="w-full mt-2 border-none rounded p-2 bg-slate-600 text-slate-400" id="password" placeholder="Enter Password">
            </div>
            <button class="btn-primary mt-5 w-full">Login</button>
        </form>
</div>

    @endsection