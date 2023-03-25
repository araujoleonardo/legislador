@extends('layouts.auth')

@section('title', 'Cadastro')

@section('content')
    {{-- ========================Cadastro========================== --}}

    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">                            
                            
                            <form id="regForm" class="user" method="POST" action="{{ route('register') }}">
                                @csrf                            
                                
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Dados pessoais</h1>
                                </div>

                                <div class="form-group row">

                                    <div class="col-sm-12 mt-2 mb-sm-0">
                                        <input id="name" type="text" class="did-floating-input form-control form-control-user @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        <label for="name" class="did-floating-label text-md-end mb-2">{{ __('Nome completo') }}</label>
                    
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <select id="sexo" class="did-floating-input form-control form-control-user @error('sexo') is-invalid @enderror" name="sexo" required autocomplete="sexo">
                                            <option value="">Selecione</option>
                                            <option value="masculino" {{ old('sexo') == 'masculino' ? 'selected' : '' }}>Masculino</option>
                                            <option value="feminino" {{ old('sexo') == 'feminino' ? 'selected' : '' }}>Feminino</option>
                                            <option value="outro" {{ old('sexo') == 'outro' ? 'selected' : '' }}>Outro</option>
                                        </select>
                                        <label for="sexo" class="did-floating-label text-md-end mb-2">{{ __('Sexo') }}</label>

                                        @error('sexo')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    
                                    
                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <input id="dataNascimento" type="text" class="did-floating-input form-control form-control-user @error('dataNascimento') is-invalid @enderror" name="dataNascimento" value="{{ old('dataNascimento') }}" required autocomplete="dataNascimento">
                                        <label for="dataNascimento" class="did-floating-label text-md-end mb-2">{{ __('Data de nascimento') }}</label>

                                        @error('dataNascimento')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>                        
                                    
                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <input id="nomeMae" type="text" class="did-floating-input form-control form-control-user @error('nomeMae') is-invalid @enderror" name="nomeMae" value="{{ old('nomeMae') }}" required autocomplete="nomeMae">
                                        <label for="nomeMae" class="did-floating-label text-md-end mb-2">{{ __('Nome da Mãe Completo') }}</label>

                                        @error('nomeMae')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                    
                                    
                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <input id="nomePai" type="text" class="did-floating-input form-control form-control-user @error('nomePai') is-invalid @enderror" name="nomePai" value="{{ old('nomePai') }}" required autocomplete="nomePai">
                                        <label for="nomePai" class="did-floating-label text-md-end mb-2">{{ __('Nome do Pai Completo') }}</label>

                                        @error('nomePai')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                    
                                    
                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <input id="estadoCivil" type="text" class="did-floating-input form-control form-control-user @error('estadoCivil') is-invalid @enderror" name="estadoCivil" value="{{ old('estadoCivil') }}" required autocomplete="estadoCivil">
                                        <label for="estadoCivil" class="did-floating-label text-md-end mb-2">{{ __('Estado civil') }}</label>

                                        @error('estadoCivil')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                    
                                    
                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <input id="profissao" type="text" class="did-floating-input form-control form-control-user @error('profissao') is-invalid @enderror" name="profissao" value="{{ old('profissao') }}" required autocomplete="profissao">
                                        <label for="profissao" class="did-floating-label text-md-end mb-2">{{ __('Profissão') }}</label>

                                        @error('profissao')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Documentação</h1>
                                </div>

                                <div class="form-group row">                      
                                    
                                    <div class="col-sm-6 mt-2 mb-sm-0">
                                        <input id="tituloEleitor" type="text" class="did-floating-input form-control form-control-user @error('tituloEleitor') is-invalid @enderror" name="tituloEleitor" value="{{ old('tituloEleitor') }}" required autocomplete="tituloEleitor">
                                        <label for="tituloEleitor" class="did-floating-label text-md-end mb-2">{{ __('Título de eleitor') }}</label>

                                        @error('tituloEleitor')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-sm-6 mt-2 mb-sm-0">
                                        <input id="zonaEleitoral" type="text" class="did-floating-input form-control form-control-user @error('zonaEleitoral') is-invalid @enderror" name="zonaEleitoral" value="{{ old('zonaEleitoral') }}" required autocomplete="zonaEleitoral">
                                        <label for="zonaEleitoral" class="did-floating-label text-md-end mb-2">{{ __('Zona eleitoral') }}</label>

                                        @error('zonaEleitoral')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <input id="secaoEleitoral" type="text" class="did-floating-input form-control form-control-user @error('secaoEleitoral') is-invalid @enderror" name="secaoEleitoral" value="{{ old('secaoEleitoral') }}" required autocomplete="secaoEleitoral">
                                        <label for="secaoEleitoral" class="did-floating-label text-md-end mb-2">{{ __('Seção eleitoral') }}</label>

                                        @error('secaoEleitoral')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <input id="RG" type="text" class="did-floating-input form-control form-control-user @error('RG') is-invalid @enderror" name="RG" value="{{ old('RG') }}" required autocomplete="RG">
                                        <label for="RG" class="did-floating-label text-md-end mb-2">{{ __('RG') }}</label>

                                        @error('RG')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                    
                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <input id="CPF" type="text" class="did-floating-input form-control form-control-user @error('CPF') is-invalid @enderror" name="CPF" value="{{ old('CPF') }}" required autocomplete="CPF">
                                        <label for="CPF" class="did-floating-label text-md-end mb-2">{{ __('CPF') }}</label>

                                        @error('CPF')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Endereço</h1>
                                </div>

                                <div class="form-group row">         
                    
                                    <div class="col-sm-6 mt-2 mb-sm-0">
                                        <input id="cep" type="text" class="did-floating-input form-control form-control-user @error('cep') is-invalid @enderror" name="cep" value="{{ old('cep') }}" required autocomplete="cep">
                                        <label for="cep" class="did-floating-label text-md-end mb-2">{{ __('Cep') }}</label>
                    
                                        @error('cep')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
        
                                    <div class="col-sm-6 mt-2 mb-sm-0">
                                        <input id="endereco" type="text" class="did-floating-input form-control form-control-user @error('endereco') is-invalid @enderror" name="endereco" value="{{ old('endereco') }}" required autocomplete="endereco">
                                        <label for="endereco" class="did-floating-label text-md-end mb-2">{{ __('Endereço') }}</label>
                    
                                        @error('endereco')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                    
                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <input id="numero" type="text" class="did-floating-input form-control form-control-user @error('numero') is-invalid @enderror" name="numero" value="{{ old('numero') }}" required autocomplete="numero">
                                        <label for="numero" class="did-floating-label text-md-end mb-2">{{ __('Número') }}</label>
                    
                                        @error('numero')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                    
                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <input id="bairro" type="text" class="did-floating-input form-control form-control-user @error('bairro') is-invalid @enderror" name="bairro" value="{{ old('bairro') }}" required autocomplete="bairro">
                                        <label for="bairro" class="did-floating-label text-md-end mb-2">{{ __('Bairro') }}</label>
                    
                                        @error('bairro')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                    
                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <input id="regiao" type="text" class="did-floating-input form-control form-control-user @error('regiao') is-invalid @enderror" name="regiao" value="{{ old('regiao') }}" required autocomplete="regiao">
                                        <label for="regiao" class="did-floating-label text-md-end mb-2">{{ __('Selecione a região') }}</label>
                    
                                        @error('regiao')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                    
                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <input id="tempoResidencia" type="text" class="did-floating-input form-control form-control-user @error('tempoResidencia') is-invalid @enderror" name="tempoResidencia" value="{{ old('tempoResidencia') }}" required autocomplete="tempoResidencia">
                                        <label for="tempoResidencia" class="did-floating-label text-md-end mb-2">{{ __('Tempo que reside no município') }}</label>
                    
                                        @error('tempoResidencia')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    
                                </div>

                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Dados de acesso</h1>
                                </div>

                                <div class="form-group row">               
                                    
                                    <div class="col-sm-12 mt-2 mb-sm-0">
                                        <input id="email" type="email" class="did-floating-input form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                        <label for="email" class="did-floating-label text-md-end mb-2">{{ __('Email') }}</label>
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                
                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <input id="password" type="password" class="did-floating-input form-control form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                        <label for="password" class="did-floating-label text-md-end mb-2">{{ __('Senha') }}</label>
        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>                                
                    
                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <input id="password-confirm" class="did-floating-input form-control form-control-user" type="password" name="password_confirmation" required autocomplete="new-password">
                                        <label for="password-confirm" class="did-floating-label text-md-end mb-2">{{ __('Confirmar senha') }}</label>
                                    </div>
                    
                                </div>

                                <div class="mt-4 mb-sm-0 text-right">
                                    <button type="submit" id="btnSubmit" class="btn btn-primary btn-user col-sm-3">
                                        Register
                                    </button>
                                </div>

                            </form>

                            <hr>

                            <div class="text-center">
                                <span>Ja é cadastrado?</span>
                                <a href="{{ route('login') }}">
                                    <span>Fazer login</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection