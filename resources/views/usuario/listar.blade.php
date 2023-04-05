@extends('layouts.dash')

@section('title', 'Usuários')

@section('content')
    
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Usuários</h1>
        </div>

        <!-- DataTales Example -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Usuários ativos</h5>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-sm table-bordered">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Nascimento</th>
                                <th>Sexo</th>
                                <th>Zona eleitoral</th>
                                <th>Endereço</th>
                                <th>Região</th>
                                <th>Ações</th>
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
                                                <button class="btn btn-info btn-sm" title="Detalhes">
                                                    <i class="fas fa-info-circle"></i>
                                                </button>
                                            </div>
                                            <div class="m-1">
                                                <button class="btn btn-primary btn-sm" title="Editar">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                            </div>
                                            <div class="m-1">
                                                <form action="" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm" type="submit" title="Inativar">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                                </form>
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

        <script>
            $('#zero_config').DataTable({  
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
                }
            });
        </script>

    @endsection

@endsection