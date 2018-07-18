  @if(session('status'))
      <div class="alert alert-dark">
         {{session('status')}}
      </div>
  
  @endif