@extends('layouts.app')


@section('title', 'Trainer')


@section('content')
            <h1>Lista de entrnadores</h1>
             <div class="row mt-5">
           
   @foreach($trainers as $trainer) 
          
{{-- <p>{{$trainer->name}}</p>--}}
          
          
       
             <div class="col">
             
              <div class="card text-center border-dark mt-3" style="width: 20rem; height: 25rem;">
                  <img style="heigth:150px; width:150px; background-color:#EFEFEF; margin:25px;"  class="card-img-top rounded-circle mx-auto d-block" src="images/{{$trainer->avatar}}" alt="Card image cap">
                  <div class="card-body ">
                   <h5 class="card-title">{{$trainer->name}}</h5>
                         <p class="card-text">{{$trainer->description}}</p>
                              <a href="/trainers/{{$trainer->slug}}" class="btn btn-outline-dark">Ver mas...</a>
                    </div>
                 </div>
               </div>
            
          
   @endforeach
   </div>
  

    
@endsection