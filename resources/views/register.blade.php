<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('register.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body class="container mx-auto">
    {{-- @section('register') --}}


    <div class="register-container w-[90%] xl:w-[50%]">

        <!-- Afficher le message de succès s'il existe -->
        {{-- @if (session('success'))
        <div class="text-green-500 text-sm text-center">
            {{ session('success') }}
        </div>
    @endif --}}

        <form class="register-form px-[20px] py-[20px]" enctype="multipart/form-data" method="POST"
            action="{{ route('register_personne') }}">
            @csrf
            <h2>Inscription</h2>

            <div class="md:grid md:grid-cols-2 md:gap-10">
                {{-- grid left --}}
                <div>
                    <div class="input-group">
                        <label for="username">Nom</label>
                        <input value="{{ old('nom') }}" type="text" id="username" name="nom"
                            placeholder="Entrez un nom">
                        @error('nom')
                            <p class="text-red-500 text-sm pt-2">{{ "Veuillez entrer un nom d'utiliateur valide" }}
                            </p>
                        @enderror
                    </div>

                    <div class="input-group">
                        <label for="email">Email</label>
                        <input value="{{ old('email') }}" type="email" id="email" name="email"
                            placeholder="Votre adresse email">
                        @error('email')
                            <p class="text-red-500 text-sm pt-2">{{ 'Veuillez entrer un email valide' }}</p>
                        @enderror
                    </div>

                    <div class="input-group relative hidden md:flex md:flex-col">
                        <label for="password">Mot de passe</label>
                        <div class="    ">
                            <input  type="password" id="password" name="password" placeholder="Votre mot de passe" class=" border-2 border-solid border-blue-500">
                            <i class="fa fa-eye-slash absolute top-11 right-4"  aria-hidden="true"></i>
                        </div>
                        @error('password')
                        <p class="text-red-500 text-sm pt-2">{{ 'Veuillez entrer un mot de passe valide' }}</p>
                        @enderror

                    </div>

                    <div class="input-group">
                        <label class="pb-2 cursor-pointer" for="images">Inserer une image</label>
                        <input value="{{ old('images') }}" onchange="previewImage(event)" type="file" accept="image/*"
                            class="mb-5 mt-2 xl:mt-0 cursor-pointer bg-gray-100 w-full py-3 pl-6 rounded-sm" name="images"
                            id="images"
                        >
                        @error('images')
                            <p class="text-red-500 text-sm">{{ 'Veuillez entrer un fichier valide (jpeg,jpg,png,gif,svg) et de taille maximale 2 Mo' }}</p>
                        @enderror
                    </div>
                </div>
                
                {{-- grid right --}}
                <div>

                    <div class="input-group">
                        <label for="prenom">Prenom</label>
                        <input value="{{ old('prenom') }}" type="text" id="prenom" name="prenom"
                            placeholder="Choisissez un prenom">
                        @error('prenom')
                            <p class="text-red-500 text-sm pt-2">{{ 'Veuillez entrer un prenom valide' }}</p>
                        @enderror
                    </div>

                    <div class="input-group hidden md:flex md:flex-col">
                        <label for="age">Age</label>
                        <input value="{{ old('age') }}" type="number" id="age" name="age"
                            placeholder="Choisissez un age">
                        @error('age')
                            <p class="text-red-500 text-sm pt-2">{{ 'Veuillez entrer un age valide' }}</p>
                        @enderror
                    </div>
                    

                    <div class="input-group relative">
                        <label for="confirm-password">Confirmer le mot de passe</label>
                        <div>

                            <input type="password" id="confirm-password" name="confirm-password"
                            placeholder="Confirmez le mot de passe">
                            <i class="fa fa-eye-slash absolute top-11 right-4" aria-hidden="true"></i>
                        </div>
                        @error('confirm-password')
                            <p class="text-red-500 text-sm pt-2">{{ 'Veuillez entrer un mot de passe identique' }}</p>
                        @enderror
                    </div>

                    <div class="input-group">
                        <img id="preview" src="#" alt="Aperçu de l'image"
                            style="max-width: 340px; display: none; margin-top: 10px;">
                    </div>
                </div>
            </div>

            <div class="input-group submit mt-5">
                <button type="submit" class="submit-btn">S'inscrire</button>
            </div>

            <div class="login-link">
                <p>Already a member ? <a href="{{ route('login') }}">Log in</a></p>
            </div>
        </form>
    </div>

    {{-- @endsection --}}

    {{-- preview  --}}
    <script>
        function previewImage(event) {
            const reader = new FileReader();
            reader.onload = function() {
                const output = document.getElementById('preview');
                output.src = reader.result;
                output.style.display = 'block';
            };
            reader.readAsDataURL(event.target.files[0]);
        }

        const password = document.getElementById('password');
        const confirm_password = document.getElementById('"confirm-password');
        const eyeIcon = document.querySelector('.fa-eye-slash');

        eyeIcon.addEventListener('click', function() {
            if (password.type === 'text' ) {
                password.type = 'password';
                // confirm_password.type = 'password';
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            }
            // else if (confirm_password.type === 'text' ) {
            //     confirm_password.type = 'password';
            //     eyeIcon.classList.remove('fa-eye');
            //     eyeIcon.classList.add('fa-eye-slash');
            // }
            else {
                password.type = 'text';
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            }
        })
    </script>
</body>

</html>
