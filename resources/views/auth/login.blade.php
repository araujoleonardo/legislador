@extends('layouts.auth')

@section('title', 'Login')

@section('content')

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block">
                            <img src="/img/login.svg" alt="">
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Bem Vindo!</h1>
                                </div>

                                <form id="formAuthentication" class="user" method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" id="email" placeholder="Entre com seu email..." value="{{ old('email') }}" required autocomplete="email" autofocus />
                                        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <br>

                                    <div class="form-group">
                                        <input type="password" id="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password"
                                        placeholder="Entre com a senha..." required autocomplete="current-password" aria-describedby="password"/>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <br>

                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" name="remember" id="customCheck" {{ old('customCheck') ? 'checked' : '' }} checked />
                                            <label class="custom-control-label" for="customCheck">
                                                Lembrar
                                            </label>
                                        </div>
                                    </div>

                                    <br>

                                    <div class="mb-3">
                                        <button class="btn btn-primary btn-user btn-block" type="submit">Sign in</button>
                                    </div>
                                </form>
                                
                                <br>
                                <hr>

                                @if (Route::has('password.request'))
                                    <div class="text-center">
                                        <a href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    </div>                                        
                                @endif

                                <br>
                                <div class="text-center">
                                    <span>Novo por aqui?</span>
                                    <a href="{{ route('register') }}">
                                        <span>Cadastre-se</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
