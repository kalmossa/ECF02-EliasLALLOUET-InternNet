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
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
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
            font-size: 18px;
        }

        main {
            padding: 20px;
            min-height: calc(100vh - 260px); /* Hauteur de l'en-tête et du pied de page */
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

        .offer {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .offer h3 {
            margin-top: 0;
            color: #333;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .offer p {
            color: #666;
            font-size: 16px;
            line-height: 1.5;
        }

        .offer a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        h1 {
            text-align: center;
            font-size: 36px;
            margin-bottom: 40px;
        }

        section {
            max-width: 800px;
            margin: 0 auto;
        }

        .logo {
            width: 100px;
            height: auto;
        }
    </style>
</head>

<body>

<header>
    <img src="8688110-logo-recherche-emploi-gratuit-vectoriel.jpg" alt="Logo InternNet" class="logo">
    <nav>
        <ul>
            <li><a href="{{ route('offers.index') }}">Offres de Stage</a></li>
            <li><a href="{{ route('profile.edit') }}">Profil</a></li>
        </ul>
    </nav>
</header>

<main>
    <h1>Bienvenue sur InternNet - Plateforme de Stages</h1>

    <section>
        <h2>Liste des Offres de Stage</h2>
        <div class="offer">
            <h3><a href="{{ route('offers.show', 1) }}">Offre de Stage 1</a></h3>
            <p>Description de l'offre de stage 1...</p>
        </div>
        <div class="offer">
            <h3><a href="{{ route('offers.show', 2) }}">Offre de Stage 2</a></h3>
            <p>Description de l'offre de stage 2...</p>
        </div>
    </section>
</main>

<footer>
    <p>&copy; 2024 InternNet - Tous droits réservés</p>
</footer>
</body>
</html>
