@extends('layouts.main')

@section('title', 'Forum')

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
    </style>

@endsection

@section('content')

    <div class="row">
        <div class="col-md-2">

            <div class="card shadow-sm">
                <div class="card-body">
                    <h4 class="card-subtitle"> Fóruns </h4>
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
                                        Forum Popular
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
                                        Petições públicas
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
                                        Projetos de lei
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

        {{-- =========================Posts========================= --}}

        <div class="col-md-8">

            <table>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <h6 class="card-subtitle text-success"><i class="fa fa-university"></i> Popular
                                        </h6>
                                        <hr class="my-3">
                                        <div class="row">
                                            <div class="">
                                                {!! $post->video !!}
                                            </div>
                                            <div class="">
                                                <h4 class="card-title">
                                                    <a href="#"> {{ $post->title }} </a>
                                                </h4>
                                                <p class="card-text">
                                                    {{ $post->content }}
                                                </p>
                                            </div>
                                        </div>
                                        <hr class="my-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center author">
                                                <a href="#">
                                                    <img src="http://adamthemes.com/demo/code/cards/images/avatar2.png"
                                                        alt="..." class="rounded-circle" width="50">
                                                    <span class="ms-3">{{ $post->user->name }}</span>
                                                </a>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="mr-3">
                                                    <span class="text-dark" style="font-size: 15px">
                                                        <i class="fas fa-comment-dots"></i>
                                                        145
                                                    </span>
                                                </div>

                                                <div>
                                                    <span class="text-dark" style="font-size: 15px">
                                                        <i class="fas fa-eye"></i>
                                                        15
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- =========================coluna 3========================= --}}

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
                    <a href="{{ route('post-create') }}" class="btn btn-primary btn-lg w-100">Fazer postagem</a>
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">DESTAQUE</h5>
                    <img class="card-img-top rounded" src="http://adamthemes.com/demo/code/cards/images/blog01.jpeg"
                        alt="">
                </div>
            </div>

        </div>
    </div>

@endsection
