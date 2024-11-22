@extends('index')
{{-- @section('register') --}}

@section('styleregister')
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
        .register-container {
            background-color: #fff;
            border-radius: 8px;
            padding: 40px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        /* Titre du formulaire */
        .register-form h2 {
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

        /* Lien de connexion */
        .login-link {
            text-align: center;
            margin-top: 15px;
        }

        .login-link a {
            color: #007bff;
            text-decoration: none;
        }

        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
@endsection

{{-- <form action="#" method="POST">
    <div class="container">
        <div class="form signup">
            <h2>Sign Up</h2>
            <div class="inputBox">
                <input type="text" name="nom">
                <i class="fa-regular fa-user"></i>
                <span>username</span>
            </div>
            <div class="inputBox">
                <input type="text" name="email">
                <i class="fa-regular fa-envelope"></i>
                <span>email address</span>
            </div>
            <div class="inputBox">
                <input type="password" name="password">
                <i class="fa-solid fa-lock"></i>
                <span>create password</span>
            </div>
            <div class="inputBox">
                <input type="password" name="password-co">
                <i class="fa-solid fa-lock"></i>
                <span>confirm password</span>
            </div>
            <div class="inputBox">
                <input type="submit" value="Create Account">
            </div>
            <p>Already a member ? <a href="{{ route('login') }}" class="login">Log in</a></p>
        </div>
    </div>
</form> --}}

<div class="register-container">
    <form class="register-form" method="POST" action="{{ route('register_personne') }}">
        @csrf
        <h2>Inscription</h2>
        <div class="input-group">
            <label for="username">Nom d'utilisateur</label>
            <input type="text" id="username" name="nom" placeholder="Choisissez un nom d'utilisateur">
        </div>
        <div class="input-group">
            <label for="prenom">Prenom</label>
            <input type="text" id="prenom" name="prenom" placeholder="Choisissez un prenom">
        </div>
        <div class="input-group">
            <label for="age">Age</label>
            <input type="number" id="age" name="age" placeholder="Choisissez un age">
        </div>
        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Votre adresse email">
        </div>
        <div class="input-group">
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" placeholder="Votre mot de passe">
        </div>
        <div class="input-group">
            <label for="confirm-password">Confirmer le mot de passe</label>
            <input type="password" id="confirm-password" name="confirm-password"
                placeholder="Confirmez votre mot de passe">
        </div>
        <div class="input-group">
            <button type="submit" class="submit-btn">S'inscrire</button>
        </div>
        <div class="login-link">
            <p>Already a member ? <a href="{{ route('login') }}">Log in</a></p>
        </div>
    </form>
</div>


{{-- @endsection --}}
