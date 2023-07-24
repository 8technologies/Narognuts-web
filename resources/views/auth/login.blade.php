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
                  <span class="d-none d-lg-block">Naro</span>
                </a>
              </div><!-- End Logo -->

            <div class="card mb-3">
                <div class="card-body">

                    <div class="pt-4 pb-2">
                        <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                        <p class="text-center small">Enter your email address & password to login</p>
                      </div>

                    <form method="POST" action="{{ route('login') }}" class="row g-3 needs-validation" novalidate>
                        @csrf

                        <div class="col-12">
                            <label for="email" class="form-label">{{ __('Email Address') }}</label>

                            <div class="input-group has-validation">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="password" class="form-label">{{ __('Password') }}</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                        </div>

                        <div class="col-12">

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                        </div>

                        <div class="col-12">

                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                        </div>
                            <div class="col-12">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                            <div class="col-12">
                                <p class="small mb-0">Don't have an account? <a href="{{ route('register') }}">Create an account</a></p>
                              </div>
                    </form>
                </div>
            </div>
        </div>
           </div>
    </div>
</section>
</div>

</main><!-- End #main -->

@endsection







