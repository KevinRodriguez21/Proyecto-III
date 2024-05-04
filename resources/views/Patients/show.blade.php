@extends('layout')

@section('title','Mostrar Pacientes')

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
                    <a href="{{route('Patients.index')}}" class="btn btn-primary">Regresar</a>
                </div>
            </div>

            <div class="col-auto">
                <div class="boton">
                    <a href="{{route('Patients.edit', $Patient)}}" class="btn btn-secondary">Modificar</a>
                </div>
            </div>

            <div class="col-auto">
                <form class="boton" action="{{route('Patients.destroy', $Patient)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Eliminar">
                </form>
            </div>
        </div>

        <div class="row contenido">
            <h2>ID: {{$Patient->id}}</h2>
            <h2>Nombre: {{$Patient->Nombre}}</h2>
            <h2>Apellido: {{$Patient->Apellido}}</h2>
            <h2>Correo: {{$Patient->Correo}}</h2>
            <h2>Telefono: {{$Patient->Telefono}}</h2>
            <h2>Direccion: {{$Patient->Direccion}}</h2>
            <h2 class="mt-4">Citas</h2>
            <h6>ID: {{$Patient->Appointments->id}}</h6>
            <h6>Tipo Cita: {{$Patient->Appointments->Tipo_Cita}}</h6>
            <h6>Fecha: {{$Patient->Appointments->Fecha}}</h6>
            <h6>Nombre_Paciente: {{$Patient->Appointments->Nombre_Paciente}}</h6>
            <h6>Prioridad: {{$Patient->Appointments->Prioridad}}</h6>
            <h6>Lugar Cita: {{$Patient->Appointments->Lugar_Cita}}</h6>
        </div>
    </div>
@endsection
