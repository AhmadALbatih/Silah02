@extends('User.app')
@section('content')

<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('User') }}" method="post">
        {!! csrf_field() !!}
        <label>name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>password</label></br>
        <input type="password" name="password" id="password" class="form-control"></br>
        <label>email</label></br>
        <input type="email" name="email" id="email" class="form-control"></br>
        <div class="form-check">
  <input class="form-check-input" type="radio" name="admin" id="admin" value="1"checked>
  <label class="form-check-label" for="admin">
    admin
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="admin" id="admin" value="0" checked>
  <label class="form-check-label" for="admin">
    not admin
  </label>
</div>
        <input type="submit" value="Save" class="btn btn-success"></br>

    </form>
   
  </div>
</div>

@stop