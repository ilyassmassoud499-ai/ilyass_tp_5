<!DOCTYPE html>
<html lang="fr">

<head>
<meta charset="UTF-8">
<title>Ecole primaire</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">

<a class="navbar-brand" href="{{ route('home') }}">Ecole</a>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="menu">

<ul class="navbar-nav me-auto">

<li class="nav-item">
<a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">
Accueil
</a>
</li>

<li class="nav-item">
<a class="nav-link">
Présentation
</a>
</li>

<li class="nav-item">
<a class="nav-link {{ request()->is('resultat') ? 'active' : '' }}" href="{{ route('resultat') }}">
Résultat
</a>
</li>

<li class="nav-item">
<a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">
Contact
</a>
</li>

</ul>

<form class="d-flex">
<input class="form-control" type="search" placeholder="Rechercher">
</form>

</div>
</div>
</nav>


@hasSection('image')
<div class="container mt-3">
@yield('image')
</div>
@endif



<div class="container mt-4">

@yield('content')

</div>



<footer class="bg-dark text-white text-center mt-5 p-4">

<p>Téléphone : 0690000000</p>

<p>Adresse : Rue Mowehidin, Hay Saada, Fes</p>

<p>© copyright 2023</p>

</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>