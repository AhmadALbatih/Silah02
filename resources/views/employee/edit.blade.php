@extends('employee.app')
@section('content')

<div class="card">
  <div class="card-header">Employee</div>
  <div class="card-body">
      
      <form action="{{ url('employee/' .$employee->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$employee->id}}" id="id" />
        <label>nameEN</label></br>
        <input type="text" name="nameEN" id="nameEN" value="{{$employee->nameEN}}" class="form-control"></br>
        <label>nameAR</label></br>
        <input type="text" name="nameAR" id="nameAR" value="{{$employee->nameAR}}" class="form-control"></br>
        <label>address</label></br>
        <input type="text" name="address" id="address" value="{{$employee->address}}" class="form-control"></br>
        <label>mobile</label></br>
        <input type="tel" name="mobile" pattern="[0]{1}[5]{1}[0-9]{8}" id="mobile" value="{{$employee->mobile}}" class="form-control"></br>
        <label>email</label></br>
        <input type="email" name="email" id="email" value="{{$employee->email}}" class="form-control"></br>
        <label>branch</label></br>
        <input type="text" name="branch" id="branch" value="{{$employee->branch}}" class="form-control"></br>
        <label>titleJob</label></br>
        <input type="text" name="titleJob" id="titleJob" value="{{$employee->titleJob}}" class="form-control"></br>
        <label>socialContact</label></br>
        <input type="text" name="socialContact" id="socialContact" value="{{$employee->socialContact}}" class="form-control"></br>
        <label>dateStart</label></br>
        <input type="date" name="dateStart" id="dateStart" value="{{$employee->dataStart}}" class="from-control"></br></br>
        <label>section</label></br>
        <input type="text" name="section" id="section" value="{{$employee->section}}" class="form-control"></br>
        <label>supervisor</label></br>
        <input type="text" name="supervisor" id="supervisor" value="{{$employee->supervisor}}" class="form-control"></br>
        <label>nationalID</label></br>
        <input type="number" min=999999999 max=9999999999 name="nationalID" id="nationalID" value="{{$employee->nationalID}}" class="form-control"></br>
        <label>steteEMP</label></br>
        <select name="steteAMP" id="steteAMP">
        <option value="working">Working</option>
        <option value="retired">Retired</option>
        <option value="release">Release</option>
        </select></br></br>
        <label>requiremint</lable></br>
        <input type="checkbox" name="requiremint" id="requiremint1" value="{{$employee->requiremint}}" class="form-control" for="requiremint1">
        <input type="checkbox" name="requiremint" id="requiremint2" value="{{$employee->requiremint}}" class="form-control"for="requiremint2">
        <input type="checkbox" name="requiremint" id="requiremint" value="{{$employee->requiremint}}" class="form-control">
        <input type="checkbox" name="requiremint" id="requiremint" value="{{$employee->requiremint}}" class="form-control">
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>

@stop