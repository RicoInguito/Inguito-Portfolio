@extends('Abouts.layout')
@section('content')
 @extends('home')
<div class="card">
  <div class="card-header"><h2>Educations Page</h2></div>
  <div class="card-body">
      
      <form action="{{ route('skills.store') }}" method="post">
        {!! csrf_field() !!}
        <label>School</label></br>
        <input type="text" name="school" id="name" class="form-control"></br>
        <label>School Address</label></br>
        <input type="text" name="school_address" id="email" class="form-control"></br>
        <label>School Year</label></br>
        <input type="number" name="school_year" id="email" class="form-control"></br>
        <button type="submit" class="btn btn-success">Submit</br>
    </form>
   
  </div>
</div>
 
@stop