<?=$this->extend('templates/layout'); ?>

<?=$this->section('contenido'); ?>

<?=validation_list_errors();?>

<h2 class="mb-4">Nuevo producto </h2>

<form action="<?= base_url('productos/guarda'); ?>" method="post" autocomplete="off">

    <div class="mb-3 row">
        <label for="id_producto" class="col-sm-2 form-label">Id Producto</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="id_producto" id="id_producto" <?=set_value('id_producto');?> autofocus>
        </div>
    </div>

    <div class="mb-3 row">
        <label for="id_producto" class="col-sm-2 form-label">Nombre</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="nombre" id="nombre" <?=set_value('id_producto');?> autofocus>
        </div>
    </div>

    <div class="mb-3 row">
        <label for="id_producto" class="col-sm-2 form-label">Precio</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="precio" id="precio" <?=set_value('id_producto');?> autofocus>
        </div>
    </div>

    <div class="mb-3 row">
        <label for="id_producto" class="col-sm-2 form-label">Stock</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="stock" id="stock" <?=set_value('id_producto');?> autofocus>
        </div>
    </div>
    <input type="submit" name="mysubmit" value="Guardar">

</form>
   
<?=$this->endSection();?>