@extends('layouts.app')

@section('content')
    <h2>Liste des Offres de Stage</h2>
    @if($offers->isEmpty())
        <p>Aucune offre de stage disponible pour le moment.</p>
        <p><a href="{{ route('offers.create') }}">Créer une offre de stage</a>
        </p>
    @else
        @foreach($offers as $offer)
            <div class="offer">
                <h3><a href="{{ route('offers.show', $offer->id) }}">{{ $offer->title }}</a></h3>
                <p>{{ $offer->description }}</p>
                <p><a href="{{ route('offers.create') }}">Créer une offre de stage</a>
                </p>
            </div>
        @endforeach
    @endif
@endsection
