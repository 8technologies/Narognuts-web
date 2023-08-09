
@extends('layouts.app')
@section('content') 
<div class = "container"><h3 class="text-heading">Service Detail</h3></div>
    <section class="content">
      <form method="POST" enctype="multipart/form-data" action="{{ route('serviceseller',$servicesellers->id) }}" class="container mt-4">
        @csrf
      <div class="form-group row">
        <label for="serviceSellerCompany" class=" required col-sm-2 col-form-label">Service Seller Company:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="serviceSellerCompany" name="serviceSellerCompany" value = "{{ $seed_sellers->serviceSellerCompany}}" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="serviceName" class=" required col-sm-2 col-form-label">Service Name:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="serviceName" name="serviceName" value = "{{ $seed_sellers->serviceName}}" required>
        </div>
      </div>
    
    
      <div class="form-group row">
        <label for="type" class="required col-sm-2 col-form-label">Type:</label>
        <div class="col-sm-10">
          <select class="form-control" id="Unit" name="type">
            <option value = "{{ $seed_sellers->type}}">Product</option>
            <option value = "{{ $seed_sellers->type}}">Service</option>
          </select>
        </div>
      </div>


      <div class="form-group row">
        <label for="offerType" class="required col-sm-2 col-form-label">Offer Type:</label>
        <div class="col-sm-10">
          <select class="form-control" id="offerType" name="offerType">
            <option value = "{{ $seed_sellers->offerType}}">Free</option>
            <option value = "{{ $seed_sellers->offerType}}">Hire</option>
            <option value = "{{ $seed_sellers->offerType}}">Sale</option>
          </select>
        </div>
      </div>
    

      <div class="form-group row">
        <label for="conditions" class="required col-sm-2 col-form-label" ">Conditions:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="conditions" name="conditions"  value = "{{ $seed_sellers->conditions}} required>
        </div>
      </div>

      <div class="form-group row">
        <label for="price" class="required col-sm-2 col-form-label">price(Ush):</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="price" name="price" value = "{{ $seed_sellers->price}}" required>
        </div>
      </div>
    
    

      <div class="form-group row">
        <label for="Remarks" class="required col-sm-2 col-form-label">Remarks:</label>
        <div class="col-sm-10">
          <input type="message" class="form-control" id="Remarks" name="Remarks" value = "{{ $seed_sellers->Remarks}}" required>
        </div>
      </div>
    

      
      <div class="form-group row">
        <label for="image" class="required col-sm-2 col-form-label">image:</label>
        <div class="col-sm-10">
          <input type="file" id="image" name="image" value = "{{ $seed_sellers->image}}" required>
        </div>
      </div>
    
    
      <div class="form-group row">
        <div class="col-sm-2 offset-sm-10">
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
      </div>
    </form>
    @endsection