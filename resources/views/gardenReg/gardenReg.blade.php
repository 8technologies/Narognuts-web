
@extends('layouts.app')

@section('content')  

<div class = "container"><h3 class="text-heading">Register Your Garden!</h3></div>
 <form method="POST" action="{{route('gardenReg')}}" class="container mt-4">
        @csrf
      <div class="form-group row">
        <label for="GardenName" class="required col-sm-2 col-form-label">Garden Name:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="GardenName" name="GardenName" value="{{ old('GardenName') }}" required>
        </div>
      </div>
    
      <div class="form-group row">
        <label for="GardenSize" class="required col-sm-2 col-form-label">Garden Size:</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="GardenSize" name="GardenSize" value="{{ old('GardenSize') }}">
        </div>
      </div>
    
      <div class="form-group row">
        <label for="PlatingDate" class="required col-sm-2 col-form-label">Planting Date:</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" id="PlatingDate" name="PlatingDate" value="{{ old('PlatingDate') }}" required>
        </div>
      </div>
    
      
    
      <div class="form-group row">
        <label for="varietyPlanted" class="required col-sm-2 col-form-label">variety Planted:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="varietyPlanted" name="varietyPlanted"  value="{{ old('varietyPlanted') }}" required>
        </div>
      </div>

      <div class="form-group row">
        <label for="SeedClass" class="required col-sm-2 col-form-label">Seed Class:</label>
        <div class="col-sm-10">
          <select class="form-control" id="SeedClass" name="SeedClass">
            <option value="pre_basic">Pre-Basic</option>
            <option value="basic">Basic</option>
            <option value="Certified">Certified</option>
          </select>
        </div>
      </div>
    
      <div class="form-group row">
        <label for="seedBoughtFrom" class="required col-sm-2 col-form-label">Did You Buy From A certified seller?:</label>
        <div class="col-sm-10">
          <select class="form-control" id="seedBoughtFrom" name="seedBoughtFrom">
            <option value="YES">Yes</option>
            <option value="NO">NO</option>
          </select>
        </div>
      </div>
    
      <div class="form-group row">
        <label for="OwnershipOfLand" class="required col-sm-2 col-form-label">Ownership Of Land:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="OwnershipOfLand" name="OwnershipOfLand" value="{{ old('OwnershipOfLand') }}" required>
        </div>
      </div>
    
      <div class="form-group row">
        <label for="NameOfSeller" class="required col-sm-2 col-form-label">Name Of Seller:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="NameOfSeller" name="NameOfSeller" value="{{ old('NameOfSeller') }}" required>
        </div>
      </div>
    
      <div class="form-group row">
        <label for="SellerLocation" class="required col-sm-2 col-form-label">Seller Location:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="SellerLocation" name="SellerLocation" value="{{ old('SellerLocation') }}" required>
        </div>
      </div>
    
    
      <div class="form-group row">
        <label for="SellerContactNumber" class="required col-sm-2 col-form-label">Seller Contact Number:</label>
        <div class="col-sm-10">
          <input type="tel" class="form-control" id="SellerContactNumber" name="SellerContactNumber" value="{{ old('SellerContactNumber') }}" required>
        </div>
      </div>
    
      <div class="form-group row">
        <label for="PurposeOfPlanting" class="required col-sm-2 col-form-label">Purpose Of Planting:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="PurposeOfPlanting" name="PurposeOfPlanting" value="{{ old('PurposeOfPlanting') }}" required>
        </div>
      </div>
    
      <div class="form-group row">
        <div class="col-sm-2 offset-sm-10">
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
      </form>
   @endsection