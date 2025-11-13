@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('password.confirm') }}">
    @csrf
    <div class="signin" [hidden]="login">
        <h1 class="topline">Please confirm your password before continuing.</h1>
        <br />
        <div class="input-field">
            <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>

        <div class="input-field">
            <input id="password" type="password" placeholder="Password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
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
                Confirm Password
            </button>
        </div>
    </div>
</form>
@endsection
