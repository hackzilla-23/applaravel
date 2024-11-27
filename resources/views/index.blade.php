<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../public/fontawesome/css/all.min.css">
    <title>Document</title>
    {{-- @vite('resources/css/app.css') --}}
    <style>
        .error{
            color: red;
        }
    </style>
</head>

<body>
    <?php
    // $a = 9;
    ?>
    {{-- @if ($a < 10)
        @dd("bonjour miguel, il est ".$a."h");
    @else
        @dd("bonsoir miguel, il est ".$a."h");
    @endif --}}

    <div>
        @yield('form')
    </div>

    <div>
        @yield('login')
    </div>

    <div>
        @yield('register')
    </div>

    <div>
        @yield('edit')
    </div>

    <div>
        @yield('dashboard')
    </div>

</body>

</html>
