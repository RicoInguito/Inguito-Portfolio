@extends('educations.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('education/' .$educations->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$educations->id}}" id="id" />
        <label>Grade Level</label>
        <input type="text" name="grade_level" id="grade_level" value="{{$educations->grade_level}}" class="form-control"></br>
        <label>Year</label>
        <input type="number" name="year" id="year" value="{{$educations->year}}" class="form-control"></br>
        <label>School</label>
        <input type="text" name="school" id="school" value="{{$educations->tertiary}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop