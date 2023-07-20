@extends('layouts.app')

@section('content')


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<form method="POST" action="{{ route('serviceProviderRecords') }}" class="container mt-4">
    @csrf
  <div class="form-group row">
    <label for="FirstName" class="col-sm-2 col-form-label">First Name:</label>
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
    <label for="LastName" class="col-sm-2 col-form-label">Last Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="LastName" name="LastName" value="{{ old('LastName') }}" required>
    </div>
  </div>

  <div class="form-group row">
    <label for="Sex" class="col-sm-2 col-form-label">Sex:</label>
    <div class="col-sm-10">
      <select class="form-control" id="Sex" name="Sex">
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select>
    </div>
  </div>

  <div class="form-group row">
    <label for="PhoneNumber" class="col-sm-2 col-form-label">Phone Number:</label>
    <div class="col-sm-10">
      <input type="tel" class="form-control" id="PhoneNumber" name="PhoneNumber"  value="{{ old('PhoneNumber') }}" required>
    </div>
  </div>

  <div class="form-group row">
    <label for="ServiceProvided" class="col-sm-2 col-form-label">Service Provided:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="ServiceProvided" name="ServiceProvided" value="{{ old('ServiceProvided') }}" required>
    </div>
  </div>


  <div class="form-group row">
    <label for="Category" class="col-sm-2 col-form-label">Category:</label>
    <div class="col-sm-10">
      <select class="form-control" id="Category" name="Category">
        <option value="InputProviders">Input Providers</option>
        <option value="OutputProviders">Output Providers</option>
        <option value="AgrodealersAndProcessors">Agrodealers And Processors</option>
      </select>
    </div>
  </div>

  <div class="form-group row">
    <label for="YearsOfOperation" class="col-sm-2 col-form-label">Years Of Operation:</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="YearsOfOperation" name="YearsOfOperation" value="{{ old('YearsOfOperation') }}" required>
    </div>
  </div>

  <div class="form-group row">
    <label for="DateOfRegistration" class="col-sm-2 col-form-label">Date Of Registration:</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="DateOfRegistration" name="DateOfRegistration" value="{{ old('DateOfRegistration') }}" required>
    </div>
  </div>

  <div class="form-group row">
    <label for="RegistrationNumber" class="col-sm-2 col-form-label">Registration Number:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="RegistrationNumber" name="RegistrationNumber" value="{{ old('RegistrationNumber') }}" required>
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
