@extends('layouts.dash')

@section('title', 'Cadastro de região')

@section('content')

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <span class="mb-0">Região / Cadastro</span>
        </div>

        <div class="container">
            @include('includes.messages')
            <div class="card border-0 shadow-sm my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">

                                <form id="regForm" class="user" method="POST" action="{{ route('regiao-store') }}">
                                    @csrf

                                    <h5 class="text-center text-gray-900 mb-4 text-primary">Cadastrar Nova Região</h5> <hr>

                                    <div class="form-group row">

                                        <div class="col-sm-12 mt-2 mb-sm-0">
                                            <label for="nome" class="did-floating-label text-md-end mb-2">{{ __('Nome da regiao') }}</label>
                                            <input id="nome" type="text" class="form-control did-floating-input @error('nome') is-invalid @enderror" name="nome" value="{{ old('nome') }}" autocomplete="nome" autofocus>

                                            @error('nome')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="col-sm-12 mt-2 mb-sm-0">
                                            <label for="detalhes" class="did-floating-label text-md-end mb-2">{{ __('Detalhes') }}</label>
                                            <textarea id="detalhes" class="form-control did-floating-input @error('detalhes') is-invalid @enderror" name="detalhes" autocomplete="detalhes">{{ old('detalhes') }}</textarea>

                                            @error('detalhes')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="mt-4 mb-sm-0 text-right">
                                        <button type="submit" id="submit" class="btn btn-primary btn-user col-sm-2">
                                            Registrar
                                        </button>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
