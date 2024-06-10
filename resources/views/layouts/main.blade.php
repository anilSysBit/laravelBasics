<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @stack('title')
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-900">
    @include('layouts.header')
    <div class="w-full min-h-svh">
        @yield('main-section')
    </div>
    @include('layouts.footer') 
</body>
<script src="https://kit.fontawesome.com/6f2e95887d.js" crossorigin="anonymous"></script>
</html>