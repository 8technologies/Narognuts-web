@extends('layouts.parent')
@section('content')
<div class="container">
    <h1>Agro Dealer Details</h1>
    <form action="{{route('agrodealer.store')}}" method="POST">
        @csrf
        <div class="form-group">
           <label for="name">Name(Service provider name)</label>
           <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="physicaladdress">Physical Address</label>
            <input type="text" name="physicaladdress" id="physicaladdress" class="form-control">
         </div>
         <div class="form-group">
            <label for="phonenumber">Phone Number</label>
            <input type="number" name="phonenumber" id="phonenumber" class="form-control" required>
         </div>
         <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
         </div>
         <div class="form-group">
            <label for="dealersin">Dealers In</label>
            <input type="text" name="dealersin" id="dealersin" class="form-control" required>
         </div>

         <div class="form-group">
            <label for="service">Service Provided Category </label>
            <div>
                <label>
            <input type="radio" name="service" value="input" required>Input
                </label></div>
                <div>
                    <label>
                        <input type="radio" name="service" value="output" required>Output
                    </label></div>
         </div>
         <div>
            <label>
                <input type="radio" name="service" value="both" required>Both
            </label></div>
 </div>

         <div class="form-group">
            <label for="yearsofexperience">Years of Experience</label>
            <input type="number" name="yearsofexperience" id="yearsofexperience" class="form-control" required>
         </div>
         <div class="form-group">
            <label for="regnumber">Registration Number</label>
            <input type="text" name="regnumber" id="regnumber" class="form-control" required>
         </div>

         <div class="form-group">
            <label for="dateof_reg">Date of Registration</label>
            <input type="date" name="dateof_reg" id="dateof_reg" class="form-control" required>
         </div>
     <button type="submit" class="btn btn-primary"> Save</button>
    </form>
</div>
@endsection
