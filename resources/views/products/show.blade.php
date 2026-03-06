@extends('layouts.app')

@section('content')

<a href="{{ route('products.index') }}" class="btn btn-secondary mb-3">

Retour

</a>

<div class="card p-4">

<img src="{{ asset('images/'.$product['image']) }}"
style="height:300px; object-fit:contain">

<h3>{{ $product['title'] }}</h3>

<p>{{ $product['price'] }}</p>

<p>{{ $product['description'] }}</p>

</div>

@endsection