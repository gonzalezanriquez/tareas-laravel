@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="page-content">
            <!--TABLA CATEGORIAS-->
            <h2>Catalogo de Categorias</h2>
            <div class="d-flex ">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Editar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categorias as $categoria)
                        <tr>
                            <td>{{ $categoria->id }}</td>
                            <td>{{ $categoria->nombre }}</td>
                            <td>{{ $categoria->descripcion }}</td>
                            <td>
                                <div class="row">
                                    <div class="main-button-edit">
                                        <a href="{{ route('admin.edit-categoria') }}">EDITAR</a>
                                    </div>
                                    <div class="main-button-elim">
                                        <a href="admin-users.php">ELIMINAR</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-end">
                <div class="main-button">
                    <a href="{{ route('admin.agre-categoria') }}">AGREGAR</a>
                </div>
            </div>
            <!--FIN DE TABLA-->


            @endsection