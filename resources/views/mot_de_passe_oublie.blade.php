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

        @if (session('status'))
            <div class="status">{{ session('status') }}</div>
        @endif

        <form method="POST" action="{{ route('changePass') }}">
            @csrf
            <div class="form-group">
                <label for="current_password">Mot de passe actuel</label>
                <input type="password" name="password" id="current_password">
                @error('password')
                    <p class="error pt-2">{{ 'Veuillez entrer des informations valides.' }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="new_password">Nouveau mot de passe</label>
                <input type="password" name="new_password" id="new_password">
                @error('new_password')
                    <p class="error pt-2">{{ 'Veuillez entrer un mot de passe valide.' }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="new_password_confirmation">Confirmer le nouveau mot de passe</label>
                <input type="password" name="password_confirmation" id="new_password_confirmation">
                @error('password_confirmation')
                    <p class="error pt-2">{{ 'Veuillez un mot de passe identique.' }}</p>
                @enderror
            </div>

            <button type="submit" class="btn mt-2">Mettre à jour le mot de passe</button>

            <div class="back pb-4">
                <p><a href="{{ route('login') }}" class="back-p">Retour</a></p>
            </div>
        </form>
    </div>
</body>

</html>
