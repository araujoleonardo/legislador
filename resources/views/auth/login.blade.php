@extends('layouts.app')

@section('title', 'Login')

@section('content')

<!-- Login box.scss -->

<div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
    <div class="auth-box bg-dark border-top border-secondary">
        <div id="loginform">
            <br>
            <div class="text-center p-t-20 p-b-20">
                <span class="text-light"><h2>Legislador</h2></span>
            </div>
            <br>
            <!-- Form -->
            <form class="form-horizontal m-t-20" id="loginform" method="POST" action="{{ route('login') }}">
                @csrf

                <div class="row p-b-30">
                    <div class="col-12">

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="ti-user"></i></span>
                            </div>
                            <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="E-mail" aria-label="Username" aria-describedby="basic-addon1" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-warning text-white" id="basic-addon2"><i class="ti-lock"></i></span>
                            </div>
                            <input id="password" type="password" class="form-control form-control-lg  @error('password') is-invalid @enderror" placeholder="Senha" aria-label="Password" aria-describedby="basic-addon1" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>                        

                    </div>
                </div>
                <div class="row border-top border-secondary">
                    <div class="col-12">
                        <div class="form-group">
                            <div class="p-t-20">
                                <br>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-info" id="to-recover" href="{{ route('password.request') }}">
                                        <i class="fa fa-lock m-r-5"></i>
                                        Recuperar senha?
                                    </a>
                                @endif

                                <button class="btn btn-success float-right" type="submit">Login</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
