<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Cadastro</title>

    {{-- Css aplicação --}}
    <link rel="stylesheet" href="css/form.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <!-- Links externos -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

</head>
<body class="w3-theme-l5">
        <!-- Navbar -->
    <div class="w3-top">
        <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()">
                <i class="fa fa-bars"></i>
            </a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large w3-theme-d4">
                <i class="fa fa-home w3-margin-right"></i>
                Logo
            </a>
            <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="News">
                <i class="fa fa-globe"></i>
            </a>
            <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Account Settings">
                <i class="fa fa-user"></i>
            </a>
            <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages">
                <i class="fa fa-envelope"></i>
            </a>
            <div class="w3-dropdown-hover w3-hide-small">
                <button class="w3-button w3-padding-large" title="Notifications">
                    <i class="fa fa-bell"></i>
                    <span class="w3-badge w3-right w3-small w3-green">3</span>
                </button>
                <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
                    <a href="#" class="w3-bar-item w3-button">One new friend request</a>
                    <a href="#" class="w3-bar-item w3-button">John Doe posted on your wall</a>
                    <a href="#" class="w3-bar-item w3-button">Jane likes your post</a>
                </div>
            </div>
            <a href="{{ route('login') }}" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account">
                <img src="/img/avatar.png" class="w3-circle" style="height:23px;width:23px" alt="Avatar">
            </a>
        </div>
    </div>
    {{-- ========================Cadastro========================== --}}
    <div class="content">
        <form id="regForm" method="POST" action="{{ route('register') }}">
            @csrf
        
            <div class="tab">
                <h3>Dados pessoais</h3>

                <label for="name" class="text-md-end mb-2">{{ __('Nome completo:') }}</label>
                <div class="mb-2">
                    <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <label for="sexo" class="text-md-end mb-2">{{ __('Sexo:') }}</label>
                <div class="mb-2">
                    <input id="sexo" type="text" class="@error('sexo') is-invalid @enderror" name="sexo" value="{{ old('sexo') }}" required autocomplete="sexo">

                    @error('sexo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <label for="dataNascimento" class="text-md-end mb-2">{{ __('Data de nascimento:') }}</label>
                <div class="mb-2">
                    <input id="dataNascimento" type="date" class="@error('dataNascimento') is-invalid @enderror" name="dataNascimento" value="{{ old('dataNascimento') }}" required autocomplete="dataNascimento">

                    @error('dataNascimento')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <label for="nomeMae" class="text-md-end mb-2">{{ __('Nome da Mãe Completo:') }}</label>
                <div class="mb-2">
                    <input id="nomeMae" type="text" class="@error('nomeMae') is-invalid @enderror" name="nomeMae" value="{{ old('nomeMae') }}" required autocomplete="nomeMae">

                    @error('nomeMae')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <label for="nomePai" class="text-md-end mb-2">{{ __('Nome do Pai Completo:') }}</label>
                <div class="mb-2">
                    <input id="nomePai" type="text" class="@error('nomePai') is-invalid @enderror" name="nomePai" value="{{ old('nomePai') }}" required autocomplete="nomePai">

                    @error('nomePai')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <label for="estadoCivil" class="text-md-end mb-2">{{ __('Estado civil:') }}</label>
                <div class="mb-2">
                    <input id="estadoCivil" type="text" class="@error('estadoCivil') is-invalid @enderror" name="estadoCivil" value="{{ old('estadoCivil') }}" required autocomplete="estadoCivil">

                    @error('estadoCivil')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <label for="profissao" class="text-md-end mb-2">{{ __('Profissão:') }}</label>
                <div class="mb-2">
                    <input id="profissao" type="text" class="@error('profissao') is-invalid @enderror" name="profissao" value="{{ old('profissao') }}" required autocomplete="profissao">

                    @error('profissao')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
        
            </div>

            <div class="tab">
                <h3>Documentação</h3>

                <label for="tituloEleitor" class="text-md-end mb-2">{{ __('Título de eleitor:') }}</label>

                <div class="mb-2">
                    <input id="tituloEleitor" type="text" class="@error('tituloEleitor') is-invalid @enderror" name="tituloEleitor" value="{{ old('tituloEleitor') }}" required autocomplete="tituloEleitor">

                    @error('tituloEleitor')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <label for="zonaEleitoral" class="text-md-end mb-2">{{ __('Zona eleitoral:') }}</label>

                <div class="mb-2">
                    <input id="zonaEleitoral" type="text" class="@error('zonaEleitoral') is-invalid @enderror" name="zonaEleitoral" value="{{ old('zonaEleitoral') }}" required autocomplete="zonaEleitoral">

                    @error('zonaEleitoral')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <label for="secaoEleitoral" class="text-md-end mb-2">{{ __('Seção eleitoral:') }}</label>

                <div class="mb-2">
                    <input id="secaoEleitoral" type="text" class="@error('secaoEleitoral') is-invalid @enderror" name="secaoEleitoral" value="{{ old('secaoEleitoral') }}" required autocomplete="secaoEleitoral">

                    @error('secaoEleitoral')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <label for="RG" class="text-md-end mb-2">{{ __('RG:') }}</label>

                <div class="mb-2">
                    <input id="RG" type="text" class="@error('RG') is-invalid @enderror" name="RG" value="{{ old('RG') }}" required autocomplete="RG">

                    @error('RG')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <label for="CPF" class="text-md-end mb-2">{{ __('CPF:') }}</label>

                <div class="mb-2">
                    <input id="CPF" type="text" class="@error('CPF') is-invalid @enderror" name="CPF" value="{{ old('CPF') }}" required autocomplete="CPF">

                    @error('CPF')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="tab">
                <h3>Endereço</h3>
                
                <label for="cep" class="text-md-end mb-2">{{ __('Cep:') }}</label>

                <div class="mb-2">
                    <input id="cep" type="text" class="@error('cep') is-invalid @enderror" name="cep" value="{{ old('cep') }}" required autocomplete="cep">

                    @error('cep')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <label for="endereco" class="text-md-end mb-2">{{ __('Endereço:') }}</label>

                <div class="mb-2">
                    <input id="endereco" type="text" class="@error('endereco') is-invalid @enderror" name="endereco" value="{{ old('endereco') }}" required autocomplete="endereco">

                    @error('endereco')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <label for="numero" class="text-md-end mb-2">{{ __('Número:') }}</label>

                <div class="mb-2">
                    <input id="numero" type="text" class="@error('numero') is-invalid @enderror" name="numero" value="{{ old('numero') }}" required autocomplete="numero">

                    @error('numero')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <label for="bairro" class="text-md-end mb-2">{{ __('Bairro:') }}</label>

                <div class="mb-2">
                    <input id="bairro" type="text" class="@error('bairro') is-invalid @enderror" name="bairro" value="{{ old('bairro') }}" required autocomplete="bairro">

                    @error('bairro')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <label for="regiao" class="text-md-end mb-2">{{ __('Selecione a região:') }}</label>

                <div class="mb-2">
                    <input id="regiao" type="text" class="@error('regiao') is-invalid @enderror" name="regiao" value="{{ old('regiao') }}" required autocomplete="regiao">

                    @error('regiao')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <label for="tempoResidencia" class="text-md-end mb-2">{{ __('Tempo que reside no município:') }}</label>

                <div class="mb-2">
                    <input id="tempoResidencia" type="text" class="@error('tempoResidencia') is-invalid @enderror" name="tempoResidencia" value="{{ old('tempoResidencia') }}" required autocomplete="tempoResidencia">

                    @error('tempoResidencia')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
            </div>

            <div class="tab">
                <h3>Dados de acesso</h3>                
                
                <label for="email" class="text-md-end mb-2">{{ __('Email') }}</label>

                <div class="mb-2">
                    <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
          
                <label for="password" class="text-md-end mb-2">{{ __('Senha') }}</label>

                <div class="mb-2">
                    <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
           
                <label for="password-confirm" class="text-md-end mb-2">{{ __('Confirmar senha') }}</label>

                <div class="mb-2">
                    <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
                </div>

            </div>

            <div style="overflow:auto; margin-top: 50px">
                <div style="float:right;">
                    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Voltar</button>
                    <button type="button" id="nextBtn" onclick="nextPrev(1)">Próximo</button>
                    <button type="submit" id="btnSubmit">Salvar</button>
                </div>
            </div>            
            
            <div style="text-align:center;margin-top:40px;">
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="/js/form.js"></script>
</body>
</html>
