@extends('layouts.app')

@section('content')
<h1>Bienvenue sur notre sites</h1>

<a href="{{ route('products.index') }}" class="btn btn-primary">
    Voir les produits
</a>
@endsection