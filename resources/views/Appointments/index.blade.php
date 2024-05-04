@extends('layout')

@section('title','Citas')

@section('content')
    <div class="container">
        <div class="row titulo">
            <div class="col">
                <h1>Citas</h1>
            </div>
        </div>

        <div class="row acciones">
            <div class="col-auto">
                <div class="boton">
                    <a href="{{ route('welcome') }}" class="btn btn-primary">Regresar</a>
                    <a href="{{route('Appointments.create')}}" class="btn btn btn-primary">Crear</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col tarjetas">
                <div class="container">
                    <div class="row">
                        @forelse($Appointments as $Appointment)
                            <div class="col-12 col-sm-6 mt-2 mb-2">
                                <a href="{{route('Appointments.show', $Appointment)}}" class="tarjeta">
                                    <h2>{{$Appointment->Nombre_Paciente}}</h2>
                                </a>
                            </div>
                        @empty
                            <h3>No existen Citas para mostrar.</h3>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
