<div class="col-12 mt-3">
    <label for="Nombre">Nombre</label>
    <input type="text" name="Nombre" class="form-control" required value="{{$Doctor->Nombre}}">
</div>

<div class="col-12 mt-3">
    <label for="Apellido">Apellido</label>
    <input type="text" name="Apellido" class="form-control" required value="{{$Doctor->Apellido}}">
</div>

<div class="col-12 mt-3">
    <label for="Especialidad">Especialidad</label>
    <input type="text" name="Especialidad" class="form-control" required value="{{$Doctor->Especialidad}}">
</div>

<div class="col-12 mt-3">
    <label for="Telefono">Telefono</label>
    <input type="text" name="Telefono" class="form-control" required value="{{$Doctor->Telefono}}">
</div>

<div class="col-12 mt-3">
    <div class="boton">
        <input type="submit" class="btn btn-secondary" value="Enviar">
    </div>
</div>
