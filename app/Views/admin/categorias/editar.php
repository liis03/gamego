<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4"><?= $titulo ?></h3>

            <form method="POST" action="<?= base_url(); ?>/categorias/actualizar" autocomplete="off">
                <input type="hidden" name="id" value="<?= $datos['id']; ?>" />

                <div class="form-group">
                    <div class="row">
                    
                        <div class="col-12 col-sm-6">
                            <label>Nombre</label>
                            <input class="form-control" id="nombre" name="nombre" type="text" value="<?= $datos['nombre']; ?>" autofocus required />
                        </div>                       
                    
                    </div>
                </div></br>
                <a href="<?= base_url(); ?>/categorias" class="btn btn-primary">Regresar</a>
                <button type="submit" class="btn btn-success">Guardar</button>
            </form>
        </div>
    </main>