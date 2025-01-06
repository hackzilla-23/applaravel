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

        <form method="POST" action="{{ route('password.validate.code') }}">
            @csrf
            <div class="form-group hidden">
                <label for="current_password">Email :</label>
                <input type="email" name="email" value="{{ session('email') }}" readonly>
            </div>

            <div class="form-group">
                <label for="current_password">Enter Code :</label>
                <input type="text" name="token" id="current_email" class="mt-4">
                @error('token')
                    <p class="error pt-2">{{ 'message' }}</p>
                @enderror
            </div>

            <button type="submit" class="btn mt-2">Envoyer</button>

            <div class="back pb-4">
                <p><a href="{{ route('MDPo') }}" class="back-p">Retour</a></p>
            </div>
        </form>
    </div>
</body>

</html>
