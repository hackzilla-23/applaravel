@extends('users.text') {{-- c'est dans le fichier users.text qu'on doit charger le formulaire du login --}}
{{-- @section("style_form")
	<link rel="stylesheet" href="style.css">
@endsection --}}
@section("login")
    {{-- <form action="">
        <label for="email">Email</label>
        <input type="text" name="email" id="email">

        <label for="password">password</label>
        <input type="password" name="password" id="password">

        <button type="submit">envoyer</button>
    </form> --}}
	@include('partials._form')
	<a href="{{ route('registermmmm') }}">vers register</a>
	{{-- <a href="/register">vers register</a> --}}


    {{-- <form action="./" method="POST">
	    <div class="container">
	    	<div class="form signup">
			    <p style="color:green; font-size:20px"><?=$reussie?></p>
	    		<h2>Sign In</h2>
	    		<div class="inputBox">
	    			<input name="email" value="<?=$email1?>" type="email">
	    			<i class="fa-regular fa-user"></i>
	    			<span>Email</span>
	    		</div>
				<p style="color:red;"><?=$email?></p>
	    		<div class="inputBox">
	    			<input name="password" type="password">
	    			<i class="fa-solid fa-lock"></i>
	    			<span>password</span>
	    		</div>
				<p style="color:red;"><?=$password?></p>
				<p style="color:red;"><?=$password1?></p>
	    		<div class="inputBox">
	    			<input type="submit" value="Log In">
	    		</div>
	    		<p>Don't have a account ? <a href="./register" class="login">Create Account</a></p>
	    	</div>
	    </div>
	</form> --}}
@endsection
