<!-- formulario de alta de pagos -->
<form action="materias" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Materia</label>
                <input name="materia" type="text" class="form-control">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Profesor</label>
                <input name="profesor" type="text" class="form-control">
            </div>
        </div>
    </div>
    <select class="form-select" aria-label="Default select example">
        <option selected>Elija una Carrera</option>
            <option value="1">Profesorado de Historia</option>
            <option value="2">Profesorado de Geografia</option>
            <option value="3">Profesorado de Matematica</option>
            <option value="4">TUDAI</option>
            <option value="5">Ingenieria Industrial</option>
            <option value="6">Ingenieria Informatica y Sistemas</option>
            <option value="7">Ingenieria Electronica</option>
            <option value="8">Ingenieria Civil</option>
            <option value="9">Administracion de Empresas</option>
    </select>

    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>

