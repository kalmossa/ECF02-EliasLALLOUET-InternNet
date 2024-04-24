<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon mini blog</title>
</head>
<body>

<h2>Créer une Offre de Stage</h2>
<form action="{{ route('offers.store') }}" method="POST">
    @csrf
    <div>
        <label for="title">Titre :</label>
        <input type="text" id="title" name="title">
    </div>
    <div>
        <label for="description">Description :</label>
        <textarea id="description" name="description"></textarea>
    </div>
    <button type="submit">Créer l'Offre</button>
</form>

</body>
</html>
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Créer un nouvel utilisateur</h2>
        <form method="POST" action="{{ route('admin.users.store') }}">
            @csrf

            <div class="form-group">
                <label for="name">Nom :</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="email">Adresse e-mail :</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="password">Mot de passe :</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Créer</button>
        </form>
    </div>
@endsection

