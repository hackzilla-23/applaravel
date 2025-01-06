<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dash.css') }}">
    @vite('resources/css/app.css')

    <style>
        .circle {
            transform: rotate(360deg);
            /* Faire en sorte que l'animation commence du haut du cercle */
        }
    </style>
    <title>Document</title>
</head>

<body class="bg-[#f6f6f9]">

    {{-- slidabar btn  --}}
    <div class="navbar fixed -translate-x-52 transition-all duration-500 bottom-0 top-0 bg-white z-30 w-[210px]">
        <div class="my-4 flex items-center justify-between mx-6">
            <p><span class="font-bold text-xl">Big</span> <span class="text-[#FF0060] text-xl font-bold">Bazzar</span>
            </p>
            <img class="close-menu" src="{{ asset('img/close_24dp_000000.svg') }}" alt="">
        </div>

        <div
            class="slidebar overflow-hidden relative h-[94vh] text-sm  text-[#7d8da1] font-medium shadow-first hover:shadow-none duration-300">
            <ul>
                <li
                    class="flex hover:text-[#6C9BCF] hover:translate-x-2 duration-300 pl-6 pb-4 pt-4 items-center gap-4">
                    <img src="{{ asset('img/dashboard_24dp_5F6368_FILL0_wght400_GRAD0_opsz24.svg') }}" alt="">
                    <a id="dashboard" href="{{ route('dashboard') }}">Dashboard</a>
                </li>

                <li class="flex hover:text-[#6C9BCF] hover:translate-x-2 duration-300 pl-6 py-4 items-center gap-4">
                    <img src="{{ asset('img/person_24dp_5F6368_FILL0_wght400_GRAD0_opsz24 (1).svg') }}" alt="">
                    <a href="#">Users</a>
                </li>

                <li class="flex hover:text-[#6C9BCF] hover:translate-x-2 duration-300 pl-6 py-4 items-center gap-4">
                    <img src="{{ asset('img/production_quantity_limits_24dp_5F6368.svg') }}" alt="">
                    <a id="products" href="{{ route('main_dash') }}">Products</a>
                </li>
                <li class="flex hover:text-[#6C9BCF] hover:translate-x-2 duration-300 pl-6 py-4 items-center gap-4">
                    <img src="{{ asset('img/receipt_long_24dp_5F6368.svg') }}" alt="">
                    <a href="#">History</a>
                </li>

                <li class="flex hover:text-[#6C9BCF] hover:translate-x-2 duration-300 pl-6 py-4 items-center gap-4">
                    <img src="{{ asset('img/mail_outline_24dp_5F6368.svg') }}" alt="">
                    <a href="#">Tickets</a>
                    <p class="bg-[#FF0060] px-1.5 py-0.5 text-xs text-white rounded-md ">27</p>
                </li>

                <li class="flex hover:text-[#6C9BCF] hover:translate-x-2 duration-300 pl-6 py-4 items-center gap-4">
                    <img src="{{ asset('img/inventory_24dp_5F6368.svg') }}" alt="">
                    <a href="#">Sale list</a>
                </li>

                <li class="flex hover:text-[#6C9BCF] hover:translate-x-2 duration-300 pl-6 py-4 items-center gap-4">
                    <img src="{{ asset('img/report_gmailerrorred_24dp_5F6368.svg') }}" alt="">
                    <a href="#">Reports</a>
                </li>

                <li class="flex hover:text-[#6C9BCF] hover:translate-x-2 duration-300 pl-6 py-4 items-center gap-4">
                    <img src="{{ asset('img/settings_24dp_5F6368.svg') }}" alt="">
                    <a href="#">Settings</a>
                </li>

                <li
                    class="flex hover:text-[#6C9BCF] hover:translate-x-2 duration-300 pl-6 absolute bottom-10 items-center gap-4">
                    <img src="{{ asset('img/logout_24dp_5F6368.svg') }}" alt="">
                    <a href="{{ route('logout_personne') }}">Logout</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Header md Section -->
    <nav
        class="lg:hidden fixed right-0 left-0 z-20 flex items-center justify-between px-10 bg-white shadow-first hover:shadow-none duration-300">
        <img class="hamburger" src="{{ asset('img/notes_24dp_5F6368.svg') }}" alt="">

        <div class="profile flex items-center justify-end gap-6 py-2">
            <div class="info text-right">
                {{-- @dd( auth()->guard('admins')->user()->prenom) --}}
                @if(Auth::guard('admins')->check())
                    <p class="text-sm">Hey, <b>{{ auth()->guard('admins')->user()->prenom }}</b></p>
                    <small class="text-xs text-[#7d8da1]">Admin</small>
                @elseif(Auth::guard('personnes')->check())
                    <p class="text-sm">Hey, <b>{{ auth()->guard('personnes')->user()->prenom }}</b></p>
                    <small class="text-xs text-[#7d8da1]">user</small>
                @endif
                {{-- <p class="text-sm">Hey, <b>{{ auth()->guard('personnes')->user()->prenom }}</b></p> --}}
            </div>

            <div class="profile-photo">
                <img class="w-[40px] h-[40px] rounded-[50%]" src="{{ asset('img/souop.jpg') }}">
            </div>
            {{-- <div class="profile-photo">
                <img class="w-[40px] h-[40px] rounded-[50%]" src="{{ url('storage/personne_images/'.auth()->guard('personnes')->user()->images)}}">
            </div> --}}

        </div>
    </nav>

    <div
        class="mx-auto grid lg:grid w-[96%] gap-[20px] relative lg:grid-cols-[6rem_auto_18rem] xl:grid-cols-[13rem_auto_18rem]">
        <!-- Sidebar Section -->
        <aside class="hidden lg:flex lg:flex-col">
            <div class="my-4 text-center">
                <p><span class="font-bold lg:text-sm xl:text-xl">Big</span> <span
                        class="text-[#FF0060] lg:text-sm xl:text-xl font-bold">Bazzar</span></p>
            </div>

            <div
                class="slidebar overflow-hidden relative rounded-[16px] h-[88vh] text-sm  text-[#7d8da1] font-medium bg-white shadow-first hover:shadow-none duration-300">
                <ul>
                    <li
                        class="flex hover:text-[#6C9BCF] hover:translate-x-2 duration-300 pl-6 pb-4 pt-4 items-center gap-4">
                        <img src="{{ asset('img/dashboard_24dp_5F6368_FILL0_wght400_GRAD0_opsz24.svg') }}"
                            alt="">
                        <a class="hidden xl:flex" id="dashboard" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>

                    @if (auth()->guard('admins')->user() && auth()->guard('admins')->user()->role->name == 'admin')
                        <li
                            class="flex hover:text-[#6C9BCF] hover:translate-x-2 duration-300 pl-6 py-4 items-center gap-4">
                            <img src="{{ asset('img/person_24dp_5F6368_FILL0_wght400_GRAD0_opsz24 (1).svg') }}"
                                alt="">
                            <a class="hidden xl:flex" href="{{ route('panel_admin') }}">Users</a>
                        </li>
                    @endif

                    <li class="flex hover:text-[#6C9BCF] hover:translate-x-2 duration-300 pl-6 py-4 items-center gap-4">
                        <img src="{{ asset('img/production_quantity_limits_24dp_5F6368.svg') }}" alt="">
                        <a class="hidden xl:flex" id="products" href="{{ route('main_dash') }}">Products</a>
                    </li>
                    <li class="flex hover:text-[#6C9BCF] hover:translate-x-2 duration-300 pl-6 py-4 items-center gap-4">
                        <img src="{{ asset('img/receipt_long_24dp_5F6368.svg') }}" alt="">
                        <a class="hidden xl:flex" href="#">History</a>
                    </li>

                    <li class="flex hover:text-[#6C9BCF] hover:translate-x-2 duration-300 pl-6 py-4 items-center gap-4">
                        <img src="{{ asset('img/mail_outline_24dp_5F6368.svg') }}" alt="">
                        <a class="hidden xl:flex" href="#">Tickets</a>
                        <p class="bg-[#FF0060] px-1.5 py-0.5 text-xs text-white rounded-md ">27</p>
                    </li>

                    <li
                        class="flex hover:text-[#6C9BCF] hover:translate-x-2 duration-300 pl-6 py-4 items-center gap-4">
                        <img src="{{ asset('img/inventory_24dp_5F6368.svg') }}" alt="">
                        <a class="hidden xl:flex" href="#">Sale list</a>
                    </li>

                    @if (auth()->guard('admins')->check())
                        <li
                            class="flex hover:text-[#6C9BCF] hover:translate-x-2 duration-300 pl-6 py-4 items-center gap-4">
                            <img src="{{ asset('img/report_gmailerrorred_24dp_5F6368.svg') }}" alt="">
                            <a class="hidden xl:flex" href="">Permission</a>
                        </li>
                    @endif
                    {{-- <li
                            class="flex hover:text-[#6C9BCF] hover:translate-x-2 duration-300 pl-6 py-4 items-center gap-4">
                            <img src="{{ asset('img/report_gmailerrorred_24dp_5F6368.svg') }}" alt="">
                            <a class="hidden xl:flex" href="{{ route('email') }}">Email</a>
                        </li> --}}

                    <li
                        class="flex items-center gap-4 hover:text-[#6C9BCF] hover:translate-x-2 duration-300 pl-6 py-4 ">
                        <img src="{{ asset('img/settings_24dp_5F6368.svg') }}" alt="">
                        <a class="hidden xl:flex" href="#">Settings</a>
                    </li>

                    <li
                        class="flex hover:text-[#6C9BCF] hover:translate-x-2 duration-300 pl-6 absolute bottom-10 items-center gap-4">
                        <img src="{{ asset('img/logout_24dp_5F6368.svg') }}" alt="">
                        <a class="hidden xl:flex" href="{{ route('logout_personne') }}">Logout</a>
                    </li>
                </ul>
            </div>
        </aside>
        <!-- End of Sidebar Section -->

        @yield('main')
    </div>


    {{-- navbar  --}}
    <script>
        window.addEventListener('DOMContentLoaded', function() {
            const navbar = document.querySelector('.navbar');
            const hamburger = document.querySelector('.hamburger');
            const closeMenu = document.querySelector('.close-menu');

            hamburger.addEventListener('click', function() {
                navbar.classList.add('-translate-x-0');
                navbar.classList.remove('-translate-x-52');
            });

            closeMenu.addEventListener('click', function() {
                navbar.classList.add('-translate-x-52');
                navbar.classList.remove('-translate-x-0');
            });
        });
    </script>

    {{-- pourcentage circle  --}}
    <script>
        window.addEventListener('load', function() {
            const circle = document.getElementById('progressCircle');
            const percentageText = document.getElementById('percentageText');

            const targetPercentage = 81; // Valeur cible du pourcentage (à changer si nécessaire)

            // Calculer la circonférence du cercle
            const radius = circle.r.baseVal.value;
            const circumference = 2 * Math.PI * radius;

            // Le stroke-dasharray représente la circonférence totale
            circle.style.strokeDasharray = circumference;

            // Calcul du stroke-dashoffset en fonction du pourcentage
            const offset = circumference - (targetPercentage / 100) * circumference;

            // Initialiser le pourcentage à 0
            let currentPercentage = 0;
            let currentOffset = circumference;

            // Fonction pour changer la couleur du cercle en fonction du pourcentage
            const updateCircleColor = (percentage) => {
                if (percentage <= 50) {
                    circle.style.stroke = "#FF0060"; // Rouge pour 0% - 50%
                } else if (percentage <= 75) {
                    circle.style.stroke = "#FF9800"; // Orange pour 51% - 75%
                } else {
                    circle.style.stroke = "#1B9C85"; // Vert pour 76% - 100%
                }
            };

            // Fonction pour incrémenter progressivement le pourcentage
            const incrementPercentage = () => {
                if (currentPercentage < targetPercentage) {
                    currentPercentage++;
                    currentOffset = circumference - (currentPercentage / 100) * circumference;

                    // Mettre à jour la couleur du cercle en fonction du pourcentage
                    updateCircleColor(currentPercentage);

                    // Mettre à jour le texte du pourcentage
                    percentageText.textContent = `${currentPercentage}%`;

                    // Mettre à jour le stroke-dashoffset pour faire avancer l'animation du cercle
                    circle.style.strokeDashoffset = currentOffset;

                    // Appeler la fonction toutes les 10ms pour un effet fluide
                    setTimeout(incrementPercentage, 10);
                }
            };

            // Appliquer une transition fluide pour l'offset
            circle.style.transition = 'stroke-dashoffset 1s ease';

            // Démarrer l'animation
            incrementPercentage();
        });

        window.addEventListener('load', function() {
            const circle = document.getElementById('progressCircle1');
            const percentageText = document.getElementById('percentageText1');

            const targetPercentage = 51; // Valeur cible du pourcentage (à changer si nécessaire)

            // Calculer la circonférence du cercle
            const radius = circle.r.baseVal.value;
            const circumference = 2 * Math.PI * radius;

            // Le stroke-dasharray représente la circonférence totale
            circle.style.strokeDasharray = circumference;

            // Calcul du stroke-dashoffset en fonction du pourcentage
            const offset = circumference - (targetPercentage / 100) * circumference;

            // Initialiser le pourcentage à 0
            let currentPercentage = 0;
            let currentOffset = circumference;

            // Fonction pour changer la couleur du cercle en fonction du pourcentage
            const updateCircleColor = (percentage) => {
                if (percentage <= 50) {
                    circle.style.stroke = "#FF0060"; // Rouge pour 0% - 50%
                } else if (percentage <= 75) {
                    circle.style.stroke = "#FF9800"; // Orange pour 51% - 75%
                } else {
                    circle.style.stroke = "#1B9C85"; // Vert pour 76% - 100%
                }
            };

            // Fonction pour incrémenter progressivement le pourcentage
            const incrementPercentage = () => {
                if (currentPercentage < targetPercentage) {
                    currentPercentage++;
                    currentOffset = circumference - (currentPercentage / 100) * circumference;

                    // Mettre à jour la couleur du cercle en fonction du pourcentage
                    updateCircleColor(currentPercentage);

                    // Mettre à jour le texte du pourcentage
                    percentageText.textContent = `${currentPercentage}%`;

                    // Mettre à jour le stroke-dashoffset pour faire avancer l'animation du cercle
                    circle.style.strokeDashoffset = currentOffset;

                    // Appeler la fonction toutes les 10ms pour un effet fluide
                    setTimeout(incrementPercentage, 10);
                }
            };

            // Appliquer une transition fluide pour l'offset
            circle.style.transition = 'stroke-dashoffset 1s ease';

            // Démarrer l'animation
            incrementPercentage();
        });

        window.addEventListener('load', function() {
            const circle = document.getElementById('progressCircle2');
            const percentageText = document.getElementById('percentageText2');

            const targetPercentage = 20; // Valeur cible du pourcentage (à changer si nécessaire)

            // Calculer la circonférence du cercle
            const radius = circle.r.baseVal.value;
            const circumference = 2 * Math.PI * radius;

            // Le stroke-dasharray représente la circonférence totale
            circle.style.strokeDasharray = circumference;

            // Calcul du stroke-dashoffset en fonction du pourcentage
            const offset = circumference - (targetPercentage / 100) * circumference;

            // Initialiser le pourcentage à 0
            let currentPercentage = 0;
            let currentOffset = circumference;

            // Fonction pour changer la couleur du cercle en fonction du pourcentage
            const updateCircleColor = (percentage) => {
                if (percentage <= 50) {
                    circle.style.stroke = "#FF0060"; // Rouge pour 0% - 50%
                } else if (percentage <= 75) {
                    circle.style.stroke = "#FF9800"; // Orange pour 51% - 75%
                } else {
                    circle.style.stroke = "#1B9C85"; // Vert pour 76% - 100%
                }
            };

            // Fonction pour incrémenter progressivement le pourcentage
            const incrementPercentage = () => {
                if (currentPercentage < targetPercentage) {
                    currentPercentage++;
                    currentOffset = circumference - (currentPercentage / 100) * circumference;

                    // Mettre à jour la couleur du cercle en fonction du pourcentage
                    updateCircleColor(currentPercentage);

                    // Mettre à jour le texte du pourcentage
                    percentageText.textContent = `${currentPercentage}%`;

                    // Mettre à jour le stroke-dashoffset pour faire avancer l'animation du cercle
                    circle.style.strokeDashoffset = currentOffset;

                    // Appeler la fonction toutes les 10ms pour un effet fluide
                    setTimeout(incrementPercentage, 10);
                }
            };

            // Appliquer une transition fluide pour l'offset
            circle.style.transition = 'stroke-dashoffset 1s ease';

            // Démarrer l'animation
            incrementPercentage();
        });
    </script>

    {{-- formulaire ajout  --}}
    <script>
        window.addEventListener('DOMContentLoaded', function() {
            const navbar = document.querySelector('.addProductModal');
            const hamburger = document.querySelector('.addProductBtn');
            const closeMenu = document.querySelector('.close');

            hamburger.addEventListener('click', function() {
                navbar.classList.add('-translate-y-0');
                navbar.classList.remove('-translate-y-[800px]');
            });

            closeMenu.addEventListener('click', function() {
                navbar.classList.add('-translate-y-[800px]');
                navbar.classList.remove('-translate-y-0');
            });
        });
    </script>

    {{-- formulaire edit  --}}
    <script>
        function editeproduct(id) {
            // console.log(id);
            // Récupérer les éléments du DOM
            const editbtn = document.getElementById('editbtn' + id);
            const editProductModal = document.getElementById(id);
            const closeEditBtn = document.getElementById('closeEditBtn' + id);
            // console.log(editbtn);
            // console.log(editProductModal);
            // editbtn.addEventListener('click', function() {
            // resets(editProductModal); // Réinitialiser l'animation à chaque fois
            editProductModal.classList.remove('hidden'); // Rendre le modal visible
            editProductModal.classList.add('flex'); // Activer le display flex pour le modal

            // Lancer l'animation de translation (du bas vers sa position normale)
            setTimeout(() => {
                editProductModal.classList.remove('-translate-y-[800px]',
                    'opacity-0'); // Supprimer les classes initiales
                editProductModal.classList.add('translate-y-0',
                    'opacity-100'); // Appliquer les classes finales
            }, 10); // Petit délai pour appliquer la transition
            // });
            // Fermer le modal lorsque le bouton "Fermer" est cliqué
            closeEditBtn.addEventListener('click', function() {
                // Réinitialiser les classes de translation avant de fermer
                editProductModal.classList.remove('translate-y-0', 'opacity-100');
                editProductModal.classList.add('-translate-y-[800px]', 'opacity-0');

                // Cacher le modal après la fin de l'animation
                setTimeout(() => {
                    editProductModal.classList.add('hidden'); // Cacher le modal après l'animation
                    editProductModal.classList.remove('flex'); // Retirer le flex
                }, 700); // La durée de l'animation correspond à la durée de transition
            });
            // if (event.target !== editProductModal) {
            //     closeModalBtn.click(); // Fermer le modal si l'utilisateur clique en dehors du contenu
            // }
        }
        // Fonction pour réinitialiser les classes d'animation avant d'afficher le modal

        // function resets(editProductModal) {
        //     // Réinitialiser les classes de translation avant de commencer une nouvelle animation
        //     // console.log(editProductModal);
        //     editProductModal.classList.remove('translate-y-0',
        //         '-translate-y-[800px]'); // Supprimer les classes de translation
        //     editProductModal.classList.add('-translate-y-[800px]',
        //         'opacity-0'); // Réinitialiser à une position basse et une opacité à 0
        // }

        // Afficher le modal avec une animation lors du clic sur "Ajouter un produit"


        // Fermer le modal si on clique en dehors du modal
        // window.addEventListener('click', function(event) {
        //     // Vérifie si l'élément cliqué est bien l'overlay (background), pas le contenu du modal
        //     if (event.target === editProductModal) {
        //         closeModalBtn.click(); // Fermer le modal si l'utilisateur clique en dehors du contenu
        //     }
        // });
    </script>

</body>

</html>
