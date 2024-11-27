<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @yield("style_form")
    @vite(['resources/css/app.css'])
    @yield('style_dashboard')
    @yield('stylelogin')
    @yield('styleregister')
</head>
<body>
    <?// if($test = 0){?>

    <? //}?>
    <!-- {{--equivalent en laravel--}} -->
    {{-- @if ($a < 0)
        @dd('bonjour'); --}}
    {{-- @else

    @endif

    @switch($test)
        @case(1)

        @case(2)

        @case(3)
    @endswitch --}}

    {{-- @unless()
        <p>bonjour</p>
    @endunless --}}

    <div>
        @yield("login")
    </div>

    <div>
        @yield("register")
    </div>

    <div>
        @yield("dashboard")
    </div>

    <div>
        @yield("form_add_product")
    </div>

    <div>
        @yield("form_edit_product")
    </div>

    @yield('script')
</body>
</html>
