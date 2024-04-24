<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InternNet - Plateforme de Stages</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f3f4f6;
            color: #333;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        main {
            padding: 20px;
            min-height: calc(100vh - 200px); /* Hauteur de l'en-tête et du pied de page */
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="{{ route('offers.index') }}">Offres de Stage</a></li>
            <li><a href="{{ route('profile.edit') }}">Profil</a></li>
        </ul>
    </nav>
</header>

<main>
    @yield('content')
</main>

<footer>
    <p>&copy; 2024 InternNet - Tous droits réservés</p>
</footer>
</body>
</html>
