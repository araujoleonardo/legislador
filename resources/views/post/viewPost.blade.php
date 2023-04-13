@extends('layouts.main')

@section('title', 'View Post')

@section('css')

    <style>
        .collapsible-link {
            width: 100%;
            position: relative;
            text-align: left;
        }

        .collapsible-link::before {
            content: "+";
            position: absolute;
            top: 50%;
            right: 0.8rem;
            transform: translateY(-50%);
            display: block;
            font-size: 1.1rem;
        }

        .collapsible-link[aria-expanded="true"]::before {
            content: "-";
        }

        iframe {
            width: 100%;
            aspect-ratio: 16/9;
        }

        .image-post {
            width: 100%;
            aspect-ratio: 16/9;
            object-fit: cover;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>

@endsection

@section('content')

    <div class="row">
        <div class="col-md-2">

            <div class="card shadow-sm">
                <div class="card-body">
                    <h3 class="card-title text-center">Fóruns</h3>
                    <hr class="my-3">

                    <!-- Accordion -->
                    <div id="accordionExample" class="accordion">

                        <!-- Accordion item 1 -->
                        <div class="card border">
                            <div id="headingOne" class="card-header bg-white shadow-sm border-0">
                                <h2 class="mb-0">
                                    <button type="button" data-toggle="collapse" data-target="#collapseOne"
                                            aria-expanded="false" aria-controls="collapseOne"
                                            class="btn btn-link text-dark font-weight-bold text-uppercase collapsible-link">
                                        Petições Públicas
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionExample"
                                 class="collapse">
                                <div class="card-body p-5">
                                    <p class="font-weight-light m-0">
                                        Em construção
                                    </p>
                                </div>
                            </div>
                        </div><!-- End -->

                        <!-- Accordion item 2 -->
                        <div class="card border">
                            <div id="headingTwo" class="card-header bg-white shadow-sm border-0">
                                <h2 class="mb-0">
                                    <button type="button" data-toggle="collapse" data-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo"
                                            class="btn btn-link text-dark font-weight-bold text-uppercase collapsible-link">
                                        Abaixo Assinado
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionExample"
                                 class="collapse">
                                <div class="card-body p-5">
                                    <p class="font-weight-light m-0">
                                        Em construção
                                    </p>
                                </div>
                            </div>
                        </div><!-- End -->

                        <!-- Accordion item 3 -->
                        <div class="card border">
                            <div id="headingThree" class="card-header bg-white shadow-sm border-0">
                                <h2 class="mb-0">
                                    <button type="button" data-toggle="collapse" data-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree"
                                            class="btn btn-link text-dark font-weight-bold text-uppercase collapsible-link">
                                        Projetos de Lei
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" aria-labelledby="headingThree" data-parent="#accordionExample"
                                 class="collapse">
                                <div class="card-body p-5">
                                    <p class="font-weight-light m-0">
                                        Em construção
                                    </p>
                                </div>
                            </div>
                        </div><!-- End -->

                        <!-- Accordion item 4 -->
                        <div class="card border">
                            <div id="headingFor" class="card-header bg-white shadow-sm border-0">
                                <h2 class="mb-0">
                                    <button type="button" data-toggle="collapse" data-target="#collapseFor"
                                            aria-expanded="false" aria-controls="collapseFor"
                                            class="btn btn-link text-dark font-weight-bold text-uppercase collapsible-link">
                                        Eleições
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFor" aria-labelledby="headingFor" data-parent="#accordionExample"
                                 class="collapse">
                                <div class="card-body p-5">
                                    <p class="font-weight-light m-0">
                                        Em construção
                                    </p>
                                </div>
                            </div>
                        </div><!-- End -->
                    </div><!-- End -->
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
                <strong>Lorem ipsum!</strong> Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Lorem ipsum!</strong> Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>

        {{-- =========================View Post========================= --}}

        <div class="col-md-8">
            <div class="card shadow-sm col-md-12 p-2">
                <div class="card-body">
                    <h6 class="card-subtitle text-success"><i class="fa fa-university"></i> Popular
                    </h6>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="card-title">
                                <a href="#"> {{ $post->title }} </a>
                            </h3>
                            <p class="card-text texto-cortado" style="font-size: 20px">
                                {{ $post->content }}
                            </p>
                        </div>
                    </div>

                    <div class="row">

                        @if ($post->video)
                            <div class="col-md-6">
                                {!! $post->video !!}
                            </div>
                            @if($post->image)
                                <div class="col-md-6">
                                    <img src="{{ asset('img/posts/' . $post->image) }}" alt="post" class="image-post">
                                </div>
                            @endif
                        @elseif($post->image)
                            <div class="col-md-6">
                                <img src="{{ asset('img/posts/' . $post->image) }}" alt="post" class="image-post">
                            </div>
                        @else
                            <div class="col-md-12"></div>
                        @endif

                    </div>

                    <hr>

                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center author">
                            <a href="#">
                                @if ($post->user->image)
                                    <img src="{{ asset('img/users/' . $post->user->image) }}" alt="user" class="image-rounded" width="31">
                                @else
                                    <img src="{{ asset('img/users/avatar.png') }}" alt="user" class="image-rounded" width="31">
                                @endif
                                <span class="ms-3">{{ $post->user->name }}</span>
                            </a>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span class="text-dark" style="font-size: 15px">
                                    <i class="fas fa-calendar-alt"></i>
                                    {{$post->created_at->format('d/m/Y')}}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Comentario Form --}}
            <div class="card shadow-sm">
                <div class="card-body">
                    <form id="regForm" class="user" method="POST" action="{{ route('post-coment') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="">
                            <label for="comentario" class="did-floating-label text-md-end mb-2">{{ __('Fazer Comentário') }}</label>
                            <textarea id="comentario" class="form-control did-floating-input @error('comentario') is-invalid @enderror" name="comentario" value="{{ old('comentario') }}" rows="3"></textarea>

                            @error('comentario')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <input type="hidden" value="{{ $post->id }}" name="post_id" id="post_id">
                        </div>

                        <br>

                        <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Postar</button>
                    </form>
                </div>
            </div>

            {{-- =======================Comentarios====================== --}}

            @include('includes.messages')

            <div class="card shadow-sm">
                <div class="card-body">
                    <h5>Comentários</h5>
                    <table style="width: 100%">
                        <tbody>
                        @if ($count != 0)
                            @foreach ($coments as $coment)
                                <tr>
                                    <td>
                                        <div class="card shadow-sm col-md-12 p-2 border">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <p class="card-text" style="font-size: 15px">
                                                            {{ $coment->comentario }}
                                                        </p>
                                                    </div>
                                                </div>

                                                <hr>

                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="d-flex align-items-center author">
                                                        <a href="#">
                                                            @if ($coment->user->image)
                                                                <img src="{{ asset('img/users/' . $coment->user->image) }}" alt="user" class="image-rounded" width="31">
                                                            @else
                                                                <img src="{{ asset('img/users/avatar.png') }}" alt="user" class="image-rounded" width="31">
                                                            @endif
                                                            <span class="ms-3">{{ $coment->user->name }}</span>
                                                        </a>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <span class="text-dark" style="font-size: 15px">
                                                                <i class="fas fa-calendar-alt"></i>
                                                                {{$coment->created_at->format('d/m/Y')}}
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td>
                                    <div class="card shadow-sm p-2">
                                        <div class="card-body">
                                            <p class="text-center">Ainda não existem comentários para este post!</p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        {{-- =========================coluna 3========================= --}}

        <div class="col-md-2">
            @guest
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h3 class="card-title">Junte-se a nossa comunidade!</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Officia autem assumenda quo laborum ab natus illum
                            quibusdam quod ratione tempora asperiores nisi eligendi
                            nemo magnam error ut excepturi, dolor sed?
                        </p>
                        <br>
                        <a href="{{ route('user-create') }}" class="btn btn-success btn-lg w-100">Cadastrar-se</a>
                    </div>
                </div>
            @else
                <div class="card shadow-sm">
                    <div class="card-body">
                        <a href="{{ route('post-create') }}" class="btn btn-primary btn-lg w-100">Fazer postagem</a>
                    </div>
                </div>
            @endguest

            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">DESTAQUE</h5>
                    <img class="card-img-top rounded" src="{{ asset('img/destaque.jpg') }}" alt="destaque">
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
