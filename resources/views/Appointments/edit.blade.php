@extends('layout')

@section('title','Editar Citas')

@section('content')
    <div class="container">
        <div class="row titulo">
            <div class="col">
                <h1>Editar Citas</h1>
            </div>
        </div>

        <div class="row acciones">
            <div class="col-auto">
                <div class="boton">
                    <a href="{{route('Appointments.show',$Appointment)}}" class="btn btn-primary">Regresar</a>
                </div>
            </div>
        </div>

        <form class="row" action="{{ route('Appointments.update', $Appointment) }}" method="post">
            @csrf
            @method('patch')
            @include('Appointments.form')
        </form>

        @if(session()->has('success'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                {{session()->get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
        @endif

    </div>
