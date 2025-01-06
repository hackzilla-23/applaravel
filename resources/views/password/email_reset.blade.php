<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('MDPo.css') }}">
    @vite('resources/css/app.css')
</head>

<body class="flex justify-center items-center h-lvh">
    <div class="container mx-auto w-[90%] md:w-[52%] xl:w-[27%]">
        <h1 class="text-xl font-bold pb-8">Change Password</h1>

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="form-group">
                <label for="current_password">Email</label>
                <input type="email" value="{{ old('email') }}" placeholder="Enter your email" name="email"
                    id="current_email" class="mt-4">
                @error('email')
                    <p class="error pt-2">{{ 'Veuillez entrer une email valides.' }}</p>
                @enderror
            </div>

            <button type="submit" class="btn mt-2">Send Code</button>

            <div class="back pb-4">
                <p><a href="{{ route('login') }}" class="back-p">Retour</a></p>
            </div>
        </form>
    </div>
</body>

</html>
