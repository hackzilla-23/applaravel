<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../public/fontawesome/css/all.min.css">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    @vite('resources/css/app.css')
    <title>Document</title>
    @yield('stylelogin')
    @yield('styleregister')
</head>

<body>
    {{-- @if ($a < 10)
        @dd("bonjour miguel, il est ".$a."h");
    @else
        @dd("bonsoir miguel, il est ".$a."h");            
    @endif --}}

    {{-- <div>
        @yield('form')
    </div> --}}

    <div>
        @yield('login')
    </div>

    {{-- <div>
        @yield('register')
    </div> --}}

    {{-- <div>
        @yield('edit')
    </div> --}}

    {{-- <div>
        @yield('dashboard')
    </div> --}}

</body>

</html>
