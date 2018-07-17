@extends('layouts.app')


@section('title', 'Trainer')


@section('content')
   <div class="text-center">
    <img style="heigth:200px; width:300px; background-color:#EFEFEF; margin:25px;"  class="card-img-top rounded-circle mx-auto d-block" src="/images/{{$trainer->avatar}}" alt="Card image cap">
             <h5 class="card-title">{{$trainer->name}}</h5>
                         <p class="card-text">{{$trainer->description}}</p>
     </div>
    
@endsection