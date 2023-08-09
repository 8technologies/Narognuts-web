
@extends('layouts.master')
@section('content') 
<div class = "container"><h3 class="text-heading">Seed Detail</h3></div>
    <section class="content">
      <form method="POST" enctype="multipart/form-data" action="{{ route('seedseller', $seed_sellers->id) }}" class="container mt-4">
        @csrf
      <div class="form-group row">
        <label for="Name" class=" required col-sm-2 col-form-label">Name:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="Name" name="Name" value = "{{ $seed_sellers->Name}}" required>
        </div>
      </div>
    
    
      <div class="form-group row">
        <label for="Quantity" class="required col-sm-2 col-form-label">Quantity:</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="Quantity" name="Quantity" value = "{{$seed_sellers->Quantity}}" required>
        </div>
      </div>
    
      <div class="form-group row">
        <label for="Unit" class="required col-sm-2 col-form-label">Unit:</label>
        <div class="col-sm-10">
          <select class="form-control" id="Unit" name="Unit">
            <option value = "{{$seed_sellers->Unit}}">Metric Tones</option>
            <option value = "{{$seed_sellers->Unit}}" >Kilograms</option>
          </select>
        </div>
      </div>
    
      <div class="form-group row">
        <label for="Price_Per_Unit" class="required col-sm-2 col-form-label">Price_Per_Unit(Ush):</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="Price_Per_Unit" name="Price_Per_Unit" value = "{{$seed_sellers->Price_Per_Unit}}" required>
        </div>
      </div>
    
      <div class="form-group row">
        <label for="PaymentMode"  class="required col-sm-2 col-form-label">PaymentMode:</label>
        <div class="col-sm-10">
          <select class="form-control" id="PaymentMode" name="PaymentMode">
            <option value = "{{ $seed_sellers->PaymentMode}}">Mobile money</option>
            <option value = "{{$seed_sellers->PaymentMode}}">Cash</option>
          </select>
        </div>
      </div>
    
      <div class="form-group row">
        <label for="Remarks" class="required col-sm-2 col-form-label">Remarks:</label>
        <div class="col-sm-10">
          <input type="message" class="form-control" id="Remarks" name="Remarks" value = "{{$seed_sellers->Remarks}}" required>
        </div>
      </div>
    

    
      <div class="form-group row">
        <label for="image" class="required col-sm-2 col-form-label">image:</label>
        <div class="col-sm-10">
          <input type="file" id="image" name="image" value = "{{$seed_sellers->image_path}}"required>
        </div>
        <img
        src = {{asset('images/'.$seed_sellers->image_path)}}
        height = "450px">
      </div>
    
      <div class="form-group row">
          <div class="col-sm-10 offset-sm-2">
              <a class="btn btn-danger" href = "{{route('seedseller')}}"> Back</a>
          <div class="col-sm-2 offset-sm-10">
            <button type="submit" class="btn btn-primary">Edit</button>
          </div> 
      </div>
    </form>
    @endsection