@extends('layouts.app')

@section('content')

<h2 class="mb-4">Nos Produits</h2>

<div class="row g-4">
    @foreach($products as $product)
        <div class="col-md-3">
            <x-product-card :product="$product"/>
        </div>
    @endforeach
</div>

@endsection