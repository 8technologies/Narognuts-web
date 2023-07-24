@extends('layouts.app')

@section('content')
<main>
<div class="container">
     <div class="background-svg">
   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 810 540" preserveAspectRatio="xMidYMid slice">

    <image xlink:href="https://th.bing.com/th/id/R.0b07334b5049b4f0eb10e729e6d2f811?rik=LgLLxnPJ9UdB7Q&riu=http%3a%2f%2ftexasfarmbureau.org%2fwp-content%2fuploads%2f2017%2f08%2f080217_soybeans.jpg&ehk=H558KLjtjvkEKyNaK05AItSgROFzsNDxx53rTIuDfKI%3d&risl=&pid=ImgRaw&r=0" width="100%" height="100%" />
   </svg>
     </div>
    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
            <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

        <div class="d-flex justify-content-center py-4">
            <a href="index.html" class="logo d-flex align-items-center w-auto">
              <img src="assets/img/logo.png" alt="">
              <span class="d-none d-lg-block">Naro </span>
            </a>
          </div><!-- End Logo -->

            <div class="card mb-3">
                <div class="card-body">

                    <div class="pt-4 pb-2">
                        <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                        <p class="text-center small">Enter your personal details to create account</p>
                      </div>

                    <form method="POST" class="row g-3 needs-validation" action="{{ route('register') }}">
                        @csrf

                        <div class="col-12">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" name="firstname" class="form-control" value="{{ old('firstname') }}">
                            <div class="invalid-feedback">@error('firstname'){{$message}}@enderror</div><br>

                        </div>


                        <div class="col-12">
                            <label for="middleName" class="form-label">Middle Name</label>
                                <input type="text" name="middlename" class="form-control" value="{{ old('middlename') }}">
                                <div class="invalid-feedback">@error('middlename'){{$message}}@enderror</div><br>

                            </div><br>

                                <div class="col-12">
                                    <label for="lastName" class="form-label">Last Name</label>
                                    <input type="text" name="lastname" class="form-control" value="{{ old('lastname') }}">
                                    <div>@error('lastname'){{$message}}@enderror</div><br>
                                </div>

                                <div class="col-12">
                                    <input type="radio" name="sex"  value="{{ old('Male') }}">
                                    <label for="male-radio"> Male </label>

                                    <input type="radio" name="sex"   value="{{ old('Female') }}">
                                    <label for="male-radio"> Female </label>

                                </div><br>

                                <div class="col-12">
                                    <label for="phoneNumber" class="form-label">Phone Number</label>
                                        <input type="text" name="phonenumber" class="form-control"  value="{{ old('phonenumber') }}">
                                        <div>@error('phonenumber'){{$message}}@enderror</div><br>

                                    </div>


                        <div class="col-12">
                            <label for="yourEmail" class="form-label">Email Address</label>
                            <input type="email" name="email" class="form-control"  value="{{ old('email') }}">
                            <div>@error('email'){{$message}}@enderror</div><br>
                         </div><br>

                        <div class="col-12">
                            <label for="yourUsername" class="form-label">Username</label>
                            <input type="username" name="username" class="form-control"  value="{{ old('username') }}">
                            <div>@error('username'){{$message}}@enderror</div><br>
                        </div>

                        <div class="col-12">
                            <label for="yourPassword" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" >
                            <div>@error('password'){{$message}}@enderror</div>
                        </div>
                        <div class="col-12">
                            <label for="confirmPassword" class="form-label">Confirm Password</label>
                            <input type="password" name="password_confirmation">
                              <div>@error('password'){{$message}}@enderror</div>
                        </div>

                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" class="form-check-input" name="agree_terms_and_conditions"  type="checkbox"  {{ old('agree_terms_and_conditions') ? 'checked' : '' }}>
                                <label class="form-check-sign">
                                {{ ('I agree to the') }} </label>
                                <a href="#">{{ ('terms and conditions') }}</a>.
                            <div>@error('agree_terms_and_conditions'){{$message}}@enderror</div>
                            </div>
                        </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary w-100">{{ ('Create Account') }}</button>
                    </div>

                    <div class="col-12">
                        <p class="small mb-0">Already have an account? <a href="{{ route('login') }}">Log in</a></p>
                      </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
</section>
</div>
</main>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@endsection
