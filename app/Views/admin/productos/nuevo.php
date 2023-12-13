<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4"><?= $titulo ?></h3>

            <form method="POST" action="<?= base_url(); ?>productos/insertar" autocomplete="off">
                <div class="form-group">
                    <div class="row">
                    <div class="col-12 col-sm-6">
                            <label>Codigo</label>
                            <input class="form-control" id="codigo" name="codigo" type="text" autofocus required />
                        </div>

                        <div class="col-12 col-sm-6">
                            <label>Nombre</label>
                            <input class="form-control" id="nombre" name="nombre" type="text" autofocus required />
                        </div>

                        <div class="col-12 col-sm-6">
                            <label>Descripcion</label>
                            <input class="form-control" id="descripcion" name="descripcion" type="text" autofocus required />
                        </div>

                        <div class="col-12 col-sm-6">
                            <label>Existencias</label>
                            <input class="form-control" id="existencias" name="existencias" type="text" autofocus required />
                        </div>

                        <div class="col-12 col-sm-6">
                            <label>Stock_minimo</label>
                            <input class="form-control" id="stock_minimo" name="stock_minimo" type="text" autofocus required />
                        </div>
                        
                        <div class="col-12 col-sm-6">
                            <label>Precio</label>
                            <input class="form-control" id="precio" name="precio" type="text" autofocus required />
                        </div>
                        
                        <div class="col-12 col-sm-6">
                            <label>Id categoria</label>
                            <input class="form-control" id="id_categoria" name="id_categoria" type="text" autofocus required />
                        </div>
                    </div>
                </div></br>
                <a href="<?= base_url(); ?>/productos" class="btn btn-primary">Volver</a>
                <button type="submit" class="btn btn-success">Guardar</button>
            </form>
        </div>
    </main>