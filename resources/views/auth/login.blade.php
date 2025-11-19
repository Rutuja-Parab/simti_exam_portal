@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="signin" [hidden]="login">
            <h1 class="topline">Sign In</h1>
            <br />
            <div class="input-field">
                <input id="email" type="text" placeholder="Email ID" class="@error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="input-field">
                <input id="password" type="password" placeholder="Password" class="@error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="action">
                <a class="forgot" href="{{ route('password.request') }}">Forgot your password?</a>
            </div>

            <div class="login-box-button">
                <button type="submit">
                    Sign In
                </button>
            </div>

            <footer>
                <p class="text-center mt-5">
                    <a href="{{ route('static.page.privacy-policy') }}" class="text-decoration-none small"
                        style="color: #909090" target="_blank">Privacy Policy - KVKK</a>
                </p>
            </footer>
        </div>
    </form>
@endsection
