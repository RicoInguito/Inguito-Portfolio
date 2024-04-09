@extends('Services.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Service Page</div>
  <div class="card-body">
      
      <form action="{{ url('service') }}" method="post">
        {!! csrf_field() !!}
        <label>Web Design</label></br>
        <input type="text" name="web_design" id="web_design" class="form-control"></br>
        <label>Web Development</label></br>
        <input type="text" name="web_development" id="web_development" class="form-control"></br>
        <label>Graphic Design</label></br>
        <input type="text" name="graphic_design" id="graphic_design" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop