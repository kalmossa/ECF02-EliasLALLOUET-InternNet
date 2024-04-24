@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Modifier l'offre</h2>
        <form method="POST" action="{{ route('offers.update', $offer->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Titre :</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $offer->title }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description :</label>
                <textarea name="description" id="description" class="form-control" required>{{ $offer->description }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
        </form>
    </div>
@endsection
