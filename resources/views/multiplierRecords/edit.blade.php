
@extends('layouts.master')
@section('content')  

      <form method="patch" action="{{ route('multiplierrecords', $multiplier_records->id) }}" class="container mt-4">
        @csrf
      <div class="form-group row">
        <label for="FirstName" class="required col-sm-2 col-form-label">First Name:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="FirstName" name="FirstName" value="{{$multiplier_records->FirstName}}" required>
        </div>
      </div>
    
      <div class="form-group row">
        <label for="MiddleName" class="col-sm-2 col-form-label">Middle Name:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="MiddleName" name="MiddleName" value="{{$multiplier_records->MiddleName}}">
        </div>
      </div>
    
      <div class="form-group row">
        <label for="LastName" class="required col-sm-2 col-form-label">Last Name:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="LastName" name="LastName" value="{{$multiplier_records->LastName}}" required>
        </div>
      </div>
    
      <div class="form-group row">
        <label for="Sex" class="required col-sm-2 col-form-label">Sex:</label>
        <div class="col-sm-10">
          <select class="form-control" id="Sex" name="Sex">
            <option value="{{$multiplier_records->Sex}}">Male</option>
    <option value="{{$multiplier_records->Sex}}">Female</option>
          </select>
        </div>
      </div>
    
      <div class="form-group row">
        <label for="PhoneNumber" class="required col-sm-2 col-form-label">Phone Number:</label>
        <div class="col-sm-10">
          <input type="tel" class="form-control" id="PhoneNumber" name="PhoneNumber"  value="{{$multiplier_records->PhoneNumber}}" required>
        </div>
      </div>
    
      <div class="form-group row">
        <label for="SubCounty" class="required col-sm-2 col-form-label">Sub County:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="SubCounty" name="SubCounty" value="{{$multiplier_records->SubCounty}}" required>
        </div>
      </div>
    
    
      <div class="form-group row">
        <label for="EnterpriseName" class="required col-sm-2 col-form-label">Enterprise Name:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="EnterpriseName" name="EnterpriseName" value="{{$multiplier_records->EnterpriseName}}" required>
        </div>
      </div>
    
      <div class="form-group row">
        <label for="DistrictOfOperation" class="required col-sm-2 col-form-label">District Of Operation:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="DistrictOfOperation" name="DistrictOfOperation" value="{{$multiplier_records->DistrictOfOperation}}" required>
        </div>
      </div>
    
      <div class="form-group row">
        <label for="DateOfRegistration" class="required col-sm-2 col-form-label">Date Of Registration:</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" id="DateOfRegistration" name="DateOfRegistration" value="{{$multiplier_records->DateOfRegistration}}" required>
        </div>
      </div>
    
      <div class="form-group row">
        <label for="RegistrationNumber" class="required col-sm-2 col-form-label">Registration Number:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="RegistrationNumber" name="RegistrationNumber" value="{{$multiplier_records->RegistrationNumber}}" required>
        </div>
      </div>
    
      <div class="form-group row">
        <label for="SectorOfSpecialisation" class="required col-sm-2 col-form-label">Sector Of Specialisation:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="SectorOfSpecialisation" name="SectorOfSpecialisation" value="{{$multiplier_records->SectorOfSpecialisation}}" required>
        </div>
      </div>
    
      <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
            <a class="btn btn-danger" href = "#"> Back</a>
        <div class="col-sm-2 offset-sm-10">
          <button type="submit" class="btn btn-primary">Edit</button>
        </div> 
      </div>
    </form>
    @endsection