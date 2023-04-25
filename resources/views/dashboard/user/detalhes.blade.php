@extends('layouts.dash')

@section('title', 'Perfil')

@section('css')
    <style>
        .rounded-circle {
            width: 200px; /* width of container */
            height: 200px; /* height of container */
            object-fit: cover;
            border-radius: 50%;
        }
    </style>
@endsection

@section('content')

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <span class="mb-0">Usuário / Detalhes</span>
        </div>

        <div class="row">
            <div class="col-md-3">

                <div class="card shadow-sm">
                    <div class="card-body">

                        <div class="card-header">
                            <h5 class="card-title mb-0">Detalhes do usuário</h5>
                        </div>
                        <div class="card-body text-center">

                            @if ($user->image)
                                <img src="{{ asset('img/users/' . $user->image) }}" alt="user" class="img-fluid rounded-circle mb-2">
                            @else
                                <img src="{{ asset('img/users/avatar.png') }}" alt="user" class="img-fluid rounded-circle mb-2">
                            @endif
                            <h5 class="card-title mb-0">{{ $user->name }}</h5>
                            <div class="text-muted mb-2"><span data-feather="home" class="feather-sm me-1"></span> Perfil: <strong> {{ $user->perfil }} </strong></div>

                        </div>

                    </div>
                </div>

            </div>

            {{-- =========================Detalhes========================= --}}

            <div class="col-md-9">
                <div class="card shadow-sm">
                    <div class="card-body">

                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-unstyled mb-0">
                                    <li><span data-feather="home" class="feather-sm me-1"></span> Nome completo: <strong> {{ $user->name }} </strong> </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-unstyled mb-0">
                                    <li><span data-feather="home" class="feather-sm me-1"></span> E-mail: <strong> {{ $user->email }} </strong> </li>
                                </ul>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-unstyled mb-0">
                                    <li><span data-feather="home" class="feather-sm me-1"></span> Nome da mãe: <strong> {{ $user->nomeMae }} </strong> </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-unstyled mb-0">
                                    <li><span data-feather="home" class="feather-sm me-1"></span> Nome do pai: <strong> {{ $user->nomePai }} </strong> </li>
                                </ul>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-unstyled mb-0">
                                    <li><span data-feather="home" class="feather-sm me-1"></span> Sexo: <strong> {{ $user->sexo }} </strong> </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-unstyled mb-0">
                                    <li><span data-feather="home" class="feather-sm me-1"></span> Estado civil: <strong> {{ $user->estadoCivil }} </strong> </li>
                                </ul>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-unstyled mb-0">
                                    <li><span data-feather="home" class="feather-sm me-1"></span> Zona eleitoral: <strong> {{ $user->zonaEleitoral }} </strong> </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-unstyled mb-0">
                                    <li><span data-feather="home" class="feather-sm me-1"></span> Seção eleitoral: <strong> {{ $user->secaoEleitoral }} </strong> </li>
                                </ul>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-unstyled mb-0">
                                    <li><span data-feather="home" class="feather-sm me-1"></span> Endereço: <strong> {{ $user->endereco }}, {{ $user->numero }} </strong> </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-unstyled mb-0">
                                    <li><span data-feather="home" class="feather-sm me-1"></span> Bairro: <strong> {{ $user->bairro }} </strong> </li>
                                </ul>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-unstyled mb-0">
                                    <li><span data-feather="home" class="feather-sm me-1"></span> Regiao: <strong> {{ $user->regiao->nome }} </strong> </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-unstyled mb-0">
                                    <li><span data-feather="home" class="feather-sm me-1"></span> Tempo que reside no município: <strong> {{ $user->tempoResidencia }} </strong> </li>
                                </ul>
                            </div>
                        </div>
                        <hr>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
