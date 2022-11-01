
<?php 

include_once 'bd.php';
$conexionBD=BD::crearInstancia();

$ID=isset($_POST['ID'])?$_POST['ID']:'' ;
$Email=isset($_POST['Email'])?$_POST['Email']:'' ;
$Contraseña=isset($_POST['Contraseña'])?$_POST['Contraseña']:'' ;
$accion=isset($_POST['accion'])?$_POST['accion']:'' ;



if ($accion!=''){
    switch($accion){
        case 'agregar':
            $sql="INSERT INTO Usuarios (ID, Email, Contraseña) VALUES (NULL, '$Email', '$Contraseña')";
            $consulta=$conexionBD->prepare($sql);
            $consulta->execute();

            
        break;
        case 'borrar':
            $sql="DELETE FROM Usuarios WHERE ID=$ID";
            $consulta=$conexionBD->prepare($sql);
            $consulta->execute();
        break;
        case 'Seleccionar.':
            $sql="SELECT * FROM Usuarios WHERE ID=$ID";
            $consulta=$conexionBD->prepare($sql);
            $consulta->execute();
            $Usuario=$consulta->fetch(PDO::FETCH_ASSOC);
            $Email=$Usuario['Email'];
            $Contraseña=$Usuario['Contraseña'];

        break;
        }
}
$consulta=$conexionBD->prepare("SELECT * FROM Usuarios");
$consulta->execute();
$listaUsuarios=$consulta->fetchALL();




?>