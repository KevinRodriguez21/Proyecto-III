<div class="col-12 mt-3">
    <label for="Nombre">Nombre</label>
    <input type="text" name="Nombre" class="form-control" required value="{{$Patient->Nombre}}">
</div>

<div class="col-12 mt-3">
    <label for="Apellido">Apellido</label>
    <input type="text" name="Apellido" class="form-control" required value="{{$Patient->Apellido}}">
</div>

<div class="col-12 mt-3">
    <label for="Correo">Correo</label>
    <input type="text" name="Correo" class="form-control" required value="{{$Patient->Correo}}">
</div>

<div class="col-12 mt-3">
    <label for="Telefono">Telefono</label>
    <input type="text" name="Telefono" class="form-control" required value="{{$Patient->Telefono}}">
</div>

<div class="col-12 mt-3">
    <label for="Direccion">Direccion</label>
    <input type="text" name="Direccion" class="form-control" required value="{{$Patient->Direccion}}">
</div>

<div class="col-12 mt-3">
    <label for="IdCita">Nombre Paciente</label>
    <SELECT name="IdCita" id="IdCita" required class="form-control">
        @foreach($Appointments as $Appointment)
            <option value="{{$Appointment->id}}" {{$Appointment->id === $Patient->IdCita ? 'selected' : ''}}>{{$Appointment->Nombre_Paciente}} </option>
        @endforeach
    </SELECT>
</div>

<div class="col-12 mt-3">
    <div class="boton">
        <input type="submit" class="btn btn-secondary" value="Enviar">
    </div>
</div>
