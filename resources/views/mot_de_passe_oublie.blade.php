@extends('index')

<link rel="stylesheet" href="{{ asset('MDPo.css') }}">

<div class="container">
    <h1>Changer votre mot de passe</h1>

    @if (session('status'))
        <div class="status">{{ session('status') }}</div>
    @endif

    <form method="POST" action="{{ route('changePass') }}">
        @csrf
        <div class="form-group">
            <label for="current_password">Mot de passe actuel</label>
            <input type="password" name="password" id="current_password">
            @error('password')
                <div class="error pt-2">{{ 'Veuillez entrer des informations valides.' }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="new_password">Nouveau mot de passe</label>
            <input type="password" name="new_password" id="new_password">
            @error('new_password')
                <div class="error pt-2">{{ 'Veuillez entrer un mot de passe valide.' }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="new_password_confirmation">Confirmer le nouveau mot de passe</label>
            <input type="password" name="password_confirmation" id="new_password_confirmation">
            @error('password_confirmation')
                <div class="error pt-2">{{ 'Veuillez un mot de passe identique.' }}</div>
            @enderror
        </div>

        <button type="submit" class="btn mt-2">Mettre à jour le mot de passe</button>

        <div class="pt-5 flex justify-center">
            <p><a href="{{ route('login') }}" class="font-bold">Retour</a></p>
        </div>
    </form>
</div>
