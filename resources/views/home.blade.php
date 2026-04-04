@extends('layouts.main')

@section('image')

<img src="https://picsum.photos/1200/300" class="img-fluid">

@endsection

@section('content')

<h2>Accueil</h2>

<div class="row">

<div class="col-md-4">
<x-article
image="https://picsum.photos/300"
titre="Activités"
texte="Les activités de notre école"
url="#"
/>
</div>

<div class="col-md-4">
<x-article
image="https://picsum.photos/301"
titre="Sorties"
texte="Sorties pédagogiques"
url="#"
/>
</div>

<div class="col-md-4">
<x-article
image="https://picsum.photos/302"
titre="Vie scolaire"
texte="Vie des élèves"
url="#"
/>
</div>

</div>

@endsection