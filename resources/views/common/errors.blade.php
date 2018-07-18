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
   