<div class="container">
    <div class="col-md-6">
        <form class="pt-5" method="post" action="enviar-mensaje.php">
            <h3 class="h1 col-md-12 text-left title mb-3 border-bottom border-warning">Trabaja con nosotros</h3>
            <div class="form-group row">
                <label for="nombre" class="col-md-2 col-sm-2 col-form-label">Nombre:</label>
                <div class="col-md-10 col-sm-10">
                    <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre completo">
                </div>
            </div>
            <div class="form-group row">
                <label for="empresa" class="col-md-2 col-sm-2 col-form-label">Empresa:</label>
                <div class="col-md-10 col-sm-10">
                    <input type="text" name="empresa" class="form-control" id="empresa" placeholder="Organizacion">
                </div>
            </div>
            <div class="form-group row">
                <label for="asunto" class="col-md-2 col-sm-2 col-form-label">Asunto:</label>
                <div class="col-md-10 col-sm-10">
                    <input type="text" name="asunto" class="form-control" id="asunto" placeholder="Cotizacion">
                </div>
            </div>
            <div class="form-group row">
                <label for="asunto" class="col-md-2 col-sm-2 col-form-label">Telefono:</label>
                <div class="col-md-10 col-sm-10">
                    <input type="text" name="telefono" class="form-control" id="telefono" placeholder="9 8765 4321">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-md-2 col-sm-2 col-form-label">Email:</label>
                <div class="col-md-10 col-sm-10">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email de contacto">
                </div>
            </div>
            <div class="form-group row">
                <label for="mensaje" class="col-md-2 col-sm-2 col-form-label">Mensaje:</label>
                <div class="col-md-10 col-sm-10">
                    <textarea name="mensaje" id="mensaje" class="form-control" cols="20" rows="5" placeholder="Mensaje..."></textarea>
                    <input type="hidden" name="verificacion">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </form>
    </div>
</div>
