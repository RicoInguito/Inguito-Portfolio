@extends('Abouts.layout')
@section('content')
 @extends('home')
<div class="card">
  <div class="card-header"><h2>Skills Page</h2></div>
  <div class="card-body">
      
      <form action="{{ route('skills.store') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Percentage</label></br>
        <input type="number" name="percentage" id="email" class="form-control"></br>
        <button type="submit" class="btn btn-success">Submit</br>
    </form>
   
  </div>
</div>
 
@stop