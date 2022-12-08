@extends('layout/agenda')

@section('tituloPagina', 'Agregar')

@section('contenido')
    <div class="row">
        <div class="col p-0">
            <div class="card">
                <div class="card-header">
                    <div class="text-center">
                        <h1 class="display-3" style="font-family: 'Raleway', sans-serif;">Agregar una nueva categoria <i class="fa-solid fa-file-circle-plus"></i></h1>
                    </div> 
                </div>
                <div class="card-body">
                    <div class="form-control">
                        <form action="{{ route('categorias.store') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="form-floating mb-3">
                                <input class="form-control" type="text" name="nombre" id="nombre" placeholder = "Aqui va el nombre" autocomplete="off" required>
                                <label for="nombre"><i class="fa-solid fa-person"></i> Nombre:</label>
                            </div>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="descripcion" name="descripcion"></textarea>
                                <label for="descripcion"><i class="fa-solid fa-list"></i> Descripcion:</label>
                            </div>
                            <hr>
                            <div class="text-center">
                                <a href="{{route('categorias.index')}}" class="btn btn-sm btn-secondary w-25">Regresar <i class="fa-solid fa-rotate-left"></i> </a>
                                <button class="btn btn-sm btn-success w-50">Agregar <i class="fa-solid fa-floppy-disk"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection