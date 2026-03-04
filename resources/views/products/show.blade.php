@extends('layouts.app')

@section('content')

<a href="{{ route('products.index') }}" class="btn btn-secondary mb-3">
     Retour
</a>

<div class="card">
    <div class="card-body">
        <img src="{{ asset('images/'.$product['image']) }}" 
             class="img-fluid mb-3" 
             style="height:300px; object-fit:contain">

        <h2>{{ $product['title'] }}</h2>
        <p class="text-success">{{ $product['price'] }}</p>
        <p>{{ $product['description'] }}</p>
    </div>
</div>

@endsection