{{-- @extends('users.text') --}}
{{-- @extends('dashboard.dashboard') --}}

{{-- @section('email') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="">
    <div class="relative mt-[60px]  overflow-auto bg-white w-[80vw] h-[88vh] rounded-tl-xl rounded-t-xl ">
        <div  class="">
            <div class="bg-white fixed w-[79vw] z-[100] overflow-hidden h-14 rounded-tl-xl rounded-tr-xl shadow-md grid grid-cols-1 gap-3 lg:grid-cols-2 items-center px-4">
                <div class="flex gap-7 ">
                    {{-- <a href="#" class="text-gray-400 mr-3 hover:px-2 hover:py-1 duration-200 rounded-full"><i class="fa-solid fa-edit"></i></a> --}}
                    <a href="#" class="text-gray-400"><img src="{{ asset('img/person_24dp_5F6368_FILL0_wght400_GRAD0_opsz24 (1).svg') }}"></a>
                    <a href="#" class="text-gray-400"><img src="{{ asset('img/mail_outline_24dp_5F6368.svg') }}" alt=""></a>
                    <a href="#" class="text-gray-400"><img src="{{ asset('img/dashboard_24dp_5F6368_FILL0_wght400_GRAD0_opsz24.svg') }}"
                        alt=""></a>
                    <a href="#" class="text-gray-400"><img src="{{ asset('img/production_quantity_limits_24dp_5F6368.svg') }}" alt=""></a>
                    <span class="text-gray-200">|</span>
                    <a href="#" class="text-gray-400"><img src="{{ asset('img/report_gmailerrorred_24dp_5F6368.svg') }}" alt=""></a>
                    <img src="{{ asset('img/inventory_24dp_5F6368.svg') }}" alt=""></a>
                    <a href="#" class="text-gray-400"><i class="fa-solid fa-edit"></i></a>
                </div>
                <div class=" lg:justify-end flex gap-1">
                    <a href="#" class="text-gray-400"><i class="fa-solid fa-edit"></i></a>
                    <a href="#" class="text-gray-400"><i class="fa-solid fa-edit"></i></a>
                    <a href="#" class="text-gray-400"><i class="fa-solid fa-edit"></i></a>
                </div>
            </div>
            <div class="p-4 pl-[75px] bg-white pt-20">
                <div class="flex justify-between">
                    <div>
                        <p class=" text-sm lg:text-xl">Ne Restez pas avec un compte non verifié (et limité)   <button type="button" class="bg-gray-300 px-1 rounded-md text-sm hover:bg-gray-400 duration-200 ease-out">inbox</button></p>
                        
                    </div>
                    <div class="flex flex-row gap-2">
                        {{-- <a href="#" class="text-gray-400"><i class="fa-solid fa-edit"></i></a>
                        <a href="#" class="text-gray-400"><i class="fa-solid fa-edit"></i></a> --}}
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:flex lg:justify-between lg:items-center ">
                    
                        <p class="mt-4 ">bigBazzar@gmail.com</p>
                        <p>1 decembre 2024 , 14:08</p>
                        
                    
                    {{-- <div class="flex lg:justify-end flex-row gap-2 ">
                    </div> --}}
                </div>


            </div>
        </div>
        <div class=" p-4  mt-5 w-[75vw] h-auto bg-gray-200 ml-auto mr-4">
            <div class=" w-[90%] lg:w-[55%] mx-auto bg-white h-auto p-3">
                <p class="text-xl text-center font-bold"> Big <span class="text-[#FF0060]">Bazzar</span> </p>

                <p class="text-2xl lg:text-3xl font-semi-bold text-center mt-6">Dites adieu aux limitations</p>
                <p class="text-xl lg:text-2xl font-bold text-left mt-6">Vérifiez votre compte et profitez de nos services complets.</p>
                <p class="my-6 text-gray-400 text-xl">{{ $personne->nom }}Votre expérience de trading doit être fluide et ininterrompue. Pour y parvenir et profiter de tous nos services, il vous suffit de procéder à la vérification de votre compte.</p>
                <p class="my-6 text-gray-400 text-xl">Supprimer les limitations de votre compte
                    Avec un compte entièrement vérifié, vous pouvez continuer à déposer, transférer et négocier des fonds.</p>
                <p class="my-6 text-gray-400 text-xl">Si vous avez besoin d’aide avec vos documents, vous pouvez consulter l’article de notre Centre d’aide ici ou contacter notre équipe d’assistance.</p>
                <p class="my-6 text-gray-400 text-xl">Faites-en plus avec un compte Exness entièrement vérifié.</p>
                <p class="my-6 text-gray-400 text-xl">Merci,</p><br>
                <p class="my-6 text-gray-400 text-xl">L’équipe Big Bazzar</p>
            </div>

        </div>
        <div class="pl-[75px] my-4">

            <button class=" border-solid border-black border-2 px-4 rounded-3xl py-2 hover:bg-gray-300 duration-300 ">reply</button>
            <button class=" border-solid border-black border-2 px-4 rounded-3xl py-2 hover:bg-gray-300 duration-300 ">Forward</button>
        </div>
    </div>
</body>
</html>
   
{{-- @endsection --}}