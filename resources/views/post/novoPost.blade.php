@extends('layouts.main')

@section('title', 'Novo Post')

@section('css')

    <style>
        .collapsible-link::before {
            content: '';
            width: 14px;
            height: 2px;
            background: #333;
            position: absolute;
            top: calc(50% - 1px);
            right: 1rem;
            display: block;
            transition: all 0.3s;
        }

        /* Vertical line */
        .collapsible-link::after {
            content: '';
            width: 2px;
            height: 14px;
            background: #333;
            position: absolute;
            top: calc(50% - 7px);
            right: calc(1rem + 6px);
            display: block;
            transition: all 0.3s;
        }

        .collapsible-link[aria-expanded='true']::after {
            transform: rotate(90deg) translateX(-1px);
        }

        .collapsible-link[aria-expanded='true']::before {
            transform: rotate(180deg);
        }
    </style>

@endsection

@section('content')

    <div class="row">
        <div class="col-md-2">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h3>Fóruns</h3>
                </div>
                <!-- Accordion -->
                <div id="accordionExample" class="accordion shadow">

                    <!-- Accordion item 1 -->
                    <div class="card">
                        <div id="headingOne" class="card-header bg-white shadow-sm border-0">
                            <h6 class="mb-0 font-weight-bold">
                                <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false"
                                    aria-controls="collapseOne"
                                    class="d-block position-relative text-dark text-uppercase collapsible-link py-2">
                                    Fórum popular
                                </a>
                            </h6>
                        </div>
                        <div id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionExample" class="collapse">
                            <div class="card-body p-5">
                                <p class="font-weight-light m-0">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                    squid.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Accordion item 2 -->
                    <div class="card">
                        <div id="headingTwo" class="card-header bg-white shadow-sm border-0">
                            <h6 class="mb-0 font-weight-bold">
                                <a href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo"
                                    class="d-block position-relative collapsed text-dark text-uppercase collapsible-link py-2">
                                    Abaixo Assinado
                                </a>
                            </h6>
                        </div>
                        <div id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionExample" class="collapse">
                            <div class="card-body p-5">
                                <p class="font-weight-light m-0">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                    squid.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Intereses</h5>
                    <p>
                        <span class="badge badge-primary">News</span>
                        <span class="badge badge-primary">W3Schools</span>
                        <span class="badge badge-success">Labels</span>
                        <span class="badge badge-info">Football</span>
                        <span class="badge badge-warning">Gaming</span>
                        <span class="badge badge-danger">Friends</span>
                    </p>
                </div>
            </div>

            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <form id="regForm" class="user" method="POST" action="{{ route('post-store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="">
                            <label for="title" class="did-floating-label text-md-end mb-2">{{ __('Titulo do post:') }}</label>
                            <input id="title" type="text" class="form-control did-floating-input @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" autocomplete="title" autofocus>
        
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <br>

                        <div class="">
                            <label for="content" class="did-floating-label text-md-end mb-2">{{ __('Conteúdo:') }}</label>
                            <textarea id="content" class="form-control did-floating-input @error('content') is-invalid @enderror" name="content" value="{{ old('content') }}" rows="5"></textarea>
        
                            @error('content')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror                            
                        </div>

                        <br>
                        
                        <div class="row mt-3">
                            <div class="col-sm-6">
                                <label for="video" class="did-floating-label text-md-end mb-2">{{ __('Url do Youtube:') }}</label>
                                <input id="video" type="text" class="form-control did-floating-input @error('video') is-invalid @enderror" name="video" value="{{ old('video') }}" autocomplete="video">
            
                                @error('video')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                            
                            </div>

                            <div class="col-sm-6">
                                <label for="image" class="did-floating-label text-md-end mb-2">{{ __('Imagem:') }}</label>
                                <div class="custom-file mb-3">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label" for="customFile">Clique para selecionar</label>
                                </div>
                            </div>
                        </div>

                        <br>

                        <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Postar</button>
                    </form>
                </div>
            </div>
        </div>


        <div class="col-md-2">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h3 class="card-title">Junte-se a nossa comunidade!</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Officia autem assumenda quo laborum ab natus illum
                        quibusdam quod ratione tempora asperiores nisi eligendi
                        nemo magnam error ut excepturi, dolor sed?
                    </p>
                    <br>
                    <a href="{{ route('user-create') }}" class="btn btn-success btn-lg w-100">Cadastrar-se</a>
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">DESTAQUE</h5>
                    <img class="card-img-top rounded" src="http://adamthemes.com/demo/code/cards/images/blog01.jpeg"
                        alt="">
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">ADS</h5>
                </div>
            </div>

        </div>
    </div>

@endsection

@section('js')
    <script>
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
@endsection