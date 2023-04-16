@extends('layouts.main')

@section('title', 'Cadastro de usuário')

@section('css')
    <style>
        #image {
            display: none;
        }

        .picture {
            width: 220px;
            aspect-ratio: 5/5;
            border-radius: 50%;
            background: #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #1275af;
            border: 1px dashed currentcolor;
            cursor: pointer;
            font-family: sans-serif;
            transition: color 300ms ease-in-out, background 300ms ease-in-out;
            outline: none;
            overflow: hidden;
        }

        .picture:hover {
            color: #777;
            background: #ccc;
        }

        .picture:active {
            border-color: turquoise;
            color: turquoise;
            background: #eee;
        }

        .picture:focus {
            color: #777;
            background: #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .picture__img {
            max-width: 100%;
        }
    </style>
@endsection

@section('content')

    <div class="container">
        @include('includes.messages')
        <div class="card border-0 shadow-sm my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">

                            <form id="regForm" class="user" method="POST" action="{{ route('user-store') }}"
                                enctype="multipart/form-data">
                                @csrf

                                @error('image')
                                    <div class="alert alert-danger">
                                        <span>{{ $message }}</span>
                                    </div>
                                @enderror

                                <h5 class="text-center text-gray-900 mb-4 text-primary">Dados pessoais</h5>
                                <hr>

                                <div class="form-group row">

                                    <div class="col-sm-3 mt-4 mb-sm-0">
                                        <label class="picture" for="image" tabIndex="0">
                                            <span class="picture__image"></span>
                                        </label>

                                        <input type="file" name="image" id="image">
                                    </div>

                                    <div class="col-sm-9 mt-2 mb-sm-0">
                                        <div class="">
                                            <label for="name"
                                                class="text-md-end mb-2">{{ __('Nome completo*') }}</label>
                                            <input id="name" type="text"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                value="{{ old('name') }}" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mt-4">
                                            <label for="sexo" class="text-md-end mb-2">{{ __('Sexo*') }}</label>
                                            <select id="sexo" class="form-control @error('sexo') is-invalid @enderror"
                                                name="sexo">
                                                <option value="">Selecione</option>
                                                <option value="Masculino"
                                                    {{ old('sexo') == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                                                <option value="Feminino" {{ old('sexo') == 'Feminino' ? 'selected' : '' }}>
                                                    Feminino</option>
                                                <option value="Outro" {{ old('sexo') == 'Outro' ? 'selected' : '' }}>Outro
                                                </option>
                                            </select>

                                            @error('sexo')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mt-4">
                                            <label for="dataNascimento"
                                                class="text-md-end mb-2">{{ __('Data de nascimento*') }}</label>
                                            <input id="dataNascimento" type="date"
                                                class="form-control mydatepicker @error('dataNascimento') is-invalid @enderror"
                                                name="dataNascimento" value="{{ old('dataNascimento') }}">

                                            @error('dataNascimento')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <label for="nomeMae"
                                            class="text-md-end mb-2">{{ __('Nome da Mãe Completo*') }}</label>
                                        <input id="nomeMae" type="text"
                                            class="form-control @error('nomeMae') is-invalid @enderror" name="nomeMae"
                                            value="{{ old('nomeMae') }}">

                                        @error('nomeMae')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <label for="nomePai"
                                            class="text-md-end mb-2">{{ __('Nome do Pai Completo*') }}</label>
                                        <input id="nomePai" type="text"
                                            class="form-control @error('nomePai') is-invalid @enderror" name="nomePai"
                                            value="{{ old('nomePai') }}">

                                        @error('nomePai')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <label for="estadoCivil" class="text-md-end mb-2">{{ __('Estado civil*') }}</label>
                                        <select id="estadoCivil"
                                            class="form-control @error('estadoCivil') is-invalid @enderror"
                                            name="estadoCivil">
                                            <option value="">Selecione</option>
                                            <option value="Solteiro"
                                                {{ old('estadoCivil') == 'Solteiro' ? 'selected' : '' }}>Solteiro</option>
                                            <option value="Casado" {{ old('estadoCivil') == 'Casado' ? 'selected' : '' }}>
                                                Casado</option>
                                            <option value="Viúvo" {{ old('estadoCivil') == 'Viúvo' ? 'selected' : '' }}>
                                                Viúvo</option>
                                            <option value="União Estável"
                                                {{ old('estadoCivil') == 'União Estável' ? 'selected' : '' }}>União Estável
                                            </option>
                                            <option value="Separado Judicialmente"
                                                {{ old('estadoCivil') == 'Separado Judicialmente' ? 'selected' : '' }}>
                                                Separado Judicialmente</option>
                                            <option value="Divorciado"
                                                {{ old('estadoCivil') == 'Divorciado' ? 'selected' : '' }}>Divorciado
                                            </option>
                                            <option value="Outro" {{ old('estadoCivil') == 'Outro' ? 'selected' : '' }}>
                                                Outro</option>
                                        </select>

                                        @error('estadoCivil')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <label for="profissao" class="text-md-end mb-2">{{ __('Profissão*') }}</label>
                                        <input id="profissao" type="text"
                                            class="form-control @error('profissao') is-invalid @enderror" name="profissao"
                                            value="{{ old('profissao') }}">

                                        @error('profissao')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>

                                <h5 class="text-center text-gray-900 mb-4 text-primary">Documentação</h5>
                                <hr>

                                <div class="form-group row">

                                    <div class="col-sm-12 mt-2 mb-sm-0">
                                        <label for="tituloEleitor"
                                            class="text-md-end mb-2">{{ __('Título de eleitor*') }}</label>
                                        <input id="tituloEleitor" type="text"
                                            class="form-control @error('tituloEleitor') is-invalid @enderror"
                                            name="tituloEleitor" value="{{ old('tituloEleitor') }}">

                                        @error('tituloEleitor')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <label for="zonaEleitoral"
                                            class="text-md-end mb-2">{{ __('Zona eleitoral*') }}</label>
                                        <input id="zonaEleitoral" type="text"
                                            class="form-control @error('zonaEleitoral') is-invalid @enderror"
                                            name="zonaEleitoral" value="{{ old('zonaEleitoral') }}">

                                        @error('zonaEleitoral')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <label for="secaoEleitoral"
                                            class="text-md-end mb-2">{{ __('Seção eleitoral*') }}</label>
                                        <input id="secaoEleitoral" type="text"
                                            class="form-control @error('secaoEleitoral') is-invalid @enderror"
                                            name="secaoEleitoral" value="{{ old('secaoEleitoral') }}">

                                        @error('secaoEleitoral')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <label for="RG" class="text-md-end mb-2">{{ __('RG*') }}</label>
                                        <input id="RG" type="text"
                                            class="form-control @error('RG') is-invalid @enderror" name="RG"
                                            value="{{ old('RG') }}">

                                        @error('RG')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <label for="CPF" class="text-md-end mb-2">{{ __('CPF*') }}</label>
                                        <input id="CPF" type="text"
                                            class="form-control @error('CPF') is-invalid @enderror" name="CPF"
                                            value="{{ old('CPF') }}">

                                        @error('CPF')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <h5 class="text-center text-gray-900 mb-4 text-primary">Endereço</h5>
                                <hr>

                                <div class="form-group row">

                                    <div class="col-sm-6 mt-2 mb-sm-0">
                                        <label for="cep" class="text-md-end mb-2">{{ __('Cep*') }}</label>
                                        <input id="cep" type="text"
                                            class="form-control @error('cep') is-invalid @enderror" name="cep"
                                            value="{{ old('cep') }}">

                                        @error('cep')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-sm-6 mt-2 mb-sm-0">
                                        <label for="endereco" class="text-md-end mb-2">{{ __('Endereço*') }}</label>
                                        <input id="endereco" type="text"
                                            class="form-control @error('endereco') is-invalid @enderror" name="endereco"
                                            value="{{ old('endereco') }}">

                                        @error('endereco')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <label for="numero" class="text-md-end mb-2">{{ __('Número') }}</label>
                                        <input id="numero" type="text"
                                            class="form-control @error('numero') is-invalid @enderror" name="numero"
                                            value="{{ old('numero') }}">

                                        @error('numero')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <label for="bairro" class="text-md-end mb-2">{{ __('Bairro*') }}</label>
                                        <input id="bairro" type="text"
                                            class="form-control @error('bairro') is-invalid @enderror" name="bairro"
                                            value="{{ old('bairro') }}">

                                        @error('bairro')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <label for="id_regiao" class="text-md-end mb-2">{{ __('Região*') }}</label>
                                        <select id="id_regiao"
                                            class="form-control @error('id_regiao') is-invalid @enderror"
                                            name="id_regiao">
                                            <option value="">Selecione</option>
                                            @foreach ($regioes as $regiao)
                                                <option value="{{ $regiao->id }}"
                                                    {{ old('id_regiao') == $regiao->id ? 'selected' : '' }}>
                                                    {{ $regiao->nome }} </option>
                                            @endforeach
                                        </select>

                                        @error('id_regiao')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <label for="tempoResidencia"
                                            class="text-md-end mb-2">{{ __('Tempo que reside no município*') }}</label>
                                        <input id="tempoResidencia" type="text"
                                            class="form-control @error('tempoResidencia') is-invalid @enderror"
                                            name="tempoResidencia" value="{{ old('tempoResidencia') }}">

                                        @error('tempoResidencia')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>

                                <h5 class="text-center text-gray-900 mb-4 text-primary">Dados de acesso</h5>
                                <hr>

                                <div class="form-group row">

                                    <div class="col-sm-12 mt-2 mb-sm-0">
                                        <label for="email" class="text-md-end mb-2">{{ __('Email*') }}</label>
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <label for="password" class="text-md-end mb-2">{{ __('Senha*') }}</label>
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <label for="password-confirm"
                                            class="text-md-end mb-2">{{ __('Confirmar senha*') }}</label>
                                        <input id="password-confirm" class="form-control" type="password"
                                            name="password_confirmation">
                                    </div>

                                    <div class="col-sm-12 mt-4 mb-sm-0 text-center">
                                        <input type="checkbox" class="form-check-input @error('terms') is-invalid @enderror" id="terms" name="terms">
                                        <label class="form-check-label" for="terms">
                                            Eu concordo com os <a href="#">Termos de Uso</a> e a <a href="#">Política de Privacidade</a>.
                                        </label>

                                        @error('terms')
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
        $(document).ready(function() {
            // Adiciona a máscara para o título de eleitor
            $("#tituloEleitor").mask("9999.9999.9999");

            // Adiciona a máscara para o CPF
            $("#CPF").mask("999.999.999-99");

            // Adiciona a máscara para o RG
            $("#RG").mask("99.999.999-9");

            // Adiciona a máscara para o CEP
            $("#cep").mask("99999-999");
        });

        const inputFile = document.querySelector("#image");
        const pictureImage = document.querySelector(".picture__image");
        const pictureImageTxt = "Carregar Foto";
        pictureImage.innerHTML = pictureImageTxt;

        inputFile.addEventListener("change", function(e) {
            const inputTarget = e.target;
            const file = inputTarget.files[0];

            if (file) {
                const reader = new FileReader();

                reader.addEventListener("load", function(e) {
                    const readerTarget = e.target;

                    const img = document.createElement("img");
                    img.src = readerTarget.result;
                    img.classList.add("picture__img");

                    pictureImage.innerHTML = "";
                    pictureImage.appendChild(img);
                });

                reader.readAsDataURL(file);
            } else {
                pictureImage.innerHTML = pictureImageTxt;
            }
        });
    </script>
@endsection
@endsection
