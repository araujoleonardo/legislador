@extends('layouts.dash')

@section('title', 'Região')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <span class="mb-0">Regiões / Regiões cadastradas</span>
        </div>

        <!-- DataTales Example -->
        <div class="card">
            <div class="card-body">
                @include('includes.messages')
                <div class="table-responsive">
                    <table id="zero_config" class="table table-sm table-bordered">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($regioes as $regiao)
                                <tr>
                                    <td>{{ $regiao->id }}</td>
                                    <td>{{ $regiao->nome }}</td>
                                    <td>{{ $regiao->detalhes }}</td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">

                                            <div class="m-1">
                                                <a class="btn btn-primary btn-sm" title="Editar" href="{{ url( '/regiao/editar/'. $regiao->id ) }}">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                            </div>

                                            <div class="m-1">
                                                <a class="btn btn-danger btn-sm" title="Deletar" id="form-delete" data-id="{{ $regiao->id }}" href="#">
                                                    <i class="fas fa-trash"></i>
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
                    text: "Esta ação não pode ser desfeita!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sim, excluir!',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.value) {
                        deleteRecord(id);
                        Swal.fire({
                            title: 'Excluido!',
                            text: 'Região excluida com sucesso.',
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
                    url: '/regiao/delete/' + id,
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
