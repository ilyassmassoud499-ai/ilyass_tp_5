<div class="card h-100 shadow-sm">
    <img src="{{ asset('images/'.$product['image']) }}"
         class="card-img-top p-3"
         style="height:180px; object-fit:contain;">

    <div class="card-body text-center">
        <h6 class="fw-bold">{{ $product['title'] }}</h6>

        <p class="text-success small">
            {{ $product['price'] }} MAD
        </p>

        <a href="{{ route('products.show', $product['id']) }}"
           class="btn btn-primary w-100">
            Voir
        </a>
    </div>
</div>