<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    @vite('resources/css/app.css')
    <title>Document</title>
    @yield('stylelogin')
    @yield('styleregister')
    @yield('stylemdp0')
    @yield('style404')
</head>

<body class="flex items-center justify-center container mx-auto">
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

    {{-- password  --}}
    <script>
        const password = document.getElementById('password');
        const eyeIcon = document.querySelector('.fa-eye-slash');

        eyeIcon.addEventListener('click', function() {
            if (password.type === 'text') {
                password.type = 'password';
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            } else {
                password.type = 'text';
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            }
        })
    </script>

</body>

</html>
