<div class="col-12 mt-3">
    <label for="Tipo_Cita">Tipo Cita</label>
    <input type="text" name="Tipo_Cita" class="form-control" required value="{{$Appointment->Tipo_Cita}}">
</div>

<div class="col-12 mt-3">
    <label for="Fecha">Fecha</label>
    <input type="text" name="Fecha" class="form-control" required value="{{$Appointment->Fecha}}">
</div>

<div class="col-12 mt-3">
    <label for="Nombre_Paciente">Nombre Paciente</label>
    <input type="text" name="Nombre_Paciente" class="form-control" required value="{{$Appointment->Nombre_Paciente}}">
</div>

<div class="col-12 mt-3">
    <label for="Prioridad">Prioridad</label>
    <input type="text" name="Prioridad" class="form-control" required value="{{$Appointment->Prioridad}}">
</div>

<div class="col-12 mt-3">
    <label for="Lugar_Cita">Lugar Cita</label>
    <input type="text" name="Lugar_Cita" class="form-control" required value="{{$Appointment->Lugar_Cita}}">
</div>

<div class="col-12 mt-3">
    <label for="IdDoctor">Doctor</label>
    <SELECT name="IdDoctor" id="IdDoctor" required class="form-control">
        @foreach($Doctors as $Doctor)
            <option value="{{$Doctor->id}}" {{$Doctor->id === $Appointment->IdDoctor ? 'selected' : ''}}>{{$Doctor->Nombre}} </option>
        @endforeach
    </SELECT>
</div>

<div class="col-12 mt-3">
    <div class="boton">
        <input type="submit" class="btn btn-secondary" value="Enviar">
    </div>
</div>
