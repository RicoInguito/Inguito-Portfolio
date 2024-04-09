@extends('educations.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Educations Page</div>
  <div class="card-body">
      
      <form action="{{ url('education') }}" method="post">
        {!! csrf_field() !!}
        <label>Grade Level</label>
        <input type="text" name="grade_level" id="grade_level" class="form-control"><br>
        <label>Year</label>
        <input type="number" name="year" id="year" class="form-control"></br>
        <label>School</label>
        <input type="text" name="school" id="school" class="form-control"><br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop