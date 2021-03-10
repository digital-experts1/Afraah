@extends('layouts.app')

@section('content')




<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card mt-4 ">
                <div class="card-body text-center ">
                    <div>
                        <h3 class="mt-3 mb-3"> Afraah </h3>
                        <svg class="block mx-auto mb-5" xmlns="http://www.w3.org/2000/svg" width="100" height="2" viewBox="0 0 100 2">
                            <path fill="#D8E3EC" d="M0 0h100v2H0z"></path>
                        </svg>
                    </div>


                    <form method="POST" class="col-md-8 m-auto text-left " action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">


                            <div class="col-sm-12 register-form">
                                <label for="name">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-sm-12 register-form">
                                <label for="email" >{{ __('E-Mail Address') }}</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-sm-12 register-form">
                                <label for="password"  >{{ __('Password') }}</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-sm-12 register-form">
                                <label for="password-confirm"  >{{ __('Confirm Password') }}</label>

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 mt-4 mb-5  ">
                                <button type="submit" class="btn btn-register" >
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

<style>


</style>
@endsection
