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
                                        <input id="name" type="text" class="form-control did-floating-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        <label for="name" class="did-floating-label text-md-end mb-2">{{ __('Nome completo') }}</label>
                    
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <select id="sexo" class="form-control did-floating-input @error('sexo') is-invalid @enderror" name="sexo" required autocomplete="sexo">
                                            <option value="">Selecione</option>
                                            <option value="Masculino" {{ old('sexo') == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                                            <option value="Feminino" {{ old('sexo') == 'Feminino' ? 'selected' : '' }}>Feminino</option>
                                            <option value="Outro" {{ old('sexo') == 'Outro' ? 'selected' : '' }}>Outro</option>
                                        </select>
                                        <label for="sexo" class="did-floating-label text-md-end mb-2">{{ __('Sexo') }}</label>

                                        @error('sexo')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>                                    
                                    
                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <input id="dataNascimento" type="date" class="did-floating-input form-control @error('dataNascimento') is-invalid @enderror" name="dataNascimento" value="{{ old('dataNascimento') }}" required autocomplete="dataNascimento">
                                        <label for="dataNascimento" class="did-floating-label text-md-end mb-2">{{ __('Data de nascimento') }}</label>

                                        @error('dataNascimento')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>                        
                                    
                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <input id="nomeMae" type="text" class="did-floating-input form-control @error('nomeMae') is-invalid @enderror" name="nomeMae" value="{{ old('nomeMae') }}" required autocomplete="nomeMae">
                                        <label for="nomeMae" class="did-floating-label text-md-end mb-2">{{ __('Nome da Mãe Completo') }}</label>

                                        @error('nomeMae')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                    
                                    
                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <input id="nomePai" type="text" class="did-floating-input form-control @error('nomePai') is-invalid @enderror" name="nomePai" value="{{ old('nomePai') }}" required autocomplete="nomePai">
                                        <label for="nomePai" class="did-floating-label text-md-end mb-2">{{ __('Nome do Pai Completo') }}</label>

                                        @error('nomePai')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                    
                                    
                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <select id="estadoCivil" class="form-control did-floating-input @error('estadoCivil') is-invalid @enderror" name="estadoCivil" required autocomplete="estadoCivil">
                                            <option value="">Selecione</option>
                                            <option value="Solteiro" {{ old('estadoCivil') == 'Solteiro' ? 'selected' : '' }}>Solteiro</option>
                                            <option value="Casado" {{ old('estadoCivil') == 'Casado' ? 'selected' : '' }}>Casado</option>
                                            <option value="Viúvo" {{ old('estadoCivil') == 'Viúvo' ? 'selected' : '' }}>Viúvo</option>
                                            <option value="União Estável" {{ old('estadoCivil') == 'União Estável' ? 'selected' : '' }}>União Estável</option>
                                            <option value="Separado Judicialmente" {{ old('estadoCivil') == 'Separado Judicialmente' ? 'selected' : '' }}>Separado Judicialmente</option>
                                            <option value="Divorciado" {{ old('estadoCivil') == 'Divorciado' ? 'selected' : '' }}>Divorciado</option>
                                            <option value="Outro" {{ old('estadoCivil') == 'Outro' ? 'selected' : '' }}>Outro</option>
                                        </select>

                                        <label for="estadoCivil" class="did-floating-label text-md-end mb-2">{{ __('Estado civil') }}</label>

                                        @error('estadoCivil')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                    
                                    
                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <input id="profissao" type="text" class="did-floating-input form-control @error('profissao') is-invalid @enderror" name="profissao" value="{{ old('profissao') }}" required autocomplete="profissao">
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
                                        <input id="tituloEleitor" type="text" class="did-floating-input form-control @error('tituloEleitor') is-invalid @enderror" name="tituloEleitor" value="{{ old('tituloEleitor') }}" required autocomplete="tituloEleitor">
                                        <label for="tituloEleitor" class="did-floating-label text-md-end mb-2">{{ __('Título de eleitor') }}</label>

                                        @error('tituloEleitor')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-sm-6 mt-2 mb-sm-0">
                                        <input id="zonaEleitoral" type="text" class="did-floating-input form-control @error('zonaEleitoral') is-invalid @enderror" name="zonaEleitoral" value="{{ old('zonaEleitoral') }}" required autocomplete="zonaEleitoral">
                                        <label for="zonaEleitoral" class="did-floating-label text-md-end mb-2">{{ __('Zona eleitoral') }}</label>

                                        @error('zonaEleitoral')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <input id="secaoEleitoral" type="text" class="did-floating-input form-control @error('secaoEleitoral') is-invalid @enderror" name="secaoEleitoral" value="{{ old('secaoEleitoral') }}" required autocomplete="secaoEleitoral">
                                        <label for="secaoEleitoral" class="did-floating-label text-md-end mb-2">{{ __('Seção eleitoral') }}</label>

                                        @error('secaoEleitoral')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <input id="RG" type="text" class="did-floating-input form-control @error('RG') is-invalid @enderror" name="RG" value="{{ old('RG') }}" required autocomplete="RG">
                                        <label for="RG" class="did-floating-label text-md-end mb-2">{{ __('RG') }}</label>

                                        @error('RG')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                    
                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <input id="CPF" type="text" class="did-floating-input form-control @error('CPF') is-invalid @enderror" name="CPF" value="{{ old('CPF') }}" required autocomplete="CPF">
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
                                        <input id="cep" type="text" class="did-floating-input form-control @error('cep') is-invalid @enderror" name="cep" value="{{ old('cep') }}" required autocomplete="cep">
                                        <label for="cep" class="did-floating-label text-md-end mb-2">{{ __('Cep') }}</label>
                    
                                        @error('cep')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
        
                                    <div class="col-sm-6 mt-2 mb-sm-0">
                                        <input id="endereco" type="text" class="did-floating-input form-control @error('endereco') is-invalid @enderror" name="endereco" value="{{ old('endereco') }}" required autocomplete="endereco">
                                        <label for="endereco" class="did-floating-label text-md-end mb-2">{{ __('Endereço') }}</label>
                    
                                        @error('endereco')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                    
                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <input id="numero" type="text" class="did-floating-input form-control @error('numero') is-invalid @enderror" name="numero" value="{{ old('numero') }}" required autocomplete="numero">
                                        <label for="numero" class="did-floating-label text-md-end mb-2">{{ __('Número') }}</label>
                    
                                        @error('numero')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                    
                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <input id="bairro" type="text" class="did-floating-input form-control @error('bairro') is-invalid @enderror" name="bairro" value="{{ old('bairro') }}" required autocomplete="bairro">
                                        <label for="bairro" class="did-floating-label text-md-end mb-2">{{ __('Bairro') }}</label>
                    
                                        @error('bairro')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                    
                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <select id="regiao" class="form-control did-floating-input @error('regiao') is-invalid @enderror" name="regiao" required autocomplete="regiao">
                                            <option value="">Selecione</option>
                                            <option value="Solteiro" {{ old('estadoCivil') == 'Solteiro' ? 'selected' : '' }}>Solteiro</option>

                                            <option value="Urbano - Setor Novo Horizonte/Monte Sinai" {{ old('regiao') == 'Urbano - Setor Novo Horizonte/Monte Sinai' ? 'selected' : '' }}>
                                                Urbano - Setor Novo Horizonte/Monte Sinai
                                            </option>
                                            <option value="Urbano - Setor Planalto / Cidade Alta" {{ old('regiao') == 'Urbano - Setor Planalto / Cidade Alta' ? 'selected' : '' }}>
                                                Urbano - Setor Planalto / Cidade Alta
                                            </option>
                                            <option value="Urbano - Setor Paraisinho / Vila Paranã" {{ old('regiao') == 'Urbano - Setor Paraisinho / Vila Paranã' ? 'selected' : '' }}>
                                                Urbano - Setor Paraisinho / Vila Paranã
                                            </option>
                                            <option value="Urbano - Setor El Dorado / Vila Bandeira" {{ old('regiao') == 'Urbano - Setor El Dorado / Vila Bandeira' ? 'selected' : '' }}>
                                                Urbano - Setor El Dorado / Vila Bandeira
                                            </option>
                                            <option value="Urbano - Setor Central / Paraíso Velho" {{ old('regiao') == 'Urbano - Setor Central / Paraíso Velho' ? 'selected' : '' }}>
                                                Urbano - Setor Central / Paraíso Velho
                                            </option>
                                            <option value="Urbano - Setor Estância Paraíso / Vale Azul" {{ old('regiao') == 'Urbano - Setor Estância Paraíso / Vale Azul' ? 'selected' : '' }}>
                                                Urbano - Setor Estância Paraíso / Vale Azul
                                            </option>
                                            <option value="Rural - Vale Verde" {{ old('regiao') == 'Rural - Vale Verde' ? 'selected' : '' }}>
                                                Rural - Vale Verde
                                            </option>
                                            <option value="Rural - Piçarrão" {{ old('regiao') == 'Rural - Piçarrão' ? 'selected' : '' }}>
                                                Rural - Piçarrão
                                            </option>
                                            <option value="Rural - Assentamento Sílvio Rodrigues / Cidade da Fraternidade / Fazenda Chiquinha / arredores" {{ old('regiao') == 'Rural - Assentamento Sílvio Rodrigues / Cidade da Fraternidade / Fazenda Chiquinha / arredores' ? 'selected' : '' }}>
                                                Rural - Assentamento Sílvio Rodrigues / Cidade da Fraternidade / Fazenda Chiquinha / arredores
                                            </option>
                                            <option value="Rural - Assentamento ESUSA / Acampamento Dorcelina Folador / arredores" {{ old('regiao') == 'Rural - Assentamento ESUSA / Acampamento Dorcelina Folador / arredores' ? 'selected' : '' }}>
                                                Rural - Assentamento ESUSA / Acampamento Dorcelina Folador / arredores
                                            </option>
                                            <option value="Rural - Moinho e arredores" {{ old('regiao') == 'Rural - Moinho e arredores' ? 'selected' : '' }}>
                                                Rural - Moinho e arredores
                                            </option>
                                            <option value="Rural - São Jorge" {{ old('regiao') == 'Rural - São Jorge' ? 'selected' : '' }}>
                                                Rural - São Jorge
                                            </option>
                                            <option value="Rural - Zona Rural nos arredores de São Jorge" {{ old('regiao') == 'Rural - Zona Rural nos arredores de São Jorge' ? 'selected' : '' }}>
                                                Rural - Zona Rural nos arredores de São Jorge
                                            </option>
                                            <option value="Rural - Região Norte (Zona Rural sentido Teresina)" {{ old('regiao') == 'Rural - Região Norte (Zona Rural sentido Teresina)' ? 'selected' : '' }}>
                                                Rural - Região Norte (Zona Rural sentido Teresina)
                                            </option>
                                            <option value="Rural - São Bento /Morro da Baleia / arredores" {{ old('regiao') == 'Rural - São Bento /Morro da Baleia / arredores' ? 'selected' : '' }}>
                                                Rural - São Bento /Morro da Baleia / arredores
                                            </option>
                                            <option value="Rural - Morrão / Loquinhas / arredores" {{ old('regiao') == 'Rural - Morrão / Loquinhas / arredores' ? 'selected' : '' }}>
                                                Rural - Morrão / Loquinhas / arredores
                                            </option>
                                            <option value="Rural - Outras áreas rurais da região sul do Município (sentido São João da Aliança)" {{ old('Rural - Outras áreas rurais da região sul do Município "(sentido São João da Aliança)"') == 'Solteiro' ? 'selected' : '' }}>
                                                Rural - Outras áreas rurais da região sul do Município (sentido São João da Aliança)
                                            </option>
                                            <option value="Rural - Sertão e demais áreas da Zona Rural na Região Leste do Município" {{ old('regiao') == 'Rural - Sertão e demais áreas da Zona Rural na Região Leste do Município' ? 'selected' : '' }}>
                                                Rural - Sertão e demais áreas da Zona Rural na Região Leste do Município
                                            </option>
                                        </select>
                                        <label for="regiao" class="did-floating-label text-md-end mb-2">{{ __('Selecione a região') }}</label>
                    
                                        @error('regiao')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                    
                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <input id="tempoResidencia" type="text" class="did-floating-input form-control @error('tempoResidencia') is-invalid @enderror" name="tempoResidencia" value="{{ old('tempoResidencia') }}" required autocomplete="tempoResidencia">
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
                                        <input id="email" type="email" class="did-floating-input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                        <label for="email" class="did-floating-label text-md-end mb-2">{{ __('Email') }}</label>
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                
                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <input id="password" type="password" class="did-floating-input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                        <label for="password" class="did-floating-label text-md-end mb-2">{{ __('Senha') }}</label>
        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>                                
                    
                                    <div class="col-sm-6 mt-4 mb-sm-0">
                                        <input id="password-confirm" class="did-floating-input form-control" type="password" name="password_confirmation" required autocomplete="new-password">
                                        <label for="password-confirm" class="did-floating-label text-md-end mb-2">{{ __('Confirmar senha') }}</label>
                                    </div>
                    
                                </div>

                                <div class="mt-4 mb-sm-0 text-right">
                                    <button type="submit" id="btnSubmit" class="btn btn-primary btn-user col-sm-3">
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

@endsection