@extends('layout')

@section('title','Doctores')

@section('content')
    <div class="container">
        <div class="row titulo">
            <div class="col">
                <h1>Doctores</h1>
            </div>
        </div>

        <div class="row acciones">
            <div class="col-auto">
                <div class="boton">
                    <a href="{{ route('welcome') }}" class="btn btn-primary">Regresar</a>
                    <a href="{{route('Doctors.create')}}" class="btn btn btn-primary">Crear</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col tarjetas">
                <div class="container">
                    <div class="row">
                        @forelse($Doctors as $Doctor)
                            <div class="col-12 col-sm-6 mt-2 mb-2">
                                <a href="{{route('Doctors.show', $Doctor)}}" class="tarjeta">
                                    <h2>{{$Doctor->Nombre}}</h2>
                                </a>
                            </div>
                        @empty
                                <h3>No existen Doctores para mostrar.</h3>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
