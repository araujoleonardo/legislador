@extends('layouts.dash')

@section('title', 'Perfil')

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

        @include('includes.messages')

        <div class="row">
            <div class="col-md-3">

                <div class="card shadow-sm">
                    <div class="card-body">

                        <div class="card-header">
                            <h5 class="card-title mb-0">Detalhes do perfil</h5>
                        </div>
                        <div class="card-body text-center">

                            @if (Auth::user()->image)
                                <img src="{{ asset('img/users/' . Auth::user()->image) }}" alt="user" class="img-fluid rounded-circle mb-2">
                            @else
                                <img src="{{ asset('img/users/avatar.png') }}" alt="user" class="img-fluid rounded-circle mb-2">
                            @endif
                            <h5 class="card-title mb-0">{{ Auth::user()->name }}</h5>
                            <div class="text-muted mb-2">{{ Auth::user()->perfil }}</div>

                        </div>

                        <hr>

                        <div class="card-body text-center">
                            <h5 class="h6 card-title">Sobre</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-1"><span data-feather="home" class="feather-sm me-1"></span> E-mail: <strong> {{ Auth::user()->email }} </strong> </li>

                                <li class="mb-1"><span data-feather="briefcase" class="feather-sm me-1"></span> CPF: <strong> {{ Auth::user()->CPF }} </strong> </li>

                                <li class="mb-1"><span data-feather="map-pin" class="feather-sm me-1"></span> Título de eleitor: <strong> {{ Auth::user()->tituloEleitor }} </strong> </li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>

            {{-- =========================Posts========================= --}}

            <div class="col-md-9">
                <div class="card shadow-sm">
                    <div class="card-body">

                        <!-- Tabs -->
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#dados" role="tab">
                                        <span class="hidden-sm-up"></span> <span class="hidden-xs-down"><i class="mdi mdi-account-edit font-20"></i> Dados</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#endereco" role="tab">
                                        <span class="hidden-sm-up"></span> <span class="hidden-xs-down"><i class="mdi mdi-account-location font-20"></i> Endereço</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#acesso" role="tab">
                                        <span class="hidden-sm-up"></span> <span class="hidden-xs-down"><i class="mdi mdi-account-key font-20"></i> Acesso</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#perfil" role="tab">
                                        <span class="hidden-sm-up"></span> <span class="hidden-xs-down"> <i class="mdi mdi-camera font-20"></i> Imagem</span>
                                    </a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content tabcontent-border">
                                <div class="tab-pane active" id="dados" role="tabpanel">
                                    <div class="p-20">

                                        <form id="regForm" class="user" method="POST" action="{{ url( '/update/dados/'. Auth::user()->id ) }}"
                                              enctype="multipart/form-data">
                                            @csrf

                                            @method('PUT')

                                            <div class="form-group row">

                                                <div class="col-sm-6 mt-4 mb-sm-0">
                                                    <label for="name"
                                                           class="text-md-end mb-2">{{ __('Nome completo*') }}</label>
                                                    <input id="name" type="text"
                                                           class="form-control @error('name') is-invalid @enderror" name="name"
                                                           value="{{ old('name', Auth::user()->name) }}">

                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-sm-6 mt-4 mb-sm-0">
                                                    <label for="sexo" class="text-md-end mb-2">{{ __('Sexo*') }}</label>
                                                    <select id="sexo" class="form-control @error('sexo') is-invalid @enderror"
                                                            name="sexo">
                                                        <option value="">Selecione</option>
                                                        <option value="Masculino" {{ old('sexo', Auth::user()->sexo) == 'Masculino' ? 'selected' : '' }}>
                                                            Masculino
                                                        </option>
                                                        <option value="Feminino" {{ old('sexo', Auth::user()->sexo) == 'Feminino' ? 'selected' : '' }}>
                                                            Feminino
                                                        </option>
                                                        <option value="Outro" {{ old('sexo', Auth::user()->sexo) == 'Outro' ? 'selected' : '' }}>
                                                            Outro
                                                        </option>
                                                    </select>

                                                    @error('sexo')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-sm-6 mt-4 mb-sm-0">
                                                    <label for="dataNascimento" class="text-md-end mb-2">{{ __('Data de nascimento*') }}</label>
                                                    <input id="dataNascimento" type="date" class="form-control mydatepicker @error('dataNascimento') is-invalid @enderror" name="dataNascimento" value="{{ old('dataNascimento', Auth::user()->dataNascimento) }}">

                                                    @error('dataNascimento')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-sm-6 mt-4 mb-sm-0">
                                                    <label for="nomeMae" class="text-md-end mb-2">{{ __('Nome da Mãe Completo*') }}</label>
                                                    <input id="nomeMae" type="text" class="form-control @error('nomeMae') is-invalid @enderror" name="nomeMae" value="{{ old('nomeMae', Auth::user()->nomeMae) }}">

                                                    @error('nomeMae')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-sm-6 mt-4 mb-sm-0">
                                                    <label for="nomePai" class="text-md-end mb-2">{{ __('Nome do Pai Completo*') }}</label>
                                                    <input id="nomePai" type="text" class="form-control @error('nomePai') is-invalid @enderror" name="nomePai" value="{{ old('nomePai', Auth::user()->nomePai) }}">

                                                    @error('nomePai')
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                    @enderror
                                                </div>

                                                <div class="col-sm-6 mt-4 mb-sm-0">
                                                    <label for="estadoCivil" class="text-md-end mb-2">{{ __('Estado civil*') }}</label>
                                                    <select id="estadoCivil" class="form-control @error('estadoCivil') is-invalid @enderror" name="estadoCivil">
                                                        <option value="">Selecione</option>
                                                        <option value="Solteiro" {{ old('estadoCivil', Auth::user()->estadoCivil) == 'Solteiro' ? 'selected' : '' }}>Solteiro</option>
                                                        <option value="Casado" {{ old('estadoCivil', Auth::user()->estadoCivil) == 'Casado' ? 'selected' : '' }}>Casado</option>
                                                        <option value="Viúvo" {{ old('estadoCivil', Auth::user()->estadoCivil) == 'Viúvo' ? 'selected' : '' }}>Viúvo</option>
                                                        <option value="União Estável" {{ old('estadoCivil', Auth::user()->estadoCivil) == 'União Estável' ? 'selected' : '' }}>União Estável</option>
                                                        <option value="Separado Judicialmente"{{ old('estadoCivil', Auth::user()->estadoCivil) == 'Separado Judicialmente' ? 'selected' : '' }}>Separado Judicialmente</option>
                                                        <option value="Divorciado"{{ old('estadoCivil', Auth::user()->estadoCivil) == 'Divorciado' ? 'selected' : '' }}>Divorciado</option>
                                                        <option value="Outro" {{ old('estadoCivil', Auth::user()->estadoCivil) == 'Outro' ? 'selected' : '' }}>Outro</option>
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
                                                           value="{{ old('profissao', Auth::user()->profissao) }}">

                                                    @error('profissao')
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
                                                           name="zonaEleitoral" value="{{ old('zonaEleitoral', Auth::user()->zonaEleitoral) }}">

                                                    @error('zonaEleitoral')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-sm-6 mt-4 mb-sm-0">
                                                    <label for="secaoEleitoral" class="text-md-end mb-2">{{ __('Seção eleitoral*') }}</label>
                                                    <input id="secaoEleitoral" type="text" class="form-control @error('secaoEleitoral') is-invalid @enderror" name="secaoEleitoral" value="{{ old('secaoEleitoral', Auth::user()->secaoEleitoral ) }}">

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
                                                           value="{{ old('RG', Auth::user()->RG) }}">

                                                    @error('RG')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                            </div>

                                            <div class="mt-4 mb-sm-0 text-right">
                                                <button type="submit" id="submit" class="btn btn-primary btn-user col-sm-2">
                                                    Alterar
                                                </button>
                                            </div>

                                        </form>

                                    </div>
                                </div>

                                <div class="tab-pane p-20" id="endereco" role="tabpanel">
                                    <div class="p-20">

                                        <form id="regForm" class="user" method="POST" action="{{ url( '/update/endereco/'. Auth::user()->id ) }}"
                                              enctype="multipart/form-data">
                                            @csrf

                                            @method('PUT')

                                            <div class="form-group row">

                                                <div class="col-sm-6 mt-2 mb-sm-0">
                                                    <label for="cep" class="text-md-end mb-2">{{ __('Cep*') }}</label>
                                                    <input id="cep" type="text"
                                                           class="form-control @error('cep') is-invalid @enderror" name="cep"
                                                           value="{{ old('cep', Auth::user()->cep) }}">

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
                                                           value="{{ old('endereco', Auth::user()->endereco ) }}">

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
                                                           value="{{ old('numero', Auth::user()->numero) }}">

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
                                                           value="{{ old('bairro', Auth::user()->bairro) }}">

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
                                                                {{ old('id_regiao', Auth::user()->id_regiao) == $regiao->id ? 'selected' : '' }}>
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
                                                           name="tempoResidencia" value="{{ old('tempoResidencia', Auth::user()->tempoResidencia) }}">

                                                    @error('tempoResidencia')
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                    @enderror
                                                </div>

                                            </div>

                                            <div class="mt-4 mb-sm-0 text-right">
                                                <button type="submit" id="submit" class="btn btn-primary btn-user col-sm-2">
                                                    Alterar
                                                </button>
                                            </div>

                                        </form>

                                    </div>
                                </div>


                                <div class="tab-pane  p-20" id="acesso" role="tabpanel">
                                    <div class="p-20">

                                        <form id="regForm" class="user" method="POST" action="{{ url( '/update/acesso/'. Auth::user()->id ) }}" enctype="multipart/form-data">
                                            @csrf

                                            @method('PUT')

                                            <div class="form-group row">

                                                <div class="col-sm-12 mt-2 mb-sm-0">
                                                    <label for="email" class="text-md-end mb-2">{{ __('Email*') }}</label>
                                                    <input id="email" type="email"
                                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                                           value="{{ old('email', Auth::user()->email) }}">

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

                                            </div>

                                            <div class="mt-4 mb-sm-0 text-right">
                                                <button type="submit" id="submit" class="btn btn-primary btn-user col-sm-2">
                                                    Alterar
                                                </button>
                                            </div>

                                        </form>

                                    </div>
                                </div>

                                <div class="tab-pane p-20" id="perfil" role="tabpanel">
                                    <div class="p-20">

                                        <form id="regForm" class="user" method="POST" action="{{ url( '/update/perfil/'. Auth::user()->id ) }}" enctype="multipart/form-data">
                                            @csrf

                                            @method('PUT')

                                            @error('image')
                                            <div class="alert alert-danger">
                                                <span>{{ $message }}</span>
                                            </div>
                                            @enderror

                                            <div class="form-group row text-center">

                                                <div class="col-sm-12 mt-4 mb-sm-0">
                                                    <label class="picture" for="image" tabIndex="0">
                                                        <span class="picture__image"></span>
                                                    </label>

                                                    <input type="file" name="image" id="image">
                                                </div>
                                            </div>

                                            <div class="mt-4 mb-sm-0 text-right">
                                                <button type="submit" id="submit" class="btn btn-primary btn-user col-sm-2">
                                                    Alterar
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
        </div>
    </div>

@endsection

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
