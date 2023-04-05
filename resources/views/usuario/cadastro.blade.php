@extends('layouts.main')

@section('title', 'Cadastro de usuário')

@section('css')
    <style>
        .form-upload{
            color: #dddddd;
            background:#333;
            display: block;
            margin: 0 auto;
            padding: 10px;
            text-align: center;
            width: 250px;
        }
        
        .input-personalizado{
            cursor: pointer;
        }
        
        .imagem{
            max-width: 50%;
        }
        
        .input-file{
            display:none;
        }
    </style>
@endsection

@section('content')

    <div class="container">
        <div class="card border-0 shadow-sm my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">                            
                            
                            <form id="regForm" class="user" method="POST" action="{{ route('user-store') }}" enctype="multipart/form-data">
                                @csrf

                                <h5 class="text-center text-gray-900 mb-4 text-primary">Dados pessoais</h5> <hr>

                                <div class="form-group row">

                                    <div class="form-upload">
                                        <label class="input-personalizado">
                                            <span class="botao-selecionar">Selecione foto de perfil </span>
                                            <img class="imagem" />
                                            <input type="file" class="input-file" accept="image/*">
                                        </label>
                                    </div>                                    

                                    <div class="col-sm-12 mt-2 mb-sm-0">
                                        <label for="name" class="did-floating-label text-md-end mb-2">{{ __('Nome completo') }}</label>
                                        <input id="name" type="text" class="form-control did-floating-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                    
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <label for="sexo" class="did-floating-label text-md-end mb-2">{{ __('Sexo') }}</label>
                                        <select id="sexo" class="form-control did-floating-input @error('sexo') is-invalid @enderror" name="sexo" autocomplete="sexo">
                                            <option value="">Selecione</option>
                                            <option value="Masculino" {{ old('sexo') == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                                            <option value="Feminino" {{ old('sexo') == 'Feminino' ? 'selected' : '' }}>Feminino</option>
                                            <option value="Outro" {{ old('sexo') == 'Outro' ? 'selected' : '' }}>Outro</option>
                                        </select>

                                        @error('sexo')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>                                    
                                    
                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <label for="dataNascimento" class="did-floating-label text-md-end mb-2">{{ __('Data de nascimento') }}</label>
                                        <input id="dataNascimento" type="date" class="form-control mydatepicker @error('dataNascimento') is-invalid @enderror" name="dataNascimento" value="{{ old('dataNascimento') }}" autocomplete="dataNascimento">                                      

                                        @error('dataNascimento')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div> 
                                    
                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <label for="nomeMae" class="did-floating-label text-md-end mb-2">{{ __('Nome da Mãe Completo') }}</label>
                                        <input id="nomeMae" type="text" class="did-floating-input form-control @error('nomeMae') is-invalid @enderror" name="nomeMae" value="{{ old('nomeMae') }}" autocomplete="nomeMae">

                                        @error('nomeMae')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                    
                                    
                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <label for="nomePai" class="did-floating-label text-md-end mb-2">{{ __('Nome do Pai Completo') }}</label>
                                        <input id="nomePai" type="text" class="did-floating-input form-control @error('nomePai') is-invalid @enderror" name="nomePai" value="{{ old('nomePai') }}" autocomplete="nomePai">

                                        @error('nomePai')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                    
                                    
                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <label for="estadoCivil" class="did-floating-label text-md-end mb-2">{{ __('Estado civil') }}</label>
                                        <select id="estadoCivil" class="form-control did-floating-input @error('estadoCivil') is-invalid @enderror" name="estadoCivil" autocomplete="estadoCivil">
                                            <option value="">Selecione</option>
                                            <option value="Solteiro" {{ old('estadoCivil') == 'Solteiro' ? 'selected' : '' }}>Solteiro</option>
                                            <option value="Casado" {{ old('estadoCivil') == 'Casado' ? 'selected' : '' }}>Casado</option>
                                            <option value="Viúvo" {{ old('estadoCivil') == 'Viúvo' ? 'selected' : '' }}>Viúvo</option>
                                            <option value="União Estável" {{ old('estadoCivil') == 'União Estável' ? 'selected' : '' }}>União Estável</option>
                                            <option value="Separado Judicialmente" {{ old('estadoCivil') == 'Separado Judicialmente' ? 'selected' : '' }}>Separado Judicialmente</option>
                                            <option value="Divorciado" {{ old('estadoCivil') == 'Divorciado' ? 'selected' : '' }}>Divorciado</option>
                                            <option value="Outro" {{ old('estadoCivil') == 'Outro' ? 'selected' : '' }}>Outro</option>
                                        </select>

                                        @error('estadoCivil')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                    
                                    
                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <label for="profissao" class="did-floating-label text-md-end mb-2">{{ __('Profissão') }}</label>
                                        <input id="profissao" type="text" class="did-floating-input form-control @error('profissao') is-invalid @enderror" name="profissao" value="{{ old('profissao') }}" autocomplete="profissao">

                                        @error('profissao')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>

                                <h5 class="text-center text-gray-900 mb-4 text-primary">Documentação</h5> <hr>

                                <div class="form-group row">                      
                                    
                                    <div class="col-sm-12 mt-2 mb-sm-0">
                                        <label for="tituloEleitor" class="did-floating-label text-md-end mb-2">{{ __('Título de eleitor') }}</label>
                                        <input id="tituloEleitor" type="text" class="did-floating-input form-control @error('tituloEleitor') is-invalid @enderror" name="tituloEleitor" value="{{ old('tituloEleitor') }}" autocomplete="tituloEleitor">

                                        @error('tituloEleitor')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <label for="zonaEleitoral" class="did-floating-label text-md-end mb-2">{{ __('Zona eleitoral') }}</label>
                                        <input id="zonaEleitoral" type="text" class="did-floating-input form-control @error('zonaEleitoral') is-invalid @enderror" name="zonaEleitoral" value="{{ old('zonaEleitoral') }}" autocomplete="zonaEleitoral">

                                        @error('zonaEleitoral')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <label for="secaoEleitoral" class="did-floating-label text-md-end mb-2">{{ __('Seção eleitoral') }}</label>
                                        <input id="secaoEleitoral" type="text" class="did-floating-input form-control @error('secaoEleitoral') is-invalid @enderror" name="secaoEleitoral" value="{{ old('secaoEleitoral') }}" autocomplete="secaoEleitoral">

                                        @error('secaoEleitoral')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <label for="RG" class="did-floating-label text-md-end mb-2">{{ __('RG') }}</label>
                                        <input id="RG" type="text" class="did-floating-input form-control @error('RG') is-invalid @enderror" name="RG" value="{{ old('RG') }}" autocomplete="RG">

                                        @error('RG')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                    
                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <label for="CPF" class="did-floating-label text-md-end mb-2">{{ __('CPF') }}</label>
                                        <input id="CPF" type="text" class="did-floating-input form-control @error('CPF') is-invalid @enderror" name="CPF" value="{{ old('CPF') }}" autocomplete="CPF">

                                        @error('CPF')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <h5 class="text-center text-gray-900 mb-4 text-primary">Endereço</h5> <hr>

                                <div class="form-group row">         
                    
                                    <div class="col-sm-6 mt-2 mb-sm-0">
                                        <label for="cep" class="did-floating-label text-md-end mb-2">{{ __('Cep') }}</label>
                                        <input id="cep" type="text" class="did-floating-input form-control @error('cep') is-invalid @enderror" name="cep" value="{{ old('cep') }}" autocomplete="cep">
                    
                                        @error('cep')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
        
                                    <div class="col-sm-6 mt-2 mb-sm-0">
                                        <label for="endereco" class="did-floating-label text-md-end mb-2">{{ __('Endereço') }}</label>
                                        <input id="endereco" type="text" class="did-floating-input form-control @error('endereco') is-invalid @enderror" name="endereco" value="{{ old('endereco') }}" autocomplete="endereco">
                    
                                        @error('endereco')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                    
                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <label for="numero" class="did-floating-label text-md-end mb-2">{{ __('Número') }}</label>
                                        <input id="numero" type="text" class="did-floating-input form-control @error('numero') is-invalid @enderror" name="numero" value="{{ old('numero') }}" autocomplete="numero">
                    
                                        @error('numero')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                    
                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <label for="bairro" class="did-floating-label text-md-end mb-2">{{ __('Bairro') }}</label>
                                        <input id="bairro" type="text" class="did-floating-input form-control @error('bairro') is-invalid @enderror" name="bairro" value="{{ old('bairro') }}" autocomplete="bairro">
                    
                                        @error('bairro')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                    
                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <label for="id_regiao" class="did-floating-label text-md-end mb-2">{{ __('Selecione a região') }}</label>
                                        <select id="id_regiao" class="form-control did-floating-input @error('id_regiao') is-invalid @enderror" name="id_regiao" autocomplete="id_regiao">
                                            <option value="">Selecione</option>
                                            @foreach ($regioes as $regiao)
                                                <option value="{{ $regiao->id }}" {{ old('id_regiao') == $regiao->id ? 'selected' : '' }}> {{ $regiao->nome }} </option>                                                
                                            @endforeach
                                        </select>
                    
                                        @error('id_regiao')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                    
                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <label for="tempoResidencia" class="did-floating-label text-md-end mb-2">{{ __('Tempo que reside no município') }}</label>
                                        <input id="tempoResidencia" type="text" class="did-floating-input form-control @error('tempoResidencia') is-invalid @enderror" name="tempoResidencia" value="{{ old('tempoResidencia') }}" autocomplete="tempoResidencia">
                    
                                        @error('tempoResidencia')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    
                                </div>

                                <h5 class="text-center text-gray-900 mb-4 text-primary">Dados de acesso</h5> <hr>

                                <div class="form-group row">               
                                    
                                    <div class="col-sm-12 mt-2 mb-sm-0">
                                        <label for="email" class="did-floating-label text-md-end mb-2">{{ __('Email') }}</label>
                                        <input id="email" type="email" class="did-floating-input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                
                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <label for="password" class="did-floating-label text-md-end mb-2">{{ __('Senha') }}</label>
                                        <input id="password" type="password" class="did-floating-input form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>                                
                    
                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <label for="password-confirm" class="did-floating-label text-md-end mb-2">{{ __('Confirmar senha') }}</label>
                                        <input id="password-confirm" class="did-floating-input form-control" type="password" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                    
                                </div>

                                <div class="mt-4 mb-sm-0 text-right">
                                    <button type="submit" id="submit" class="btn btn-primary btn-user col-sm-2">
                                        Registrar
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

    @section('js')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
        <script>            
            $(document).ready(function(){
                // Adiciona a máscara para o título de eleitor
                $("#tituloEleitor").mask("9999.9999.9999");

                // Adiciona a máscara para o CPF
                $("#CPF").mask("999.999.999-99");

                // Adiciona a máscara para o RG
                $("#RG").mask("99.999.999-9");

                // Adiciona a máscara para o CEP
                $("#cep").mask("99999-999");

                const a = document.querySelector.bind(document);

                const previewImg = a('.imagem');
                const fileChooser = a('.input-file');

                fileChooser.onchange = e => {
                    const fileToUpload = e.target.files.item(0);
                    const reader = new FileReader();
                    reader.onload = e => previewImg.src = e.target.result;
                    reader.readAsDataURL(fileToUpload);
                };               
                
            });
        </script>
    @endsection
@endsection