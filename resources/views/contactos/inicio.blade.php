@extends('layout/agenda')

@section('tituloPagina', 'Contactos')

@section('contenido')
    <div class="row">
        <div class="col p-0">
            <div class="card">
                <div class="card-header">
                    <div class="text-center">
                        <h1 class="display-3" style="font-family: 'Raleway', sans-serif;">Contactos <i class="fa-solid fa-phone-volume"></i></h1>
                    </div> 
                    <hr>
                    <div>
                        <a href="{{route('contactos.create')}}" class="btn btn-primary btn-md">Agregar un nuevo contacto <i class="fa-solid fa-plus ml-2"></i></a>
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
                <div class="card-body">
                    <div class="table-responsive text-center">
                        <table class="table table-warning table-striped">
                            <thead>
                                <tr>
                                    <th>Apellido paterno</th>
                                    <th>Apellido materno</th>
                                    <th>Nombre</th>
                                    <th>Telefono</th>
                                    <th>Email</th>
                                    <th>Categoria</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listado as $item)
                                <tr>
                                    <td>{{ $item->paterno }}</td>
                                    <td>{{ $item->materno }}</td>
                                    <td>{{$item->nombre}}</td>
                                    <td>{{ $item->telefono }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->nombre_categoria }}</td>
                                    <td>
                                        <a href="{{ route('contactos.edit', $item->id_contacto) }}" class="btn btn-warning btn-sm">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('contactos.show', $item->id_contacto) }}" class="btn btn-danger btn-sm">
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