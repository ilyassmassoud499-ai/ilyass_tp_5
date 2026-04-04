@extends('layouts.main')

@section('content')

<h2>Contact</h2>

<form>

<div class="mb-3">
<input type="text" class="form-control" placeholder="Nom">
</div>

<div class="mb-3">
<input type="email" class="form-control" placeholder="Email">
</div>

<div class="mb-3">
<textarea class="form-control" placeholder="Message"></textarea>
</div>

<button class="btn btn-success">
Envoyer
</button>

</form>

@endsection