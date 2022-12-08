@extends('layout/agenda')

@section('tituloPagina', 'Eliminar')

@section('contenido')
    <div class="row">
        <div class="col p-0">
            <div class="card">
                <div class="card-header">
                    <div class="text-center">
                        <h1 class="display-3" style="font-family: 'Raleway', sans-serif;">Eliminar contacto <i class="fa-solid fa-trash-can"></i></h1>
                    </div> 
                </div>
                <div class="card-body">
                    <div class="alert alert-danger" role="alert">
                        <h3 class="display-5">
                            ¿Estas seguro de ELIMINAR este Contacto? <i class="fa-solid fa-triangle-exclamation"></i>
                        </h3>
                        <p>¡Una vez eliminada NO podrás recuperarla! <i class="fa-solid fa-face-sad-cry"></i></p>
                    </div>
                    <div class="table-reponsive text-center">
                        <table class="table table-secondary table-striped">
                            <thead>
                                <tr>
                                    <th>Apellido Paterno</th>
                                    <th>Apellido Materno</th>
                                    <th>Nombre</th>
                                    <th>Telefono</th>
                                    <th>Email</th>
                                    <th>Categpria</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $contacto->paterno }}</td>
                                    <td>{{ $contacto->materno }}</td>
                                    <td>{{ $contacto->nombre }}</td>
                                    <td>{{ $contacto->telefono }}</td>
                                    <td>{{ $contacto->email }}</td>
                                    <td>{{ $contacto->nombre_categoria }}</td>
                                
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div class="text-center">
                        <form action="{{ route('contactos.destroy', $contacto->id_contacto) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('contactos.index')}}" class="btn btn-sm btn-secondary w-25">Cancelar <i class="fa-solid fa-rotate-left"></i> </a>
                            <button class="btn btn-sm btn-danger w-50">Eliminar <i class="fa-solid fa-floppy-disk"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection