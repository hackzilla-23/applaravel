@extends('index')

<link rel="stylesheet" href="{{ asset('login.css') }}">

{{-- @section('login')
    <p>Nom : {{ $newpersonne->nom }}</p>
    <p>Prenom : {{ $newpersonne->prenom }}</p>
    <p>Email : {{ $newpersonne->email }}</p>
    <p>Password : {{ $newpersonne->password }}</p>
@endsection --}}

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
                    <p class="text-red-500 text-sm pt-2">'Veuillez entrer un email valide' </p>
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

{{-- @extends('users.text') c'est dans le fichier users.text qu'on doit charger le formulaire du login --}}

{{-- @section('style_form')
	<link rel="stylesheet" href="style.css">
@endsection --}}

{{-- @section('login') --}}
{{-- <form action="">
        <label for="email">Email</label>
        <input type="text" name="email" id="email">

        <label for="password">password</label>
        <input type="password" name="password" id="password">

        <button type="submit">envoyer</button>
    </form> --}}
{{-- @include('partials._form') --}}
{{-- <a href="{{ route('registermmmm') }}">vers register</a> --}}
{{-- <a href="/register">vers register</a> --}}
{{-- @endsection --}}
