@extends('layout')

@section('title','Mostrar Doctores')

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
                    <a href="{{route('Doctors.index')}}" class="btn btn-primary">Regresar</a>
                </div>
            </div>

            <div class="col-auto">
                <div class="boton">
                    <a href="{{route('Doctors.edit', $Doctor)}}" class="btn btn-secondary">Modificar</a>
                </div>
            </div>

            <div class="col-auto">
                <form class="boton" action="{{route('Doctors.destroy', $Doctor)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Eliminar">
                </form>
            </div>
        </div>

        <div class="row contenido">
            <h2>ID: {{$Doctor->id}}</h2>
            <h2>Nombre: {{$Doctor->Nombre}}</h2>
            <h2>Apellido: {{$Doctor->Apellido}}</h2>
            <h2>Especialidad: {{$Doctor->Especialidad}}</h2>
            <h2>Telefono: {{$Doctor->Telefono}}</h2>
        </div>
    </div>
@endsection
