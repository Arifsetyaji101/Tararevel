@extends('layouts.auth')

@section('title', 'Nomads | Login')

@section('content')

<main class="login-container">
    <div class="container">
        <div class="row d-flex page-login align-items-center">
            <div class="section-left col-12 col-md-6">
                <h1 class="mb-4">We explore the new<br />life much better</h1>
                <img src="/frontend/images/family1.jpg" alt="" class="w-100 d-none d-sm-flex mb-3" />
            </div>
            <div class="section-right col-12 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="/frontend/images/logo.png" alt="" class="w-50 mb-4" />
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus aria-describedby="emailHelp">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">{{ __('Password') }}</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                            <div class="form-group form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                            <button type="submit" class="btn btn-block btn-login">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                            <a class="" href="{{ route('password.request') }}">
                                <p class="text-center mt-4">
                                    {{ __('Saya lupa password') }}
                                </p>
                            </a>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
