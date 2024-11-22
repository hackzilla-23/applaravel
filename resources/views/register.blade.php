{{-- dans le dossier user selecttionne le fichier text
@extends("users/text") OU
@extends("users.text") --}}
@extends("users.text")
@section("register")
    <form action="{{ route('register_personne') }}" method="POST">
		@csrf
        <label for="nom">Nom:</label>
        <input type="text" name="nom" id="nom"><br>

        <label for="prenom">Prenom:</label>
        <input type="text" name="prenom" id="prenom"><br>

		<label for="email">Age:</label>
		<input type="number" name="age" id="age"><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email"><br>

        <label for="password">Mot de passe:</label>
        <input type="password" name="password" id="password"><br>
        
        <label for="confirmPassword">Confirmation du mot de passe:</label>
        <input type="password" name="confirmPassword" id="confirmPassword"><br>

        <input type="submit" value="s'incrire"><br>
    </form>
	{{-- <a href="/">vers login</a> --}}
	<a href="{{ route('login') }}">vers login</a>
    {{-- <form action="/register" method="POST">
	    <div class="container">
	    	<div class="form signup">
	    		<h2>Sign Up</h2>
	    		<div class="inputBox">
	    			<input value="<?=$old_username?>" type="text" name="nom">
	    			<i class="fa-regular fa-user"></i>
	    			<span>username</span>
	    		</div>
				<p style="font-size:15px; color:red;"><?=$username?></p>
	    		<div class="inputBox">
	    			<input value="<?=$old_email?>" type="text" name="email">
	    			<i class="fa-regular fa-envelope"></i>
	    			<span>email address</span>
	    		</div>
				<p style="font-size:15px; color:red;"><?=$email?></p>
	    		<div class="inputBox">
	    			<input value="<?=$old_password?>" type="password" name="password">
	    			<i class="fa-solid fa-lock"></i>
	    			<span>create password</span>
	    		</div>
				<p style="font-size:15px; color:red;"><?=$password?></p>
	    		<div class="inputBox">
	    			<input type="password" name="password-co">
	    			<i class="fa-solid fa-lock"></i>
	    			<span>confirm password</span>
	    		</div>
				<p style="font-size:15px; color:red;"><?=$passwordco?></p>
	    		<div class="inputBox">
	    			<input type="submit" value="Create Account">
	    		</div>
	    		<p>Already a member ? <a href="./" class="login">Log in</a></p>
	    	</div>
	    </div>
	</form> --}}
@endsection
