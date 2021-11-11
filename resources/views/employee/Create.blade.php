@extends('employee.app')
@section('content')

<div class="card">
  <div class="card-header">Employee</div>
  <div class="card-body">
      
      <form action="{{ url('employee') }}" method="post">
        {!! csrf_field() !!}
        <label>nameEN</label></br>
        <input type="text" name="nameEN" id="nameEN" class="form-control"></br>
        <label>nameAR</label></br>
        <input type="text" name="nameAR" id="nameAR" class="form-control"></br>
        <label>address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label for="mobile">mobile</label></br>
        <input type="tel" id="mobile" name="mobile" pattern="[0]{1}[5]{1}[0-9]{8}"></br></br>
        <label>email</label></br>
        <input type="email" name="email" id="email" class="form-control"></br> 
        <label>branch</label></br>
        <input type="text" name="branch" id="branch" class="form-control"></br>
        <label>titleJob</label></br>
        <input type="text" name="titleJob" id="titleJob" class="form-control"></br>
        <label>socialContact</label></br>
        <input type="text" name="socialContact" id="socialContact" class="form-control"></br>
        <label>dateStart</label></br>
        <input type="date" name="dateStart" id="dateStart" class="form-control"></br>
        <label>section</label></br>
        <input type="text" name="section" id="section" class="form-control"></br>
        <label>supervisor</label></br>
        <input type="text" name="supervisor" id="supervisor" class="form-control"></br>
        <label for="nationalID">nationalID</label></br>
        <input type="number" min=999999999 max=9999999999 name="nationalID" id="nationalID" class="form-control"></br>
        <label for="steteAMP">steteEMP</label></br>
        <select name="steteAMP" id="steteAMP">
        <option value="working">Working</option>
        <option value="retired">Retired</option>
        <option value="release">Release</option>
        </select></br></br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>

@stop