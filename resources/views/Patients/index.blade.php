@extends('layout')

@section('title','Pacientes')

@section('content')
    <div class="container">
        <div class="row titulo">
            <div class="col">
                <h1>Pacientes</h1>
            </div>
        </div>

        <div class="row acciones">
            <div class="col-auto">
                <div class="boton">
                    <a href="{{ route('welcome') }}" class="btn btn-primary">Regresar</a>
                    <a href="{{route('Patients.create')}}" class="btn btn btn-primary">Crear</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col tarjetas">
                <div class="container">
                    <div class="row">
                        @forelse($Patients as $Patient)
                            <div class="col-12 col-sm-6 mt-2 mb-2">
                                <a href="{{route('Patients.show', $Patient)}}" class="tarjeta">
                                    <h2>{{$Patient->Nombre}}</h2>
                                </a>
                            </div>
                        @empty
                            <h3>No existen Pcientes para mostrar.</h3>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
