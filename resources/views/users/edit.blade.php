
@extends('layouts.master')
@section('content')  

<form method="post" action="{{ route('user_edit', $user->id) }}" class="container mt-4">
    @method('patch')
  @csrf

  <div class="row mb-3">
      <label for="FirstName" class="required col-md-4 col-form-label text-md-end">{{ __('FirstName') }}</label>

      <div class="col-md-6">
          <input id="FirstName" type="text" class="form-control @error('FirstName') is-invalid @enderror" name="FirstName" value="{{$user->FirstName}}" required autocomplete="FirstName" autofocus>

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
          <input id="MiddleName" type="text" class="form-control" name="MiddleName" value="{{$user->MiddleName}}" autocomplete="MiddleName" autofocus>

      </div>
  </div>


  <div class="row mb-3">
      <label for="LastName" class="required col-md-4 col-form-label text-md-end">{{ __('LastName') }}</label>

      <div class="col-md-6">
          <input id="LastName" type="text" class="form-control @error('LastName') is-invalid @enderror" name="LastName" value="{{$user->LastName}}" required autocomplete="LastName" autofocus>

          @error('LastName')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
  </div>

  <div class="row mb-3">
      <label for="Sex" class="required col-md-4 col-form-label text-md-end">{{ __('Sex') }}</label>
      <div class="col-md-6">
          <select id="Sex" type="text" class=" form-control @error('Sex') is-invalid @enderror" name="Sex" value="{{$user->Sex}}" required autocomplete="Sex" autofocus>
              <option value="{{$user->Sex}}">Male</option>
              <option value="{{$user->Sex}}">Female</option>
          </select>
          @error('Sex')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
  </div>

  
  <div class="row mb-3">
      <label for="PhoneNumber" class="required col-md-4 col-form-label text-md-end">{{ __('PhoneNumber') }}</label>

      <div class="col-md-6">
          <input id="PhoneNumber" type="tel" class="form-control @error('PhoneNumber') is-invalid @enderror" name="PhoneNumber" value="{{$user->PhoneNumber}}" required autocomplete="PhoneNumber" autofocus>

          @error('PhoneNumber')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
  </div>

  <div class="row mb-3">
      <label for="UserName" class="required col-md-4 col-form-label text-md-end">{{ __('UserName') }}</label>

      <div class="col-md-6">
          <input id="UserName" type="text" class="form-control @error('UserName') is-invalid @enderror" name="UserName" value="{{$user->UserName}}" required autocomplete="UserName" autofocus>

          @error('UserName')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
  </div>                     

  <div class="row mb-3">
      <label for="email" class="required col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

      <div class="col-md-6">
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}" required autocomplete="email">

          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
  </div>

  {{-- <div class="row mb-3">
      <label for="password" class="required col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

      <div class="col-md-6">
          <input id="password" type="password" class="required form-control @error('password') is-invalid @enderror" name="password" value="{{$users->password}}" required autocomplete="new-password">

          @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
  </div>

  <div class="row mb-3">
      <label for="password-confirm" class="required col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

      <div class="col-md-6">
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="{{$users->password}}" required autocomplete="new-password">
      </div>
  </div> --}}


  { <div class="row mb-3">
    <label for="role" class="required col-md-4 col-form-label text-md-end">{{ __('role') }}</label>
 <div class="col-md-6">
        <select id="role" type="text" class=" form-control" name="role">
            <option value = "{{$userRole}}">{{$userRole}}</option>
          @foreach ($roles as $role)
          <option value={{$role->id}}>{{$role->name}}</option>
      @endforeach
        </select> 
        
    </div> 
</div>
  <div class="row mb-0">
      <div class="signup-form button input-box col-md-6 offset-md-4">
          <button type="submit" class="btn btn-primary">
              Edit
          </button>
      </div>
  </div>
</form>
    @endsection