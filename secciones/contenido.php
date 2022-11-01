<div class="cuerpo">
    <?php include('../templates/cabecera.php'); ?>
    <?php include('contenidoBD.php')?>
    <link rel="stylesheet" href="../src/layout.css">
    <!--Agregar Cuenta -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <form action="" method="post">
                    <div class="card">
                        <div class="card-header">
                            Administrar Contenido.
                        </div>
                        <div class="card-body">
                            <!--ID_Contenido-->
                            <div class="mb-3">
                                <label for="" class="form-label">ID_Contenido</label>
                                <input type="INT" class="form-control" name="ID_Contenido" id="ID_Contenido" value="<?php echo $ID_Contenido;?>" aria-describedby="helpId" placeholder="Agregar ID_Contenido">
                            </div>
                            <!--ID_Contenido-->
                            <!--ContenidoDesbloqueado-->
                            <div class="mb-3">
                                <label for="" class="form-label">Contenido</label>
                                <input type="text" class="form-control" name="ContenidoDesbloqueado" value="<?php echo $ContenidoDesbloqueado;?>" id="ContenidoDesbloqueado" aria-describedby="helpId" placeholder="Agregar Contenido">
                            </div>
                            <!--ContenidoDesbloqueado-->
                            <!--Botones-->
                            <div class="btn-group" role="group" aria-label="Button group name">
                                <button type="submit" name="accion" value="agregar" class="btn btn-success ml-5">Agregar.</button>
                            
                                <button type="submit" name="accion" value="borrar" class="btn btn-danger ml-5">Eliminar</button>
                            </div>
                            <!--Botones-->
                        </div>
                    </div>
                </form>
            </div>
            <!-- Tabla Cuentas -->
            <div class="col-md-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID_Contenido</th>
                            <th scope="col">ContenidoDesbloqueado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($listaContenido as $contenido){?>
                        <tr>
                            <td>
                                <?php echo $contenido['ID_Contenido']; ?>
                            </td>
                            <td>
                                <?php echo $contenido['ContenidoDesbloqueado']; ?>
                            </td>
                            <td>
                                <form action="" method="post">
                                    <input type="hidden" name="ID_Contenido" id="ID_Contenido" value="<?php echo $contenido['ID_Contenido']; ?>" />
                                    <input type="submit" name="accion" value="Seleccionar." class="btn btn-info" />
                                </form>
                            </td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table </div>
            </div>
            <!--Eliminar Cuenta -->
        </div>
    </div>

    <?php include('../templates/pie.php'); ?>
</div>