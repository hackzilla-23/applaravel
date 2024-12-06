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
    <style>
        *{
            padding: 0%;
            margin: 0%;
            box-sizing: border-box;
        }
        .container{
            position : relative;
            width: :80vw;
            height: :88vh;
        }
        .content{
            padding: 20px;
            width: 98vw;
            height: auto;
            background: rgb(235, 233, 233);
            margin-left: auto;
            margin-right: 16px
        }
        @media all and (max-width: 1024px){
            .content{
            width: 95vw;
        }
        }
        .center{
            text-align: center;
            padding: 20px;
        }
        .content > div{
            width: 90%;
            margin: 0 auto;
            background: white;
            height: auto;
            padding: 12px

        }
        @media all and (min-width: 1024px){
            .content > div{
                width: 55%;
            }
        }
        .contentP{
            font-size: 20px;
            line-height: 28px;
            text-align: center;
            font-weight: bold;
        }
        .contentP > span{
            color: #FF0060;
        }
        .contentP + p{
            font-size: 24px;
            line-height: 28px;
            text-align: center;
            margin-top: 24px;
            font-weight: 600;
        }
        @media all and (min-width:1024px){
                .contentP + p{
                font-size: 30px;
            }

        }
        .contentP + p + p {
            font-size: 20px;
            line-height: 28px;
            font-weight: bold;
            text-align: left;
            margin-top: 24px;
        }
        @media all and (min-width:1024px){
            .contentP + p +p{
                font-size: 24px;
                line-height: 32px
            }
        }
        .styleP{
            margin:12px 0;
            font-size: 20px ;
            line-height: 32px;
            color: rgb(179, 169, 169);
            padding: 12px;
        }


    </style>
</head>

<body class="">
    <div class="container ">
        {{-- <div  class="">
            <div class="bg-white fixed w-[79vw] z-[100] overflow-hidden h-14 rounded-tl-xl rounded-tr-xl shadow-md grid grid-cols-1 gap-3 lg:grid-cols-2 items-center px-4">
                <div class="flex gap-7 ">
                    <a href="#" class="text-gray-400"><img src="{{ asset('img/person_24dp_5F6368_FILL0_wght400_GRAD0_opsz24 (1).svg') }}"></a>
                    <a href="#" class="text-gray-400"><img src="{{ asset('img/mail_outline_24dp_5F6368.svg') }}" alt=""></a>
                    <a href="#" class="text-gray-400"><img src="{{ asset('img/dashboard_24dp_5F6368_FILL0_wght400_GRAD0_opsz24.svg') }}"
                        alt=""></a>
                    <a href="#" class="text-gray-400"><img src="{{ asset('img/production_quantity_limits_24dp_5F6368.svg') }}" alt=""></a>
                    <span class="text-gray-200">|</span>
                    <a href="#" class="text-gray-400"><img
                            src="{{ asset('img/report_gmailerrorred_24dp_5F6368.svg') }}" alt=""></a>
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

                        <p class=" text-sm lg:text-xl">Ne Restez pas avec un compte non verifié (et limité) <button
                                type="button"
                                class="bg-gray-300 px-1 rounded-md text-sm hover:bg-gray-400 duration-200 ease-out">inbox</button>
                        </p>

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
        <div class="content">
            <div class="center">
                <p class="contentP"> Big <span class="">Bazzar</span> </p>

                <p class="">Dites adieu aux limitations</p>
                <p style="text-align: center">Vérifiez votre compte et profitez de nos services complets.</p>
                {{-- <p class="styleP">{{ $personne->nom }}Votre expérience de trading doit être fluide et ininterrompue. Pour y parvenir et profiter de tous nos services, il vous suffit de procéder à la vérification de votre compte.</p> --}}
                <p class="styleP">Supprimer les limitations de votre compte
                    Avec un compte entièrement vérifié, vous pouvez continuer à déposer, transférer et négocier des fonds.</p>
                <p class="styleP">Si vous avez besoin d’aide avec vos documents, vous pouvez consulter l’article de notre Centre d’aide ici ou contacter notre équipe d’assistance.</p>
                <p class="styleP">Faites-en plus avec un compte Exness entièrement vérifié.</p>

                <p class="styleP">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A commodi possimus inventore delectus, fugit, at dolorum fugiat odio magni in illum facilis vero perspiciatis accusantium earum tenetur consequuntur. Laborum, expedita possimus obcaecati ipsam distinctio, incidunt omnis necessitatibus quibusdam, porro consequuntur molestiae veniam quia consequatur provident consectetur doloremque ex quo temporibus sit facilis illum eos! Nobis corrupti officia ab error, architecto voluptates nesciunt. Labore, harum. Deserunt, alias incidunt? Recusandae deleniti, voluptatem similique ducimus eligendi dicta aspernatur voluptatum maiores optio unde, quae corrupti et quasi nostrum fugit, perspiciatis libero nisi blanditiis consectetur quas aperiam doloribus inventore? Facere pariatur exercitationem laudantium repellendus ipsam?</p>
                <p class="styleP">Merci,<br><br> <span>L’équipe Big Bazzar</span></p>

            </div>

        </div>
    </div>
</body>

</html>

@endsection


{{-- @endsection --}}
