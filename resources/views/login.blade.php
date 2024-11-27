@extends('index')

@section('stylelogin')
    <style>
        /* Style global */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f7fc;
        }

        /* Conteneur principal du formulaire */
        .login-container {
            background-color: #fff;
            border-radius: 8px;
            padding: 42px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 400px;
            max-width: 400px;
        }

        /* Titre du formulaire */
        .login-form h2 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        /* Groupes de champs de formulaire */
        .input-group {
            margin-bottom: 20px;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
            color: #555;
        }

        .input-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
            color: #333;
            background-color: #f9f9f9;
        }

        .input-group input:focus {
            border-color: #007bff;
            outline: none;
        }

        /* Bouton de soumission */
        .submit-btn {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .submit-btn:hover {
            background-color: #0056b3;
        }

        /* Lien d'inscription */
        .signup-link {
            text-align: center;
            margin-top: 15px;
        }

        .signup-link a {
            color: #007bff;
            text-decoration: none;
        }

        .signup-link a:hover {
            text-decoration: underline;
        }
    </style>
@endsection

@section('login')
    {{-- <form action="#" method="POST">
        <div class="container">
            <div class="form signup">
                <h2>Sign In</h2>
                <div class="inputBox">
                    <label for="email">Email</label>
                    <input name="email" type="email">
                </div>
                <div class="inputBox">
                    <label for="password">Password</label>
                    <input name="password" type="password">
                </div>
                <div class="inputBox">
                    <input type="submit" value="Log In">
                </div>
                <p>Don't have a account ? <a href="{{ route('register') }}" class="login">Create Account</a></p>
            </div>
        </div>
    </form> --}}

    <div class="login-container">

        <!-- Afficher le message de succès s'il existe -->
        @if (session('success'))
            <p class="text-green-500 text-sm text-center">
                {{ session('success') }}
            </p>
        @endif

        <form class="login-form" method="POST" action="{{ route('login_personne') }}">
            @csrf
            <h2>Connexion</h2>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="username" name="email" placeholder="Votre Email">
                @error('email')
                    <p class="text-red-500 text-sm pt-2">{{ 'Veuillez entrer un email valide' }}</p>
                @enderror
            </div>

            <div class="input-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="Votre mot de passe">
                @error('password')
                    <p class="text-red-500 text-sm pt-2">{{ 'Veuillez entrer un mot de passe valide' }}</p>
                @enderror
            </div>

            <div class="pb-4">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember" class="text-sm font-medium">Se souvenir de moi</label>
            </div>

            @error('email1')
                <p class="text-red-500 text-sm text-center pb-2">{{ $message }}</p>
            @enderror

            <div class="input-group">
                <button type="submit" class="submit-btn">Se connecter</button>
            </div>

            <div class="text-center text-sm">
                <a href="{{ route('MDPo') }}" class="hover:underline hover:underline-offset-4 duration-500"">Mot de passe
                    oublie ?</a>
            </div>

            <div class="signup-link">
                <p>Don't have a account ? <a href="{{ route('register') }}">Create Account</a></p>
            </div>
        </form>
    </div>
@endsection
