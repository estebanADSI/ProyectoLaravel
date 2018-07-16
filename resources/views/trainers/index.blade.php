@extends('layouts.app')


@section('title', 'Trainer')


@section('content')
            <h1>Lista de entrnadores</h1>
             <div class="row mt-5">
           
   @foreach($trainers as $trainer) 
          
{{-- <p>{{$trainer->name}}</p>--}}
          
          
       
             <div class="col">
             
              <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="images/{{$trainer->avatar}}" alt="Card image cap">
                  <div class="card-body">
                   <h5 class="card-title">{{$trainer->name}}</h5>
                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-outline-dark">Go somewhere</a>
                    </div>
                 </div>
               </div>
            
          
   @endforeach
   </div>
  

    
@endsection