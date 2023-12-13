<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4"><?= $titulo?> eliminados</h3>
            <div>
                <p>
                   
                    <a href="<?=base_url();?>categorias" class="btn btn-warning">Productos</a>
                </p>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered" id="datatablesSimple" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>                           
                            <th>Nombre</th>                         
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                     <?php foreach($datos as $dato) { ?>
                        <tr>
                            <td><?=$dato['id'];?></td>                       
                            <td><?=$dato['nombre'];?></td>                          
                       
                            <td> <a href="<?=base_url().'categorias/reingresar/'.$dato['id'];?>"><i class="fa-solid fa-circle-arrow-up"></i>
                            </a></td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>