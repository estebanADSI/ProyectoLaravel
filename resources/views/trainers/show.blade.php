@extends('layouts.app')


@section('title', 'Trainer')


@section('content')
  
  
@include('common.actualizado')
   <div class="text-center">
    <img style="heigth:200px; width:300px; background-color:#EFEFEF; margin:25px;"  class="card-img-top rounded-circle mx-auto d-block" src="/images/{{$trainer->avatar}}" alt="Card image cap">
             <h5 class="card-title">{{$trainer->name}}</h5>
                         <p class="card-text">{{$trainer->description}}</p>
                         
                         <a href="/trainers/{{$trainer->slug}}/edit/" class="btn btn-outline-success">Editar</a>
                         
                         
                       {!! Form::open(['route' =>['trainers.destroy', $trainer->slug], 'method' => 'DELETE']) !!}
                       
                           {!! Form::submit('Eliminar',['class' => 'btn btn-success'] ) !!}
                       {!! Form::close() !!}
                       
                         
     </div>
    
@endsection