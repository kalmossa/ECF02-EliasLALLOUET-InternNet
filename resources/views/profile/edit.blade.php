@extends('layouts.app')

@section('content')
    <h2>Éditer le Profil</h2>
    <form action="{{ route('profile.update') }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="company_name">Nom de l'entreprise :</label>
            <input type="text" id="company_name" name="company_name">
        </div>
        <div>
            <label for="company_description">Description de l'entreprise :</label>
            <textarea id="company_description" name="company_description"></textarea>
        </div>
        <button type="submit">Enregistrer les modifications</button>
    </form>
@endsection
