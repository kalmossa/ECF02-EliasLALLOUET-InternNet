@extends('layouts.app')

@section('content')
    <article>
        <h2>{{ $offer->title }}</h2>
        <p>{{ $offer->description }}</p>
        <p>Date de création : {{ $offer->created_at }}</p>
        <p>Date de mise à jour : {{ $offer->updated_at }}</p>
    </article>
    <a href="{{ route('offers.index') }}">Retour à la liste des offres</a>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Détails de l'utilisateur</h2>
        <p><strong>Nom :</strong> {{ $user->name }}</p>
        <p><strong>Adresse e-mail :</strong> {{ $user->email }}</p>
        <p><strong>Date de création :</strong> {{ $user->created_at }}</p>
        <p><strong>Date de mise à jour :</strong> {{ $user->updated_at }}</p>

        <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Retour</a>
    </div>
@endsection
