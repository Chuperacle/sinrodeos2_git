<div class="modal-content">
    <form action="">
        <div class="modal-header">
            <div class="modal-title">Editar datos</div>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Nombre: *</label>

                <div class="col-sm-8">
                    <input type="text" id="nombre_completo" class="form-control" value="{{ $datos->nombre }}" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Apellido: *</label>

                <div class="col-sm-8">
                    <input type="text" id="apellido" class="form-control" value="{{ $datos->apellido }}" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Edad: *</label>

                <div class="col-sm-8">
                    <input type="text" id="edad" class="form-control" value="{{ $datos->edad }}" />
                </div>
            </div>
        </div>
        <div class="modal-footer"></div>
    </form>
</div>
