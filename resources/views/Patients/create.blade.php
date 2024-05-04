@extends('layout')

@section('title', 'Agregar Paciente')

@section('content')

    <div class="container">
        <div class="row titulo">
            <div class="col">
                <h1>Agregar Paciente</h1>
            </div>
        </div>

        <div class="row acciones">
            <div class="col-auto">
                <div class="boton">
                    <a href="{{route('Patients.index')}}" class="btn btn-primary">Regresar</a>
                </div>
            </div>
        </div>

        <form class="row" action="{{route('Patients.store')}}" method="post">
            @csrf

            @include('Patients.form')
        </form>



        @if(session()->has('success'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                {{session()->get('success') }}
                <butto type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></butto>
            </div>
        @endif
    </div>

@endsection
