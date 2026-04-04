@extends('layouts.app')

@section('content')
<h4 class="mb-3">Liste des annonces</h4>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<a href="{{ route('annonces.create') }}" class="btn btn-primary mb-3">
    Nouvelle annonce
</a>

<table class="table table-bordered table-hover">
    <thead class="table-light">
        <tr>
            <th>Photo</th>
            <th>Titre</th>
            <th>Description</th>
            <th>Type</th>
            <th>Ville</th>
            <th>Superficie (m²)</th>
            <th>Etat</th>
            <th>Prix (dhs)</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($annonces as $annonce)
        <tr>
            <td>
                @if($annonce->photo)
                    <img src="{{ asset('storage/' . $annonce->photo) }}"
                         width="60" class="rounded">
                @else
                    <span class="text-muted">—</span>
                @endif
            </td>
            <td>{{ $annonce->titre }}</td>
            <td>{{ Str::limit($annonce->description, 50) }}</td>
            <td>{{ $annonce->type }}</td>
            <td>{{ $annonce->ville }}</td>
            <td>{{ $annonce->superficie }}</td>
            <td>{{ $annonce->neuf ? 'Neuf' : 'Ancien' }}</td>
            <td>{{ number_format($annonce->prix, 2) }}</td>
            <td class="d-flex gap-1">
                <a href="{{ route('annonces.show', $annonce) }}"
                   class="btn btn-sm btn-secondary">
                    <i class="bi bi-eye">voir</i>
                </a>
                <a href="{{ route('annonces.edit', $annonce) }}"
                   class="btn btn-sm btn-warning">
                    <i class="bi bi-pencil">modifier</i>
                </a>
                <form action="{{ route('annonces.destroy', $annonce) }}"
                      method="POST"
                      onsubmit="return confirm('Voulez-vous vraiment supprimer cette annonce ?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">
                        <i class="bi bi-trash">supprimer</i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection