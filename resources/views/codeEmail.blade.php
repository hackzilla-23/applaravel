<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div style="
        color : rgb(30, 28, 28);
        text-align : center;
        line-height : 24px
        ">
        <h1>Finaliser la mofication du mot de passe</h1>
        <p>Saisir le code <b>{{ $token }}</b> cela te connectera et confirmera automatiquement ton  adresse e-mail</p>
        <p>Ce code est valide pour <span style="font-weight: bold">5min</span></p>
        <a href="" type="submit" style="
            background-color: #FF0060;
            border-radius: 10px;
            padding: 10px 15px;
            color: white;
            font-weight: bold;
            text-decoration: none;
            margin : 25px 0;
            display: inline-block;
            ">
                connexion
            </a>
    </div>
</body>
</html>