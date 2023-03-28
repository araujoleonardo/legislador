@extends('layouts.app')

@section('title', 'Usuários')

@section('content')
    
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Usuários</h1>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Listagem de usuários ativos</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                                    <td>{{ $usuario->regiao }}</td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                        <div class="m-1">
                                            <button class="btn btn-info btn-circle btn-sm">
                                                <i class="fas fa-info-circle"></i>
                                            </button>
                                        </div>
                                        <div class="m-1">
                                            <button class="btn btn-success btn-circle btn-sm">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </div>
                                        <div class="m-1">
                                            <form action="" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-circle btn-sm" type="submit">
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

@endsection