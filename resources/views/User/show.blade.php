@extends('User.app')
@section('content')

<div class="card" style="width: 100rem;">
  <div class="card-header">{{ $User->name }}</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">name : {{ $User->name }}</h5>
        <p class="card-text">password : {{ $User->password }}</p>
        <p class="card-text">email : {{ $User->email }}</p>

  </div>
  <form action="{{ url('User') }}" method="get">
        {!! csrf_field() !!}
        <input type="submit" value="Back" class="btn btn-danger"></br>
    </form>

    </hr>
  
  </div>
</div>
@stop