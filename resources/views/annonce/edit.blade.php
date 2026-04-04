@extends('layouts.app')

@section('content')
<h4 class="mb-3">Modifier l'annonce</h4>

@if($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach($errors->all() as $e)
                <li>{{ $e }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('annonces.update', $annonce) }}"
      enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Titre</label>
        <input type="text" name="titre" class="form-control"
               value="{{ old('titre', $annonce->titre) }}">
    </div>

    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control"
                  rows="3">{{ old('description', $annonce->description) }}</textarea>
    </div>

    <div class="mb-3">
        <label>Type</label>
        <select name="type" class="form-select">
            @foreach(['Appartement','Maison','Villa','Magasin','Terrain'] as $t)
                <option value="{{ $t }}"
                    {{ old('type', $annonce->type) == $t ? 'selected' : '' }}>
                    {{ $t }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label>Ville</label>
        <input type="text" name="ville" class="form-control"
               value="{{ old('ville', $annonce->ville) }}">
    </div>

    <div class="mb-3">
        <label>Superficie (m²)</label>
        <input type="number" name="superficie" class="form-control"
               value="{{ old('superficie', $annonce->superficie) }}">
    </div>

    <div class="mb-3">
        <label>État</label><br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="neuf" value="1"
                {{ old('neuf', $annonce->neuf) == '1' ? 'checked' : '' }}>
            <label class="form-check-label">Neuf</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="neuf" value="0"
                {{ old('neuf', $annonce->neuf) == '0' ? 'checked' : '' }}>
            <label class="form-check-label">Ancien</label>
        </div>
    </div>

    <div class="mb-3">
        <label>Prix (dhs)</label>
        <input type="number" step="0.01" name="prix" class="form-control"
               value="{{ old('prix', $annonce->prix) }}">
    </div>

    <div class="mb-3">
        <label>Photo</label>
        @if($annonce->photo)
            <div class="mb-2">
                <img src="{{ asset('storage/' . $annonce->photo) }}"
                     width="100" class="rounded">
                <small class="text-muted d-block">Laisser vide pour garder cette photo</small>
            </div>
        @endif
        <input type="file" name="photo" class="form-control" accept="image/*">
    </div>

    <button type="submit" class="btn btn-warning">Modifier</button>
    <a href="{{ route('annonces.index') }}" class="btn btn-secondary">Annuler</a>
</form>
@endsection