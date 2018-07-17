@extends('layouts.app')


@section('title', 'Trainer Update')


@section('content')


    <h1 class="mt-3">Atualizar</h1>
    <form class="form-group" method="POST" action="/trainers/{{$trainer->slug}}" enctype="multipart/form-data"> 
    @method('PUT')
    @csrf
    <div class="form-group mt-5" >
       <img style="heigth:150px; width:150px; background-color:#EFEFEF; margin:25px;"  class="card-img-top rounded-circle mx-auto d-block" src="/images/{{$trainer->avatar}}" alt="Card image cap">
        <label for="">Nombre</label>
        <input type="text" class="form-control" placeholder="Escribe tu nombre" name="nombre" value="{{$trainer->name}}">
 
        
    </div>
    

    
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Descripcion</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" >{{$trainer->description}}</textarea>
    
    
    
    
        <div class="form-group mt-3" >
        <label for="">Avatar</label>
        <input type="file"  name="avatar">
        
    </div>
  </div>
    <button type="submit"  class="btn btn-danger" >Actualizar</button>
    </form>
  
    
@endsection