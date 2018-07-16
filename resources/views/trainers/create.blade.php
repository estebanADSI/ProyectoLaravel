@extends('layouts.app')


@section('title', 'Trainer Create')


@section('content')


    <h1 class="mt-3">Formulario De Ingreso</h1>
    <form class="form-group" method="POST" action="/trainers" enctype="multipart/form-data"> 
    @csrf
    <div class="form-group" >
        <label for="">Nombre</label>
        <input type="text" class="form-control" placeholder="Escribe tu nombre" name="nombre">
        
    </div>
    
    <div class="form-group" >
        <label for="">Avatar</label>
        <input type="file"  name="avatar">
        
    </div>
    <button type="submit"  class="btn btn-outline-dark " >Guardar</button>
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