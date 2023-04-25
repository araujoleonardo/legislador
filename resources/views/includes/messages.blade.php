@if($menssagem = Session::get('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <h6>{{ $menssagem }}</h6>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if($menssagem = Session::get('userCreate'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <h6>{{ $menssagem }}</h6>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if($menssagem = Session::get('postCreate'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <h6>{{ $menssagem }}</h6>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if($menssagem = Session::get('updateRegiao'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <h6>{{ $menssagem }}</h6>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if($menssagem = Session::get('createRegiao'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <h6>{{ $menssagem }}</h6>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if($menssagem = Session::get('update'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <h6>{{ $menssagem }}</h6>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
