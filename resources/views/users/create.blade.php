@extends('common.layout')

@section('title')
  <title>Create user</title>
@endsection

@section('content')

  <form class="form" method="POST" action="/add">
    
    {{ csrf_field() }}

    <div class="form-group">
      <input type="text" class="form-control" name="name" placeholder="Name" required>
    </div>

    <div class="form-group">
      <input type="number" min="1" class="form-control" name="age" placeholder="Age" required>
    </div>
  
    <div class="form-group">
      <input type="text" onkeypress="validate(event)" class="form-control" name="phone" placeholder="Phone" required>
    </div>

    <div class="form-group">
      <input type="email" class="form-control" name="email" placeholder="Email" required>
    </div>

    <input class="btn btn-primary" type="submit" value="Add user">

</form>

@endsection

@section('scripts')
<script>
  function validate(evt) {
    var theEvent = evt || window.event;
    var key = theEvent.keyCode || theEvent.which;
    key = String.fromCharCode( key );
    var regex = /[0-9]|\./;
    if( !regex.test(key) ) {
      theEvent.returnValue = false;
      if(theEvent.preventDefault) theEvent.preventDefault();
    }
  }
</script>