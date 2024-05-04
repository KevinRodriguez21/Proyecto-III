@extends('layout')

@section('title','Mostrar Citas')

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
                    <a href="{{route('Appointments.index')}}" class="btn btn-primary">Regresar</a>
                </div>
            </div>

            <div class="col-auto">
                <div class="boton">
                    <a href="{{route('Appointments.edit', $Appointment)}}" class="btn btn-secondary">Modificar</a>
                </div>
            </div>

            <div class="col-auto">
                <form class="boton" action="{{route('Appointments.destroy', $Appointment)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Eliminar">
                </form>
            </div>
        </div>

        <div class="row contenido mt-3">
            <h2>ID: {{$Appointment->id}}</h2>
            <h2>Tipo_Cita: {{$Appointment->Tipo_Cita}}</h2>
            <h2>Fecha: {{$Appointment->Fecha}}</h2>
            <h2>Nombre_Paciente: {{$Appointment->Nombre_Paciente}}</h2>
            <h2>Prioridad: {{$Appointment->Prioridad}}</h2>
            <h2>Lugar_Cita: {{$Appointment->Lugar_Cita}}</h2>
            <h2 class="mt-4">Doctor</h2>
            <h6>ID: {{$Appointment->Doctors->id}}</h6>
            <h6>Nombre: {{$Appointment->Doctors->Nombre}}</h6>
            <h6>Apellido: {{$Appointment->Doctors->Apellido}}</h6>
            <h6>Especialidad: {{$Appointment->Doctors->Especialidad}}</h6>
            <h6>Telefono: {{$Appointment->Doctors->Telefono}}</h6>
        </div>
    </div>
@endsection
