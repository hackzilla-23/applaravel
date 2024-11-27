@extends('index')

@section('style404')
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            text-align: center;
            padding: 50px;
            background-color: #f4f4f4;
        }

        h1 {
            font-size: 120px;
            color: #e74c3c;
        }

        p {
            font-size: 20px;
            color: #555;
        }

        a {
            color: #3498db;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
@endsection

<h1>404</h1>
<p>Désolé, la page que vous cherchez n'existe pas.</p>
<p><a href="{{ url('/') }}">Retour à la page d'accueil</a></p>
