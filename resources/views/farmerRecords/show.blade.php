

@extends('layouts.app')
@section('content')  

      <form method="POST" action="{{ route('farmerrecords', $users->id) }}" class="container mt-4">
        @csrf
      <div class="form-group row">
        <label for="FirstName" class=" required col-sm-2 col-form-label">First Name:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="FirstName" name="FirstName" value="{{ $users->FirstName}}" required>
        </div>
      </div>
    
      <div class="form-group row">
        <label for="MiddleName" class="col-sm-2 col-form-label">Middle Name:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="MiddleName" name="MiddleName" value="{{ $users->MiddleName}}">
        </div>
      </div>
    
      <div class="form-group row">
        <label for="LastName" class="required col-sm-2 col-form-label">Last Name:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="LastName" name="LastName" value="{{ $users->LastName}}"required>
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
          <input type="tel" class="form-control" id="PhoneNumber" name="PhoneNumber" value="{{ $users->PhoneNumber}}" required>
        </div>
      </div>
    
      <div class="form-group row">
        <label for="SubCounty" class="required col-sm-2 col-form-label">Sub County:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="SubCounty" name="SubCounty" required>
        </div>
      </div>
    
      <div class="form-group row">
        <label for="Village" class="required col-sm-2 col-form-label">Village:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="Village" name="Village" required>
        </div>
      </div>
    
      <div class="form-group row">
        <label for="Association" class="required col-sm-2 col-form-label">Association:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="Association" name="Association" required>
        </div>
      </div>
    
      <div class="form-group row">
        <label for="ProductionScale" class="required col-sm-2 col-form-label">Production Scale(Achres):</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="ProductionScale" name="ProductionScale" required>
        </div>
      </div>
    
      <div class="form-group row">
        <label for="NumberOfDependants" class="required col-sm-2 col-form-label">Number of Dependents:</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="NumberOfDependants" name="NumberOfDependants" required>
        </div>
      </div>
    
      <div class="form-group row">
        <label for="LevelOfEducation" class="required col-sm-2 col-form-label">Level of Education:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="LevelOfEducation" name="LevelOfEducation" required>
        </div>
      </div>
    
      <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
      </div>
    </form>
@endsection