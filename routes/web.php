<?php

use Illuminate\Support\Facades\Route;

$products = [
    [
        'id' => 1,
        'title' => 'HP16D0195NF',
        'price' => 'Intel i5 12th Gen',
        'image' => 'HP16D0195NF.jpg',
        'description' => 'Laptop polyvalent conçu pour la bureautique et multimédia.'
    ],
    [
        'id' => 2,
        'title' => 'HP14424U3EA',
        'price' => 'Intel i3 11th Gen',
        'image' => 'HP14424U3EA.jpg',
        'description' => 'Portable léger adapté aux tâches quotidiennes.'
    ],
    [
        'id' => 3,
        'title' => 'HUA6901443442959',
        'price' => 'Ryzen 5 4600H',
        'image' => 'HUA6901443442959.jpg',
        'description' => 'Bonne performance pour bureautique + montage léger.'
    ],
    [
        'id' => 4,
        'title' => 'NXATHEF002',
        'price' => 'Intel i7 10th Gen',
        'image' => 'NXATHEF002.jpg',
        'description' => 'Portable professionnel avec écran Full HD.'
    ],
];

Route::get('/', fn() => view('home'))->name('home');

Route::get('/about', fn() => view('about'))->name('about');

Route::get('/contact', fn() => view('contact'))->name('contact');

Route::get('/products', function () use ($products) {
    return view('products.index', compact('products'));
})->name('products.index');

Route::get('/products/{id}', function ($id) use ($products) {

    $product = collect($products)->firstWhere('id', (int) $id);

    abort_if(!$product, 404);

    return view('products.show', compact('product'));

})->name('products.show');