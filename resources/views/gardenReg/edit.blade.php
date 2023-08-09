
@extends('layouts.master')
@section('content')  
 <form method="patch" action="{{route('gardenreg_update',$garden_regs->id)}}" class="container mt-4">
        @csrf
      <div class="form-group row">
        <label for="GardenName" class="required col-sm-2 col-form-label">Garden Name:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="GardenName" name="GardenName" value="{{ $garden_regs->GardenName}}" required>
        </div>
      </div>
    
       <div class="form-group row">
        <label for="GardenSize" class="required col-sm-2 col-form-label">Garden Size:</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="GardenSize" name="GardenSize" value="{{ $garden_regs->GardenSize}}">
        </div>
      </div>
    
      <div class="form-group row">
        <label for="PlatingDate" class="required col-sm-2 col-form-label">Planting Date:</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" id="PlatingDate" name="PlatingDate" value="{{ $garden_regs->PlantingDate}}" required>
        </div>
      </div>
    
      
    
      <div class="form-group row">
        <label for="varietyPlanted" class="required col-sm-2 col-form-label">variety Planted:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="varietyPlanted" name="varietyPlanted"  value="{{ $garden_regs->varietyPlanted}}" required>
        </div>
      </div>
    
    
    
      <div class="form-group row">
        <label for="SeedClass" class="required col-sm-2 col-form-label">Seed Class:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="SeedClass" name="SeedClass" value="{{ $garden_regs->SeedClass}}" required>
        </div>
      </div>

      <div class="form-group row">
        <label for="seedBoughtFrom" class="required col-sm-2 col-form-label">Did You Buy From A certified seller?:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="seedBoughtFrom" name="seedBoughtFrom" value="{{ $garden_regs->seedBoughtFrom}}" required>
        </div>
      </div>
    
    
      <div class="form-group row">
        <label for="OwnershipOfLand" class="required col-sm-2 col-form-label">Ownership Of Land:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="OwnershipOfLand" name="OwnershipOfLand" value="{{ $garden_regs->OwnershipOfLand}}" required>
        </div>
      </div>
    
      <div class="form-group row">
        <label for="NameOfSeller" class="required col-sm-2 col-form-label">Name Of Seller:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="NameOfSeller" name="NameOfSeller" value="{{ $garden_regs->NameOfSeller}}" required>
        </div>
      </div>
    
      <div class="form-group row">
        <label for="SellerLocation" class="required col-sm-2 col-form-label">Seller Location:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="SellerLocation" name="SellerLocation" value="{{ $garden_regs->SellerLocation}}" required>
        </div>
      </div>
    
    
      <div class="form-group row">
        <label for="SellerContactNumber" class="required col-sm-2 col-form-label">Seller Contact Number:</label>
        <div class="col-sm-10">
          <input type="tel" class="form-control" id="SellerContactNumber" name="SellerContactNumber" value="{{ $garden_regs->SellerContactNumber}}" required>
        </div>
      </div>
    
      <div class="form-group row">
        <label for="PurposeOfPlanting" class="required col-sm-2 col-form-label">Purpose Of Planting:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="PurposeOfPlanting" name="PurposeOfPlanting" value="{{ $garden_regs->PurposeOfPlanting}}" required>
        </div>
      </div>
    
      <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
            <a class="btn btn-danger" href = "{{route('gardenReg')}}"> Back</a>
        <div class="col-sm-2 offset-sm-10">
          <button type="submit" class="btn btn-primary">Edit</button>
        </div> 
      </form>
   @endsection