@extends('employee.app')
@section('content')

<div class="card" style="width: 100rem;">
  <div class="card-header">{{ $employee->nameEN }}</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">nameEN : {{ $employee->nameEN }}</h5>
        <p class="card-text">nameAR : {{ $employee->nameAR }}</p>
        <p class="card-text">nationalID : {{ $employee->nationalID }}</p>
        <p class="card-text">mobile : {{ $employee->mobile }}</p>
        <p class="card-text">address : {{ $employee->address }}</p>
        <p class="card-text">email : {{ $employee->email }}</p>
        <p class="card-text">branch : {{ $employee->branch }}</p>
        <p class="card-text">titleJob : {{ $employee->titleJob }}</p>
        <p class="card-text">socialContact : {{ $employee->socialContact }}</p>
        <p class="card-text">dateStart : {{ $employee->dateStart }}</p>
        <p class="card-text">section : {{ $employee->section }}</p>
        <p class="card-text">supervisor : {{ $employee->supervisor }}</p>
        <p class="card-text">steteEMP : {{ $employee->steteAMP }}</p>
        
  </div>
  <form action="{{ url('employee') }}" method="get">
        {!! csrf_field() !!}
        <input type="submit" value="Back" class="btn btn-danger"></br>
    </form>

    </hr>
  
  </div>
</div>
@stop