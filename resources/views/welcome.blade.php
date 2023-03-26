@extends('layouts.main')

@section('title', 'Forum')

@section('content')

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-3">

                <div class="card shadow mb-3">
                    <div class="m-3">
                        <p><a href="#">My Profile</a></p>
                        <img src="/img/avatar.png" class="img-circle" height="65" width="65" alt="Avatar">
                    </div>
                </div>

                <div class="card shadow mb-3">
                    <div class="m-3">
                        <p><a href="#">Intereses</a></p>
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


            <div class="col-md-7">

                <div class="row">
                    <div class="col-sm-12 card shadow mb-3">
                        <div class="panel panel-default text-left m-3">
                            <div class="card-body">
                                <form>                            
                                    <textarea id="post" name="post" placeholder="Digite sua mensagem..."></textarea>

                                    <button class="btn-post" type="submit"><i class="bi bi-send-fill"></i> Postar</button>
                                </form>                                   
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 card shadow mb-3">
                        <div class="panel panel-default text-left m-3">
                            <div class="card-body">
                                <h6 class="card-subtitle text-success"><i class="fa fa-university"></i> Law</h6>
                                <hr class="my-3">
                                <div class="row">
                                    <div class="col-md-3 ">
                                        <a href="#">
                                            <img class="card-img-top rounded" src="http://adamthemes.com/demo/code/cards/images/blog01.jpeg" alt="">
                                        </a>
                                    </div>
                                    <div class="col-md-9">
                                        <h4 class="card-title">
                                            <a href="#">Lorem ipsum dolor sit amet.</a>
                                        </h4>
                                        <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipis cingelit.
                                            Etiam lacinia elit et placerat finibus. Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                                            Consectetur iste laboriosam, similique reprehenderit quae est eos vel, 
                                            aliquid nemo dolor aspernatur harum doloremque necessitatibus explicabo dolorem quaerat sequi veritatis velit!</p>
                                    </div>
                                </div>
                                <hr class="my-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center author">
                                        <a href="#">
                                            <img src="http://adamthemes.com/demo/code/cards/images/avatar2.png" alt="..." class="avatar img-raised">
                                            <span class="ms-3">Dany Clark</span>
                                        </a>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="mr-3">
                                            <span class="text-dark" style="font-size: 13px"><i class="bi bi-chat-dots-fill"></i> 145 </span>                                         
                                        </div>

                                        <div>
                                            <span class="text-dark" style="font-size: 13px"><i class="bi bi-clock-fill"></i> 10min</span> 
                                        </div>                                   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 card shadow mb-3">
                        <div class="panel panel-default text-left m-3">
                            <div class="card-body">
                                <h6 class="card-subtitle text-danger"><i class="bi bi-globe-americas"></i> World</h6>
                                <hr class="my-3">
                                <div class="row">
                                    <div class="col-md-3 ">
                                        <a href="#">
                                            <img class="card-img-top rounded" src="http://adamthemes.com/demo/code/cards/images/blog01.jpeg" alt="">
                                        </a>
                                    </div>
                                    <div class="col-md-9">
                                        <h4 class="card-title">
                                            <a href="#">Lorem ipsum dolor sit amet.</a>
                                        </h4>
                                        <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipis cingelit.
                                            Etiam lacinia elit et placerat finibus. Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                                            Consectetur iste laboriosam, similique reprehenderit quae est eos vel, 
                                            aliquid nemo dolor aspernatur harum doloremque necessitatibus explicabo dolorem quaerat sequi veritatis velit!</p>
                                    </div>
                                </div>
                                <hr class="my-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center author">
                                        <a href="#">
                                            <img src="http://adamthemes.com/demo/code/cards/images/avatar3.png" alt="..." class="avatar img-raised">
                                            <span class="ms-3">Gabriil Garyc</span>
                                        </a>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="mr-3">
                                            <span class="text-dark" style="font-size: 13px"><i class="bi bi-chat-dots-fill"></i> 145 </span>                                         
                                        </div>

                                        <div>
                                            <span class="text-dark" style="font-size: 13px"><i class="bi bi-clock-fill"></i> 1h 5min</span> 
                                        </div>                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 card shadow mb-3">
                        <div class="panel panel-default text-left m-3">
                            <div class="card-body">
                                <h6 class="card-subtitle text-primary"><i class="bi bi-music-note-beamed"></i> Music</h6>
                                <hr class="my-3">
                                <div class="row">
                                    <div class="col-md-3 ">
                                        <a href="#">
                                            <img class="card-img-top rounded" src="http://adamthemes.com/demo/code/cards/images/blog01.jpeg" alt="">
                                        </a>
                                    </div>
                                    <div class="col-md-9">
                                        <h4 class="card-title">
                                            <a href="#">Lorem ipsum dolor sit amet.</a>
                                        </h4>
                                        <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipis cingelit.
                                            Etiam lacinia elit et placerat finibus. Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                                            Consectetur iste laboriosam, similique reprehenderit quae est eos vel, 
                                            aliquid nemo dolor aspernatur harum doloremque necessitatibus explicabo dolorem quaerat sequi veritatis velit!</p>
                                    </div>
                                </div>
                                <hr class="my-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center author">
                                        <a href="#">
                                            <img src="http://adamthemes.com/demo/code/cards/images/avatar3.png" alt="..." class="avatar img-raised">
                                            <span class="ms-3">Gabriil Garyc</span>
                                        </a>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="mr-3">
                                            <span class="text-dark" style="font-size: 13px"><i class="bi bi-chat-dots-fill"></i> 145 </span>                                         
                                        </div>

                                        <div>
                                            <span class="text-dark" style="font-size: 13px"><i class="bi bi-clock-fill"></i> 1h 32min</span> 
                                        </div>                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-2">

                <div class="card shadow mb-3">
                    <div class="m-3">
                        <p>Upcoming Events:</p>
                        <img src="/img/avatar.png" alt="Paris" width="200">
                        <p><strong>Paris</strong></p>
                        <p>Fri. 27 November 2015</p>
                        <button class="btn btn-primary">Info</button>
                    </div>
                </div>

                <div class="card shadow mb-3">
                    <div class="m-3">
                        <p>ADS</p>
                    </div>
                </div>

                <div class="card shadow mb-3">
                    <div class="m-3">
                        <p>ADS</p>
                    </div>
                </div>

                <div class="card shadow mb-3">
                    <div class="m-3">
                        <p>ADS</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
