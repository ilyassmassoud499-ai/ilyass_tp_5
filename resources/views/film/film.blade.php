<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container mt-3">
        <h2>Ajouter un etudiant</h2>
        
        @if (@session('succes')
            
        @endsession)
            
        @endif
            
        @endif
        @extends('layouts.main')
@section('content')



<form method="POST" action="">
@csrf

<div class="mb-3">
 <label  class="form-label">Nom</label>   
<input type="text" name="nom" class="form-control">
@error('nom')
<span>{{ $message }}</span>
@enderror
</div>
<div class="mb-3">
 <label  class="form-label">Prenom</label>   
<input type="text" name="prenom" class="form-control">
@error('prenom')
<span>{{ $message }}</span>
@enderror
</div>
<div class="mb-3">
 <label  class="form-label">Adress Email</label>   
<input type="text" name="email" class="form-control">
@error('email')
<span>{{ $message }}</span>
@enderror
</div>
<div class="mb-3">
 <label  class="form-label">Mot de Passe</label>   
<input type="text" name="password" class="form-control">
@error('password')
<span>{{ $message }}</span>
@enderror
</div>
<div class="mb-3">
 <label  class="form-label">confirmation</label>   
<input type="text" name="passwordConfirm" class="form-control">
@error('password')
<span>{{ $message }}</span>
@enderror
</div>
<div class="mb-3">
 <label  class="form-label">Type de bac</label> 
 <h6>Marocain</h6>  
<input  type="radio" name="typeBac" class="form-control">
<h6>International</h6>
<input type="radio" name="typeBac" class="form-control">

@error('typeBac')
<span>{{ $message }}</span>
@enderror


</div>
<div class="mb-3">
 <label  class="form-label">filiere souhaitee</label>   
<select name="filiere" id="">
    <option value=""{{old('filiere') == '' ? selected : ''}}  value="">choisir filiere</option>
    <option  value="" {{old('filiere') == '' ? selected : ''}} >Smi</option>
    <option  value="" {{old('filiere') == '' ? selected : ''}}>SMa</option>
    <option  value="" {{old('filiere') == '' ? selected : ''}}>SeG</option>
</select>
@error('filiere')
<span>{{ $message }}</span>
@enderror
</div>

<button type="submit">Envoyer</button>

</form>

  
@endsection
    </div>
</body>
</html>