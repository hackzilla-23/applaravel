@extends('index')
{{-- @section('register') --}}

<link rel="stylesheet" href="{{ asset('register.css') }}">

<div class="register-container">

    <!-- Afficher le message de succès s'il existe -->
    {{-- @if (session('success'))
        <div class="text-green-500 text-sm text-center">
            {{ session('success') }}
        </div>
    @endif --}}

    <form class="register-form" method="POST" action="{{ route('register_personne') }}">
        @csrf
        <h2>Inscription</h2>
        <div class="input-group">
            <label for="username">Nom d'utilisateur</label>
            {{-- <input type="text" id="username" name="nom" placeholder="Choisissez un nom d'utilisateur">
            {!! $errors->first('nom', '<p class = "text-red-500">:message</p>') !!} --}}
            <input value="{{ old('nom') }}" type="text" id="username" name="nom"
                placeholder="Choisissez un nom d'utilisateur">
            @error('nom')
                <p class="text-red-500 text-sm pt-2">{{ "Veuillez entrer un nom d'utiliateur valide" }}
                </p>
            @enderror

        </div>

        <div class="input-group">
            <label for="prenom">Prenom</label>
            {{-- <input type="text" id="prenom" name="prenom" placeholder="Choisissez un prenom">
            {!! $errors->first('prenom', '<p class = "text-red-500">:message</p>') !!} --}}
            <input value="{{ old('prenom') }}" type="text" id="prenom" name="prenom"
                placeholder="Choisissez un prenom">
            @error('prenom')
                <p class="text-red-500 text-sm pt-2">{{ 'Veuillez entrer un prenom valide' }}</p>
            @enderror
        </div>

        <div class="input-group">
            <label for="age">Age</label>
            {{-- <input type="number" id="age" name="age" placeholder="Choisissez un age">
            {!! $errors->first('age', '<p class = "text-red-500">:message</p>') !!} --}}
            <input value="{{ old('age') }}" type="number" id="age" name="age"
                placeholder="Choisissez un age">
            @error('age')
                <p class="text-red-500 text-sm pt-2">{{ 'Veuillez entrer un age valide' }}</p>
            @enderror
        </div>

        <div class="input-group">
            <label for="email">Email</label>
            {{-- <input type="email" id="email" name="email" placeholder="Votre adresse email">
            {!! $errors->first('email', '<p class = "text-red-500">:message</p>') !!} --}}
            <input value="{{ old('email') }}" type="email" id="email" name="email"
                placeholder="Votre adresse email">
            @error('email')
                <p class="text-red-500 text-sm pt-2">{{ 'Veuillez entrer un email valide' }}</p>
            @enderror
        </div>

        <div class="input-group">
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" placeholder="Votre mot de passe">
            {{-- {!! $errors->first('password', '<p class = "text-red-500">:message</p>') !!} --}}
            @error('password')
                <p class="text-red-500 text-sm pt-2">{{ 'Veuillez entrer un mot de passe valide' }}</p>
            @enderror

        </div>

        <div class="input-group">
            <label for="confirm-password">Confirmer le mot de passe</label>
            <input type="password" id="confirm-password" name="confirm-password"
                placeholder="Confirmez votre mot de passe">
            {{-- {!! $errors->first('confirm-password', '<p class = "text-red-500">:message</p>') !!} --}}
            @error('confirm-password')
                <p class="text-red-500 text-sm pt-2">{{ 'Veuillez entrer un mot de passe identique' }}</p>
            @enderror
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
