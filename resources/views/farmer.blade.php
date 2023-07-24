@extends('layouts.parent')
@section('content')
<div class="container">
    <h1>Farmer Details</h1>
    <form action="{{route('farmer.store')}}" method="POST">
        @csrf
        <div class="form-group">
           <label for="firstname">First Name</label>
           <input type="text" name="firstname" id="firstname" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="middlename">Middle Name</label>
            <input type="text" name="middlename" id="middlename" class="form-control">
         </div>
         <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" name="lastname" id="lastname" class="form-control" required>
         </div>
         <div class="form-group">
            <label for="dob">Date Of Birth</label>
            <input type="date" name="dob" id="dob" class="form-control" required>
         </div>
         <div class="form-group">
            <label for="phonenumber">Phone Number</label>
            <input type="number" name="phonenumber" id="phonenumber" class="form-control" required>
         </div>
         <div class="form-group">
            <label for="sex">Sex </label>
            <div>
                <label>
            <input type="radio" name="sex" value="male" required>Male
                </label></div>
                <div>
                    <label>
                        <input type="radio" name="sex" value="female" required>Female
                    </label></div>
         </div>
         <div class="form-group">
            <label for="subcounty">Sub County</label>
            <input type="text" name="subcounty" id="subcounty" class="form-control" required>
         </div>
         <div class="form-group">
            <label for="parish">Parish</label>
            <input type="text" name="parish" id="parish" class="form-control" required>
         </div>
         <div class="form-group">
            <label for="village">Village</label>
            <input type="text" name="village" id="village" class="form-control" required>
         </div>
         <div class="form-group">
            <label for="farmersassociation">Farmer's Association</label>
            <input type="text" name="farmersassociation" id="farmersassociation" class="form-control" required>
         </div>
         <div class="form-group">
            <label for="experience">Experience in years</label>
            <input type="number" name="experience" id="experience" class="form-control" required>
         </div>
         <div class="form-group">
            <label for="scale">Production Scale</label>
            <input type="number" name="scale" id="scale" class="form-control" required>
         </div>
         <div class="form-group">
            <label for="dependants">Number of Dependants</label>
            <input type="text" name="dependants" id="dependants" class="form-control" required>
         </div>
     <button type="submit" class="btn btn-primary"> Save</button>
    </form>
</div>
@endsection
