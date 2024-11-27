@extends('index')
@section('register')
<form action="{{route('register_personne')}}" method="POST">
    @csrf
    <div class="container">
        <div class="form signup">
            <h2>Sign Up</h2>
            <div class="inputBox">
                <input type="text" name="nom">
                <i class="fa-regular fa-user"></i>
                <span>nom</span>
            </div>
            {!! $errors->first('nom', '<p class= "error">:message</p>') !!}
            <div class="inputBox">
                <input type="text" name="prenom">
                <i class="fa-regular fa-user"></i>
                <span>prenom</span>
            </div>
            {!! $errors->first('prenom', '<p class= "error">:message</p>') !!}
            <div class="inputBox">
                <input type="number" name="age">
                <i class="fa-regular fa-user"></i>
                <span>age</span>
            </div>
            {!! $errors->first('age', '<p class= "error">:message</p>') !!}
            {{-- <div class="inputBox">
                <input type="text" name="nom">
                <i class="fa-regular fa-user"></i>
                <span>username</span>
            </div> --}}
            <div class="inputBox">
                <input type="text" name="email">
                <i class="fa-regular fa-envelope"></i>
                <span>email address</span>
            </div>

            {!! $errors->first('email', '<p class= "error">:message</p>') !!}
            <div class="inputBox">
                <input type="password" name="password">
                <i class="fa-solid fa-lock"></i>
                <span>create password</span>
            </div>
            {!! $errors->first('password', '<p class= "error">:message</p>') !!}
            <div class="inputBox">
                <input type="password" name="password-co">
                <i class="fa-solid fa-lock"></i>
                <span>confirm password</span>
            </div>
            {!! $errors->first('password-co', '<p class= "error">:message</p>') !!}
            <div class="inputBox">
                <input type="submit" value="Create Account">
            </div>
            <p>Already a member ? <a href="{{ route('login') }}" class="login">Log in</a></p>
        </div>
    </div>
</form>
{{-- @endsection --}}
