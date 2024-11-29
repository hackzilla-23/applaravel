@extends('users.text')

@section('stylemdp0')
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-items: center;
            align-items: center;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            background-color: white;
            padding: 40px 40px 5px 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 20px;
            font-weight: 600;
        }

        label {
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-group input:focus {
            border-color: #007bff;
            outline: none;
        }

        .btn {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .error {
            color: red;
            font-size: 14px;
        }

        .status {
            color: green;
            text-align: center;
            font-size: 16px;
        }
    </style>
@endsection

<body class="flex justify-center items-center h-lvh">
    <div class="container mx-auto w-96">
        <h1 class="text-xl font-bold pb-8">Changer votre mot de passe</h1>

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
