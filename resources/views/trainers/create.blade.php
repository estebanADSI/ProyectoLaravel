@extends('layouts.app')


@section('title', 'Trainer Create')


@section('content')
  
  
  
  
<!-- validacion de campos del formulario-->
  
   @if($errors->any())
      <div class="alert alert-danger">
      <ul>
      <h1>Error</h1>
       @foreach($errors->all() as $error)
       <li>{{$error}}</li>
       
       @endforeach
       </ul>
       </div>
   @endif 

    
    

    <h1 class="mt-3">Formulario De Registro</h1>
    <form class="form-group" method="POST" action="/trainers" enctype="multipart/form-data"> 
    @csrf
    <div class="form-group mt-5" >
        <label for="">Nombre</label>
        <input type="text" class="form-control" placeholder="Escribe tu nombre" name="nombre">
        
    </div>
    

    
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Descripcion</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
    
    
      <div class="form-group mt-5" >
        <label for="">Slug</label>
        <input type="text" class="form-control" placeholder="Escribe tu slug" name="slug">
        
    </div>

        <div class="form-group mt-3" >
        <label for="">Avatar</label>
        <input type="file"  name="avatar">
        
    </div>
    
   
  </div>

    <button type="submit"  class="btn btn-danger" >Registrar</button>
    
    </form>
  
  

    
@endsection

<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mi pagina</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

</head>
<body>
   
</body>
</html>
-->