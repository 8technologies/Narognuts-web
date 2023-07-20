@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="FirstName" class="col-md-4 col-form-label text-md-end">{{ __('FirstName') }}</label>

                            <div class="col-md-6">
                                <input id="FirstName" type="text" class="form-control @error('FirstName') is-invalid @enderror" name="FirstName" value="{{ old('FirstName') }}" required autocomplete="FirstName" autofocus>

                                @error('FirstName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="MiddleName" class="col-md-4 col-form-label text-md-end">{{ __('MiddleName') }}</label>

                            <div class="col-md-6">
                                <input id="MiddleName" type="text" class="form-control @error('MiddleName') is-invalid @enderror" name="MiddleName" value="{{ old('MiddleName') }}" autocomplete="MiddleName" autofocus>

                            </div>
                        </div>
                

                        <div class="row mb-3">
                            <label for="LastName" class="col-md-4 col-form-label text-md-end">{{ __('LastName') }}</label>

                            <div class="col-md-6">
                                <input id="LastName" type="text" class="form-control @error('LastName') is-invalid @enderror" name="LastName" value="{{ old('LastName') }}" required autocomplete="LastName" autofocus>

                                @error('LastName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="Sex" class="col-md-4 col-form-label text-md-end">{{ __('Sex') }}</label>
                            <div class="col-md-6">
                                <select id="Sex" type="text" class="form-control @error('Sex') is-invalid @enderror" name="Sex" value="{{ old('Sex') }}" required autocomplete="Sex" autofocus>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                @error('Sex')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="row mb-3">
                            <label for="PhoneNumber" class="col-md-4 col-form-label text-md-end">{{ __('PhoneNumber') }}</label>

                            <div class="col-md-6">
                                <input id="PhoneNumber" type="tel" class="form-control @error('PhoneNumber') is-invalid @enderror" name="PhoneNumber" value="{{ old('PhoneNumber') }}" required autocomplete="PhoneNumber" autofocus>

                                @error('PhoneNumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="UserName" class="col-md-4 col-form-label text-md-end">{{ __('UserName') }}</label>

                            <div class="col-md-6">
                                <input id="UserName" type="text" class="form-control @error('UserName') is-invalid @enderror" name="UserName" value="{{ old('UserName') }}" required autocomplete="UserName" autofocus>

                                @error('UserName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>                     

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
