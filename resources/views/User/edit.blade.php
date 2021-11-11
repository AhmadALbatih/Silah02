@extends('User.app')
@section('content')

<div class="card">
  <div class="card-header">Employee</div>
  <div class="card-body">
      
      <form action="{{ url('User/' .$User->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$User->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$User->name}}" class="form-control"></br>
        <label>E-mail</label></br>
        <input type="email" name="email" id="email" value="{{$User->email}}" class="form-control"></br>
        <label>Password</label></br>
        <input type="password" name="Password" id="Password" value="{{$User->Password}}" class="form-control"></br>
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
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>

@stop