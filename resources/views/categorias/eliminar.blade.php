@extends('layout/agenda')

@section('tituloPagina', 'Eliminar')

@section('contenido')
    <div class="row">
        <div class="col p-0">
            <div class="card">
                <div class="card-header">
                    <div class="text-center">
                        <h1 class="display-3" style="font-family: 'Raleway', sans-serif;">Eliminar categoria <i class="fa-solid fa-trash-can"></i></h1>
                    </div> 
                </div>
                <div class="card-body">
                    <div class="alert alert-danger" role="alert">
                        <h3 class="display-5">
                            ¿Estas seguro de ELIMINAR esta Categoria? <i class="fa-solid fa-triangle-exclamation"></i>
                        </h3>
                        <p>¡Una vez eliminada NO podrás recuperarla! <i class="fa-solid fa-face-sad-cry"></i></p>
                        <div class="table-reponsive text-center">
                            <table class="table table-secondary table-striped">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Descripción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $categorias->nombre }}</td>
                                        <td>{{ $categorias->descripcion }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <hr>
                    <div class="text-center">
                        <form action="{{ route('categorias.destroy', $categorias->id_categoria) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('categorias.index')}}" class="btn btn-sm btn-secondary w-25">Cancelar <i class="fa-solid fa-rotate-left"></i> </a>
                            <button class="btn btn-sm btn-danger w-50">Eliminar <i class="fa-solid fa-floppy-disk"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection