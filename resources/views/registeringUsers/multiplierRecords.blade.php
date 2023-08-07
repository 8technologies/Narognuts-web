
@extends('layouts.app')
@section('content')  

      <form method="POST" action="{{ route('multiplierRecords') }}" class="container mt-4">
        @csrf
      <div class="form-group row">
        <label for="FirstName" class="required col-sm-2 col-form-label">First Name:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="FirstName" name="FirstName" value="{{ old('FirstName') }}" required>
        </div>
      </div>
    
      <div class="form-group row">
        <label for="MiddleName" class="col-sm-2 col-form-label">Middle Name:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="MiddleName" name="MiddleName" value="{{ old('MiddleName') }}">
        </div>
      </div>
    
      <div class="form-group row">
        <label for="LastName" class="required col-sm-2 col-form-label">Last Name:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="LastName" name="LastName" value="{{ old('LastName') }}" required>
        </div>
      </div>
    
      <div class="form-group row">
        <label for="Sex" class="required col-sm-2 col-form-label">Sex:</label>
        <div class="col-sm-10">
          <select class="form-control" id="Sex" name="Sex">
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
        </div>
      </div>
    
      <div class="form-group row">
        <label for="PhoneNumber" class="required col-sm-2 col-form-label">Phone Number:</label>
        <div class="col-sm-10">
          <input type="tel" class="form-control" id="PhoneNumber" name="PhoneNumber"  value="{{ old('PhoneNumber') }}" required>
        </div>
      </div>
    
      <div class="form-group row">
        <label for="SubCounty" class="required col-sm-2 col-form-label">Sub County:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="SubCounty" name="SubCounty" value="{{ old('SubCounty') }}" required>
        </div>
      </div>
    
    
      <div class="form-group row">
        <label for="EnterpriseName" class="required col-sm-2 col-form-label">Enterprise Name:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="EnterpriseName" name="EnterpriseName" value="{{ old('EnterpriseName') }}" required>
        </div>
      </div>
    
      <div class="form-group row">
        <label for="DistrictOfOperation" class="required col-sm-2 col-form-label">District Of Operation:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="DistrictOfOperation" name="DistrictOfOperation" value="{{ old('DistrictOfOperation') }}" required>
        </div>
      </div>
    
      <div class="form-group row">
        <label for="DateOfRegistration" class="required col-sm-2 col-form-label">Date Of Registration:</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" id="DateOfRegistration" name="DateOfRegistration" value="{{ old('DateOfRegistration') }}" required>
        </div>
      </div>
    
      <div class="form-group row">
        <label for="RegistrationNumber" class="required col-sm-2 col-form-label">Registration Number:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="RegistrationNumber" name="RegistrationNumber" value="{{ old('RegistrationNumber') }}" required>
        </div>
      </div>
    
      <div class="form-group row">
        <label for="SectorOfSpecialisation" class="required col-sm-2 col-form-label">Sector Of Specialisation:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="SectorOfSpecialisation" name="SectorOfSpecialisation" value="{{ old('SectorOfSpecialisation') }}" required>
        </div>
      </div>
    
      <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
      </div>
    </form>
    @endsection