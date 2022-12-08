@extends('layout/agenda')

@section('tituloPagina', 'Categorias')

@section('contenido')
    {{-- @php
        print_r($categorias);
    @endphp --}}
    <div class="row">
        <div class="col p-0">
            <div class="card">
                <div class="card-header">
                    <div class="text-center">
                        <h1 class="display-3" style="font-family: 'Raleway', sans-serif;">Categorias <i class="fa-solid fa-icons"></i></h1>
                    </div> 
                    <hr>
                    <div>
                        <a href="{{route('categorias.create')}}" class="btn btn-info btn-md">Agregar nueva Categoria <i class="fa-solid fa-plus ml-2"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    @if ($mensaje = Session::get('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ $mensaje }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                <div>

                    </div>
                    <div class="table-responsive text-center">
                        <table class="table table-info table-striped">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($categorias as $item)                                  
                                <tr>
                                    <td>{{ $item->nombre }}</td>
                                    <td>{{ ($item->descripcion == '') ? 'No hay descripción' : $item->descripcion }}</td>
                                    <td>
                                        <a href="{{ route('categorias.edit', $item->id_categoria) }}" class="btn btn-warning btn-sm">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('categorias.show', $item->id_categoria) }}" class="btn btn-danger btn-sm">
                                            <i class="fa-regular fa-trash-can"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-center">
                        <h3 style="font-family: 'Raleway', sans-serif;">Esta es mi primera agenda con laravel 8</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection