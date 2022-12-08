@extends('layout/agenda')

@section('tituloPagina', 'inicio')

@section('contenido')
    <div class="row">
        <div class="col p-0">
            <div class="card">
                <div class="card-header">
                    <div class="text-center">
                        <h1 style="font-family: 'Raleway', sans-serif;">Agenda de Contactos con Laravel 8</h1>
                    </div>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img src="{{ asset('img/pug.jpg') }}" alt="Esta es la foto de un Pug" width="25%" height="auto">
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