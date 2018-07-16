@extends('layouts.app')


@section('title', 'Trainer')


@section('content')
            <h1>Lista de entrnadores</h1>
             <div class="row mt-5">
           
   @foreach($trainers as $trainer) 
          
{{-- <p>{{$trainer->name}}</p>--}}
          
          
       
             <div class="col">
             
              <div class="card text-center" style="width: 18rem;">
                  <img style="heigth:150px; width:150px; background-color:#EFEFEF; margin:25px;"  class="card-img-top rounded-circle mx-auto d-block" src="images/{{$trainer->avatar}}" alt="Card image cap">
                  <div class="card-body">
                   <h5 class="card-title">{{$trainer->name}}</h5>
                         <p class="card-text">{{$trainer->description}}</p>
                              <a href="{{$trainer->id}}" class="btn btn-outline-dark">Ver mas...</a>
                    </div>
                 </div>
               </div>
            
          
   @endforeach
   </div>
  

    
@endsection