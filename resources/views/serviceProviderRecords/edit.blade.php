
@extends('layouts.master')
@section('content')  

      <form method="patch" action="{{ route('serviceproviderrecords_update', $Service_provider_records->id) }}" class="container mt-4">
        @csrf
      <div class="form-group row">
        <label for="FirstName" class="required col-sm-2 col-form-label">First Name:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="FirstName" name="FirstName" value="{{$Service_provider_records->FirstName}}" required>
        </div>
      </div>
    
      <div class="form-group row">
        <label for="MiddleName" class="col-sm-2 col-form-label">Middle Name:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="MiddleName" name="MiddleName" value="{{ $Service_provider_records->MiddleName}}">
        </div>
      </div>
    
      <div class="form-group row">
        <label for="LastName" class="required col-sm-2 col-form-label">Last Name:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="LastName" name="LastName" value="{{ $Service_provider_records->LastName}}" required>
        </div>
      </div>
    
      <div class="form-group row">
        <label for="Sex" class="required col-sm-2 col-form-label">Sex:</label>
        <div class="col-sm-10">
          <select class="form-control" id="Sex" name="Sex">
            <option value="{{$Service_provider_records->Sex}}">Male</option>
            <option value="{{$Service_provider_records->Sex}}">Female</option>
          </select>
        </div>
      </div>
    
      <div class="form-group row">
        <label for="PhoneNumber" class="required col-sm-2 col-form-label">Phone Number:</label>
        <div class="col-sm-10">
          <input type="tel" class="form-control" id="PhoneNumber" name="PhoneNumber"  value="{{$Service_provider_records->PhoneNumber}}" required>
        </div>
      </div>
    
      <div class="form-group row">
        <label for="ServiceProvided" class="required col-sm-2 col-form-label">Service Provided:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="ServiceProvided" name="ServiceProvided" value="{{$Service_provider_records->ServiceProvided}}" required>
        </div>
      </div>
    
    
      <div class="form-group row">
        <label for="Category" class="required col-sm-2 col-form-label">Category:</label>
        <div class="col-sm-10">
          <select class="form-control" id="Category" name="Category">
            <option value="{{$Service_provider_records->Category}}">Input Providers</option>
            <option value="{{$Service_provider_records->Category}}">Output Providers</option>
            <option value="{{$Service_provider_records->Category}}">Agrodealers And Processors</option>
          </select>
        </div>
      </div>
    
      <div class="form-group row">
        <label for="YearsOfOperation" class="required col-sm-2 col-form-label">Years Of Operation:</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="YearsOfOperation" name="YearsOfOperation" value="{{$Service_provider_records->YearsOfOperation}}" required>
        </div>
      </div>
    
      <div class="form-group row">
        <label for="DateOfRegistration" class="required col-sm-2 col-form-label">Date Of Registration:</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" id="DateOfRegistration" name="DateOfRegistration" value="{{$Service_provider_records->DateOfRegistration}}" required>
        </div>
      </div>
    
      <div class="form-group row">
        <label for="RegistrationNumber" class="required col-sm-2 col-form-label">Registration Number:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="RegistrationNumber" name="RegistrationNumber" value="{{$Service_provider_records->RegistrationNumber}}" required>
        </div>
      </div>
    
      
      <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
      </div>
    </form>
 @endsection
  
  
{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">



<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js') }}"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 --}}
