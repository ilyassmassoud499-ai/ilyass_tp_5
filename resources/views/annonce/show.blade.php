@extends('layouts.app')

@section('content')
<h4 class="mb-3">Détail de l'annonce</h4>

<div class="card">
    @if($annonce->photo)
        <img src="{{ asset('storage/' . $annonce->photo) }}"
             class="card-img-top" style="max-height:300px; object-fit:cover;">
    @endif
    <div class="card-body">
        <h5 class="card-title">{{ $annonce->titre }}</h5>
        <p>{{ $annonce->description }}</p>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>Type :</strong> {{ $annonce->type }}</li>
            <li class="list-group-item"><strong>Ville :</strong> {{ $annonce->ville }}</li>
            <li class="list-group-item"><strong>Superficie :</strong> {{ $annonce->superficie }} m²</li>
            <li class="list-group-item"><strong>État :</strong> {{ $annonce->neuf ? 'Neuf' : 'Ancien' }}</li>
            <li class="list-group-item"><strong>Prix :</strong> {{ number_format($annonce->prix, 2) }} dhs</li>
        </ul>
    </div>
</div>

<a href="{{ route('annonces.index') }}" class="btn btn-secondary mt-3">Retour</a>
@endsection