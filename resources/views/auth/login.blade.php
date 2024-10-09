@extends('layouts.auth')

@section('content')
    <div class="row flex-between-center mb-2">
        <div class="col-auto">
            <h5>Log in</h5>
        </div>
        <div class="col-auto fs-10 text-600">
            <span class="mb-0 undefined">or</span>
            <span><a href="{{ route('register') }}">Create an account</a></span>
        </div>
    </div>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-3">
            <input class="form-control @error('email') is-invalid @enderror" name="email" type="email" placeholder="Email address" value="{{ old('email') }}" />
            @error('email')
                <div class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <input class="form-control @error('password') is-invalid @enderror" name="password" type="password" placeholder="Password" />
            @error('password')
                <div class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>
        <div class="row flex-between-center">
            <div class="col-auto">
                <div class="form-check mb-0">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember_me" checked="checked" />
                    <label class="form-check-label mb-0" for="remember_me">Remember me</label>
                </div>
            </div>
            <div class="col-auto">
                <a class="fs-10" href="{{ route('password.request') }}">Forgot Password?</a>
            </div>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Log in</button>
        </div>
    </form>
@endsection
