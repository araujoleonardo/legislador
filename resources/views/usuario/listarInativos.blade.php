@extends('layouts.dash')

@section('title', 'Usuários Inativos')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <span class="mb-0">Usuários / Usuários Inativos </span>
        </div>

        <!-- DataTales Example -->
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="zero_config" class="table table-sm table-bordered">
                        <thead>
                            <tr>
                                <th><h5>Nome</h5></th>
                                <th><h5>Nascimento</h5></th>
                                <th><h5>Sexo</h5></th>
                                <th><h5>Zona eleitoral</h5></th>
                                <th><h5>Endereço</h5></th>
                                <th><h5>Região</h5></th>
                                <th><h5>Ações</h5></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($usuarios as $usuario)
                                <tr>
                                    <td>{{ $usuario->name }}</td>
                                    <td>{{ $usuario->dataNascimento }}</td>
                                    <td>{{ $usuario->sexo }}</td>
                                    <td>{{ $usuario->zonaEleitoral }}</td>
                                    <td>{{ $usuario->endereco }}, {{ $usuario->numero }}</td>
                                    <td>{{ $usuario->regiao->nome ?? '-' }}</td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">

                                            <div class="m-1">
                                                <a class="btn btn-info btn-sm" title="Detalhes" href="{{ url( '/usuario/show/'. $usuario->id ) }}">
                                                    <i class="fas fa-info-circle"></i>
                                                </a>
                                            </div>

                                            <div class="m-1">
                                                <a class="btn btn-success btn-sm" title="Ativar" id="form-delete" data-id="{{ $usuario->id }}" href="#">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                            </div>

                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    @include('usuario.detalhes')

    @section('js')

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
            $('#zero_config').DataTable({
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
                }
            });

            //Função deletar
            $(document).on('click', '#form-delete', function(event){
                event.preventDefault();
                let id = $(this).data('id');
                Swal.fire({
                    title: 'Tem certeza?',
                    text: "Você irá ativar este usuário!",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sim, ativar!',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.value) {
                        deleteRecord(id);
                        Swal.fire({
                            title: 'Sucesso!',
                            text: 'O usuário está ativo.',
                            icon: 'success'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location.reload()
                            }
                        })
                    }
                })
            });

            function deleteRecord(id) {
                $.ajax({
                    url: '/usuario/ativar/' + id,
                    type: 'POST',
                    data: {
                        _token: '{!! csrf_token() !!}',
                    },
                    success: function(result) {
                        console.log(result)
                    },
                    error: function(xhr, status, error) {
                        console.log(error)
                    }
                });
            }


        </script>

    @endsection

@endsection
