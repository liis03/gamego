<?=$this->extend('templates/layout');?>
<!-- Abrir seccion -->
<?=$this->section('contenido');?>

<h1>Productos</h1>
<table class="table">
    <thead>
        <th>Id del producto</th>
        <th>Nombre</th>
        <th>Stock</th>
        <th>Almacen</th>
    </thead>
    <tbody>
        <?php foreach($productos as $producto) : ?>
            <tr>
                <td><?=$producto['id_producto'];?></td>
                <td><?=$producto['nombre'];?></td>
                <td><?=$producto['stock'];?></td>
                <td><?=$producto['almacen'];?></td>
            </tr>
            <tr></tr>
            <tr></tr>

        <?php endforeach;?>
    </tbody>
</table>

<?=$this->endSection();?>

<?=$this->section('scripts');?>

<script>
    alert('Hola JS');
</script>
<?=$this->endSection();?>
