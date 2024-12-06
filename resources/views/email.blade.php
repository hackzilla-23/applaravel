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