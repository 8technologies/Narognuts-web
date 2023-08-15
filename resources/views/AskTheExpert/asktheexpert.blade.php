
@extends('layouts.app')
@section('content') 
<div class = "container"><h3 class="text-heading">Service Detail</h3></div>
    <section class="content">
      <form method="POST" enctype="multipart/form-data" action="{{route('asktheexpertstore')}}" class="container mt-4">
        @csrf
     

      <div class="form-group row">
        <label for="Question" class="required col-sm-2 col-form-label">Question:</label>
        <div class="col-sm-10">
          <input type="message" class="form-control" id="Question" name="Question" value = "" required>
        </div>
      </div>
    

      
      <div class="form-group row">
        <label for="image" class="required col-sm-2 col-form-label">Video/Image file:</label>
        <div class="col-sm-10">
          <input type="file" id="image" name="image" value = "" required>
        </div>
      </div>
    
    
      <div class="form-group row">
        <div class="col-sm-2 offset-sm-10">
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
      </div>
    </form>
    @endsection