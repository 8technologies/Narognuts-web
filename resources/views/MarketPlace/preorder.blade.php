
@extends('layouts.app')
@section('content') 
<div class = "container"><h3 class="text-heading">Pre-Order Detail</h3></div>
    <section class="content">
      <form method="POST" enctype="multipart/form-data" action="{{ route('preOrder') }}" class="container mt-4">
        @csrf
      <div class="form-group row">
        <label for="CropVariety" class=" required col-sm-2 col-form-label">Crop Variety:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="CropVariety" name="CropVariety" required>
        </div>
      </div>
    
    
      <div class="form-group row">
        <label for="Quantity" class="required col-sm-2 col-form-label">Quantity:</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="Quantity" name="Quantity" required>
        </div>
      </div>
    
      <div class="form-group row">
        <label for="Unit" class="required col-sm-2 col-form-label">Unit:</label>
        <div class="col-sm-10">
          <select class="form-control" id="Unit" name="Unit">
            <option value="Metric_Tones">Metric Tones</option>
            <option value="Kilograms">Kilograms</option>
          </select>
        </div>
      </div>
    
      <div class="form-group row">
        <label for="Location" class="required col-sm-2 col-form-label">Pick Up Location:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="Location" name="Location" required>
        </div>
      </div>

      <div class="form-group row">
        <label for="collectionDate" class="required col-sm-2 col-form-label">Collection Date:</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" id="collectionDate" name="collectionDate" required>
        </div>
      </div>
     
      <div class="form-group row">
        <label for="Details" class="required col-sm-2 col-form-label">Details:</label>
        <div class="col-sm-10">
          <input type="message" class="form-control" id="Details" name="Details" required>
        </div>
      </div>
    
    
      <div class="form-group row">
        <div class="col-sm-2 offset-sm-10">
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
      </div>
    </form>
    @endsection