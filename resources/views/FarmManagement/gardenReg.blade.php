{{-- @extends('layouts.app') --}}

@extends('layouts.app')

@section('content')


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<form method="POST" action="{{route('gardenReg')}}" class="container mt-4">
    @csrf
  <div class="form-group row">
    <label for="GardenName" class="col-sm-2 col-form-label">Garden Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="GardenName" name="GardenName" value="{{ old('GardenName') }}" required>
    </div>
  </div>

  <div class="form-group row">
    <label for="GardenSize" class="col-sm-2 col-form-label">Garden Size:</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="GardenSize" name="GardenSize" value="{{ old('GardenSize') }}">
    </div>
  </div>

  <div class="form-group row">
    <label for="PlatingDate" class="col-sm-2 col-form-label">Plating Date:</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="PlatingDate" name="PlatingDate" value="{{ old('PlatingDate') }}" required>
    </div>
  </div>

  

  <div class="form-group row">
    <label for="varietyPlanted" class="col-sm-2 col-form-label">variety Planted:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="varietyPlanted" name="varietyPlanted"  value="{{ old('varietyPlanted') }}" required>
    </div>
  </div>



  <div class="form-group row">
    <label for="SeedClass" class="col-sm-2 col-form-label">Seed Class:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="SeedClass" name="SeedClass" value="{{ old('SeedClass') }}" required>
    </div>
  </div>

  <div class="form-group row">
    <label for="seedBoughtFrom" class="col-sm-2 col-form-label">Did You Buy From A certified seller?:</label>
    <div class="col-sm-10">
      <select class="form-control" id="seedBoughtFrom" name="seedBoughtFrom">
        <option value="YES">Yes</option>
        <option value="NO">NO</option>
      </select>
    </div>
  </div>

  <div class="form-group row">
    <label for="OwnershipOfLand" class="col-sm-2 col-form-label">Ownership Of Land:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="OwnershipOfLand" name="OwnershipOfLand" value="{{ old('OwnershipOfLand') }}" required>
    </div>
  </div>

  <div class="form-group row">
    <label for="NameOfSeller" class="col-sm-2 col-form-label">Name Of Seller:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="NameOfSeller" name="NameOfSeller" value="{{ old('NameOfSeller') }}" required>
    </div>
  </div>

  <div class="form-group row">
    <label for="SellerLocation" class="col-sm-2 col-form-label">Seller Location:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="SellerLocation" name="SellerLocation" value="{{ old('SellerLocation') }}" required>
    </div>
  </div>


  <div class="form-group row">
    <label for="SellerContactNumber" class="col-sm-2 col-form-label">Seller Contact Number:</label>
    <div class="col-sm-10">
      <input type="tel" class="form-control" id="SellerContactNumber" name="SellerContactNumber" value="{{ old('SellerContactNumber') }}" required>
    </div>
  </div>

  <div class="form-group row">
    <label for="PurposeOfPlanting" class="col-sm-2 col-form-label">Purpose Of Planting:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="PurposeOfPlanting" name="PurposeOfPlanting" value="{{ old('PurposeOfPlanting') }}" required>
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10 offset-sm-2">
      <button type="submit" class="btn btn-success">Submit</button>
    </div>
  </div>
</form>
@endsection

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
