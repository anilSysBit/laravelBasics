<header class="p-2  flex justify-between text-white sticky top-0">
    <span class="absolute left-0 top-0 w-full h-full blur-lg bg-slate-900 -z-10"></span>
        <ul class="flex place-items-center gap-x-5 w-1/2 ml-4">
            <li><a href="/">Home</a></li>
            <li><a href="/about">About Us</a></li>
            <li><a href="/login">Login</a></li>
            <li><a href="/register">Register</a></li>
            <li><a href="/customer/view">View Customer</a></li>
            <li><a href="{{route('customer.create')}}">Create Customer</a></li>
            {{-- This is the laravel Comment --}}
        </ul>
        
        <ul class="flex justify-end place-items-center gap-x-5 w-1/2">
            <!-- <li>Login / Logout</li> -->
             <li>@lang('lang.nav_name')</li>
            <li class="h-12 w-12 border rounded-full overflow-hidden border-gray-400 border-4 bg-white">
                <img src="https://www.anilwagle.com.np/assets/myppimage-ad3a9990.jpg" alt="profile_image">
            </li>

        </ul>
            
    </header>