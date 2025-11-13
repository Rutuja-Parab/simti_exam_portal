@extends('layouts.app')

@section('content')
<div class="container p-5">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="card bg-dark text-white">
                <div class="card-header">Verify your email address</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            A fresh verification link has been sent to your email address.
                        </div>
                    @endif

                    Before proceeding, please check your email for a verification link.
                    If you did not receive the email,
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="login-button btn btn-light fw-bolder">click here to request another</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    @csrf
    <div class="signin" [hidden]="login">
        <h1 class="topline">Verify your email address</h1>
        <br />
        @if (session('resent'))
            <div class="alert alert-success" role="alert">
                A fresh verification link has been sent to your email address.
            </div>
        @endif

        <div class="input-field">
            <input id="password" type="password" placeholder="Password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <label>Before proceeding, please check your email for a verification link.</label>
        <label>If you did not receive the email</label>
        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <div class="login-box-button">
                <button type="submit">
                    Click here to request another
                </button>
            </div>
        </form>

    </div>
@endsection
