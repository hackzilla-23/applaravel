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
        * {
            padding: 0%;
            margin: 0%;
            box-sizing: border-box;
        }

        /* .container {
            position: relative;
            width: :80vw;
            height: :88vh;
        } */

        /* .content {
            padding: 20px;
            width: 98vw;
            height: auto;
            background: rgb(235, 233, 233);
            margin-left: auto;
            margin-right: 16px
        } */

        @media all and (max-width: 1024px) {
            .content {
                width: 95vw;
            }
        }

        /* .center {
            text-align: center;
            padding: 20px;
        } */

        /* .content>div {
            width: 90%;
            margin: 0 auto;
            background: white;
            height: auto;
            padding: 12px
        } */

        @media all and (min-width: 1024px) {
            .content>div {
                width: 55%;
            }
        }

        /* .contentP {
            font-size: 20px;
            line-height: 28px;
            text-align: center;
            font-weight: bold;
        } */

        /* .contentP>span {
            color: #FF0060;
        }

        .contentP+p {
            font-size: 24px;
            line-height: 28px;
            text-align: center;
            margin-top: 24px;
            font-weight: 600;
        } */

        @media all and (min-width:1024px) {
            .contentP+p {
                font-size: 30px;
            }

        }

        .contentP+p+p {
            font-size: 20px;
            line-height: 28px;
            font-weight: bold;
            text-align: left;
            margin-top: 24px;
        }

        @media all and (min-width:1024px) {
            .contentP+p+p {
                font-size: 24px;
                line-height: 32px
            }
        }

        /* .styleP {
            margin: 12px 0;
            font-size: 20px;
            line-height: 32px;
            color: rgb(179, 169, 169);
            padding: 12px;
        } */
    </style>
</head>

<body class="">
    <div class="container " style="
            position: relative;
            width: :80vw;
            height: :88vh;">
        <div class="content" style="
            padding: 10px;
            width: 98vw;
            height: auto;
            background: rgb(235, 233, 233);
            margin-left: auto;
            margin-right: 16px"
        >
            <div class="center" style="
                text-align: center;
                padding: 20px;
                width: 90%;
                margin: 0 auto;
                background: white;
                height: auto;
                padding: 12px" 
                >
                <p class="contentP" style="
                font-size: 20px;
                line-height: 28px;
                text-align: center;
                font-weight: bold;"> Big <span class="" style="color: #FF0060;">Bazzar</span> </p>

            <p class=""style = "font-size: 24px;
                line-height: 28px;
                text-align: center;
                margin-top: 24px;
                font-weight: 600;">Dites adieu aux limitations</p>
            <p style="text-align: center
                ">Vérifiez votre compte et profitez de nos services complets.</p>
            {{-- <p class="styleP">{{ $personne->nom }}Votre expérience de trading doit être fluide et ininterrompue. Pour y parvenir et profiter de tous nos services, il vous suffit de procéder à la vérification de votre compte.</p> --}}
            <p class="styleP" style="margin: 12px 0;
                font-size: 20px;
                line-height: 25px;
                color: rgb(179, 169, 169);
                padding: 12px;">Supprimer les limitations de votre compte
                Avec un compte entièrement vérifié, vous pouvez continuer à déposer, transférer et négocier des fonds.
            </p>
            <p class="styleP" style="margin: 12px 0;
                font-size: 20px;
                line-height: 25px;
                color: rgb(179, 169, 169);
                padding: 12px;">Si vous avez besoin d’aide avec vos documents, vous pouvez consulter l’article de notre
                Centre d’aide ici ou contacter notre équipe d’assistance.</p>
            <p class="styleP" style="font-size: 20px;
                line-height: 25px;
                color: rgb(179, 169, 169);
                padding: 12px;">Faites-en plus avec un compte entièrement vérifié.</p>

            <a href="#" type="submit" style="
            background-color: #FF0060;
            border-radius: 10px;
            padding: 10px;
            color: white;
            font-weight: bold;
            text-decoration: none;
            margin : 25px 0;
            display: inline-block;
            ">
                creer votre evenement maintenant
            </a>

            <h2 style="margin-bottom: 10px ; color: ; ">vous souhaitez assister à un événement ?</h2>
            <p>Utilisez unniverse pour<a href="" style="text-decoration: none; color:#FF0060">découvrir les événements</a> qui se déroulent près de chez vous.</p>

            <div style="
               /* width: 100vw; */
               background-color: rgb(0, 0, 0)
               padding : 25px 0;
               margin:  25px auto;
               height: 100%;

               "
            >
                <h2 style="margin-bottom: 10px">Vous avez des questions ?</h2>
                <p>Nous sommes ici, apprenez-en plus sur Universe <a href="$" style="color:#FF0060">ici</a> ou <a href="#" style="color:#FF0060"> contactez-nous</a></p>
            </div>

            <p class="styleP" style="margin: 12px 0;
                font-size: 20px;
                line-height: 25px;
                color: rgb(179, 169, 169);
                padding: 12px;">Merci,<br><br> <span>L’équipe Big Bazzar</span></p>

        </div>

    </div>
</body>

</html>

{{-- @endsection --}}


{{-- @endsection --}}
