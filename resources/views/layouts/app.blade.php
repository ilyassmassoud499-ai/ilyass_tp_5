<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP Laravel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>


<nav class="navbar navbar-dark bg-dark px-3">
    <span class="navbar-brand mb-0 h1">TP Laravel</span>
</nav>

<div class="container-fluid">
    <div class="row">

  
        <div class="col-md-2 sidebar p-3">
            <h6 class="text-muted">NAVIGATION</h6>

            <a href="{{ route('home') }}">Accueil</a>
            <a href="{{ route('products.index') }}">Produits</a>
            <a href="{{ route('about') }}">À propos</a>
            <a href="{{ route('contact') }}">Contact</a>
        </div>

    
        <div class="col-md-10 p-4">
            @yield('content')
        </div>

    </div>
</div>


<footer class="text-center py-3 mt-4">
    © 2026 - TP Laravel
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>