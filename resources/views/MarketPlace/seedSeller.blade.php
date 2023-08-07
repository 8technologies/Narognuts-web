
@extends('layouts.app')
@section('content') 
<div class = "container"><h3 class="text-heading">Seed Detail</h3></div>
    <section class="content">
      <form method="POST" enctype="multipart/form-data" action="{{ route('seedSeller') }}" class="container mt-4">
        @csrf
      <div class="form-group row">
        <label for="Name" class=" required col-sm-2 col-form-label">Name:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="Name" name="Name" required>
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
        <label for="Price_Per_Unit" class="required col-sm-2 col-form-label">Price_Per_Unit(Ush):</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="Price_Per_Unit" name="Price_Per_Unit" required>
        </div>
      </div>
    
      <div class="form-group row">
        <label for="PaymentMode" class="required col-sm-2 col-form-label">PaymentMode:</label>
        <div class="col-sm-10">
          <select class="form-control" id="PaymentMode" name="PaymentMode">
            <option value="mm">Mobile money</option>
            <option value="cash">Cash</option>
          </select>
        </div>
      </div>
    
      <div class="form-group row">
        <label for="Remarks" class="required col-sm-2 col-form-label">Remarks:</label>
        <div class="col-sm-10">
          <input type="message" class="form-control" id="Remarks" name="Remarks" required>
        </div>
      </div>
    

    
      <div class="form-group row">
        <label for="image" class="required col-sm-2 col-form-label">image:</label>
        <div class="col-sm-10">
          <input type="file" id="image" name="image" required>
        </div>
      </div>
    
      <div class="form-group row">
        <div class="col-sm-2 offset-sm-10">
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
      </div>
    </form>
    @endsection