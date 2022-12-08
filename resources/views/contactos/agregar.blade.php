@extends('layout/agenda')

@section('tituloPagina', 'Agregar')

@section('contenido')
    <div class="row">
        <div class="col p-0">
            <div class="card">
                <div class="card-header">
                    <div class="text-center">
                        <h1 class="display-3" style="font-family: 'Raleway', sans-serif;">Agregar nuevo contacto <i class="fa-solid fa-square-phone"></i></h1>
                    </div> 
                </div>
                <div class="card-body">
                    <div class="form-control">
                        <form action="{{ route('contactos.store') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="form-floating mb-3">
                                <select class="form-select" id="categoria" name="categoria" aria-label="Floating label select example" required="true">
                                  <option>Seleccione una categoria</option>
                                  @php
                                      print_r($categorias);
                                  @endphp
                                  @foreach ($categorias as $item)
                                    @if ($item->id_categoria == '')
                                        <option selected ><strong>¡No hay ninguna categoria_favor de crear una! <i class="fa-solid fa-triangle-exclamation"></i></strong></option>
                                    @else
                                        <option value="{{ $item->id_categoria }}">{{ $item->nombre }}</option>
                                    @endif
                                  @endforeach
                                </select>
                                <label for="categoria"><i class="fa-solid fa-icons"></i> Categoria:</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="text" name="apellidoPaterno" id="apellidoPaterno" placeholder = "Aqui va el apellido Paterno" autocomplete="off" required>
                                <label for="apellidoPaterno"><i class="fa-solid fa-address-card"></i> Apellido Paterno:</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="text" name="apellidoMaterno" id="apellidoMaterno" placeholder = "Aqui va el apellido Materno" autocomplete="off" required>
                                <label for="apellidoMaterno"><i class="fa-solid fa-address-card"></i> Apellido Materno:</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="text" name="nombre" id="nombre" placeholder = "Aqui va el nombre" autocomplete="off" required>
                                <label for="nombre"><i class="fa-solid fa-user"></i> Nombre:</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="number" name="telefono" id="telefono" placeholder = "Aqui va el telefono" autocomplete="off" required>
                                <label for="telefono"><i class="fa-solid fa-mobile-screen"></i> Telefono:</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="email" name="correo" id="correo" placeholder = "Aqui va el correo" autocomplete="off" required>
                                <label for="correo"><i class="fa-solid fa-at"></i> Email:</label>
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