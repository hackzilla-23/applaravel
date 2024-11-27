@extends('index')

@section('login')
    <p> Nom : {{$newpersonne->nom}}</p>
    <p> Prenom : {{$newpersonne->prenom}}</p>
    <p> Email : {{$newpersonne->email}}</p>


{{-- <form action="#" method="POST">
    <div class="container">
        <div class="form signup">
            <h2>Sign In</h2>
            <div class="inputBox">
                <input name="email" type="email">
                <i class="fa-regular fa-user"></i>
                <span>Email</span>
            </div>
            <div class="inputBox">
                <input name="password" type="password">
                <i class="fa-solid fa-lock"></i>
                <span>password</span>
            </div>
            <div class="inputBox">
                <input type="submit" value="Log In">
            </div>
            <p>Don't have a account ? <a href="{{ route('register') }}" class="login">Create Account</a></p>
        </div>
    </div>
</form> --}}
    @include('partials._form')
    <a href = '{{route('register')}}'>register</a>
@endsection

