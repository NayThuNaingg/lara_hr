@extends('layouts.app_plain')
@section('Login')
@section('content')
<div class="container">
    <div class="row justify-content-center align-content-center" style="height: 100vh;">
        <div class="col-md-6">
            <div class="text-center"><img src="{{URL::asset('img/logo.png')}}" alt="Lara HR" style="width:150px;border-radius:20px;"></div>
            <div class="card bg-light rounded">
                <div class="card-header">{{ __('Login') }}</div>
                <div class="card-body">
                    <p class="text-muted">Please fill form</p>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <!-- <div class="form-outline mb-3">
                            <div class="row mb-3 justify-content-center align-content-center">
                                <div class="col-md-6 form-outline mb-4">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    <label class="form-label" for="email">Email address</label>
                                </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
    
                            <div class="row mb-2 justify-content-center align-content-center">
                                <div class="col-md-6 form-outline mb-4 ">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    <label class="form-label" for="form1Example2">Password</label>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <div class="col d-flex justify-content-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            Remember me
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
                                @endif
                                </div>
                            </div>
    
                            <div class="row m-3">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div> -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3 form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
