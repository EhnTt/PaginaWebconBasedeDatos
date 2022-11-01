<div class="cuerpo">
    <?php include('../templates/cabecera.php'); ?>
    <?php include('UsuarioBD.php')?>
    <link rel="stylesheet" href="../src/layout.css">
    <!--Agregar Cuenta -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <form action="" method="post">
                    <div class="card">
                        <div class="card-header">
                            Administrar Cuentas
                        </div>
                        <div class="card-body">
                            <!--ID-->
                            <div class="mb-3">
                                <label for="" class="form-label">ID</label>
                                <input type="INT" class="form-control" name="ID" id="ID" value="<?php echo $ID;?>" aria-describedby="helpId" placeholder="Agregar ID">
                            </div>
                            <!--ID-->
                            <!--Email-->
                            <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="text" class="form-control" name="Email" value="<?php echo $Email;?>" id="Email" aria-describedby="helpId" placeholder="Agregar Email">
                            </div>
                            <!--Email-->
                            <!--Contraseña-->
                            <div class="mb-3">
                                <label for="" class="form-label">Contraseña</label>
                                <input type="text" class="form-control" name="Contraseña" value="<?php echo $Contraseña;?>" id="Contraseña" aria-describedby="helpId" placeholder="Escribir una contraseña">
                            </div>
                            <!--Contraseña-->


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
                            <th scope="col">ID</th>
                            <th scope="col">Email</th>
                            <th scope="col">Contraseña</th>
                            <th scope="col">Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($listaUsuarios as $usuario){?>
                        <tr>
                            <td>
                                <?php echo $usuario['ID']; ?>
                            </td>
                            <td>
                                <?php echo $usuario['Email']; ?>
                            </td>
                            <td>
                                <?php echo $usuario['Contraseña'];?>
                            </td>
                            <td>
                                <form action="" method="post">
                                    <input type="hidden" name="ID" id="ID" value="<?php echo $usuario['ID']; ?>" />
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