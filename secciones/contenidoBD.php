<?php
include_once "bd.php";
$conexionBD=BD::crearInstancia();



$ID_Contenido=isset($_POST['ID_Contenido'])?$_POST['ID_Contenido']:'' ;
$ContenidoDesbloqueado=isset($_POST['ContenidoDesbloqueado'])?$_POST['ContenidoDesbloqueado']:'' ;

$accion=isset($_POST['accion'])?$_POST['accion']:'' ;



if ($accion!=''){
    switch($accion){
        case 'agregar':
            $sql="INSERT INTO Contenido (ID_Contenido, ContenidoDesbloqueado) VALUES (NULL, '$ContenidoDesbloqueado')";
            $consulta=$conexionBD->prepare($sql);
            $consulta->execute();

            
        break;
        case 'borrar':
            $sql="DELETE FROM Contenido WHERE ID_Contenido=$ID_Contenido";
            $consulta=$conexionBD->prepare($sql);
            $consulta->execute();
        break;
        case 'Seleccionar.':
            $sql="SELECT * FROM Contenido WHERE ID_Contenido=$ID_Contenido";
            $consulta=$conexionBD->prepare($sql);
            $consulta->execute();
            $Contenido=$consulta->fetch(PDO::FETCH_ASSOC);
            $ContenidoDesbloqueado=$Contenido['ContenidoDesbloqueado'];

        break;
        }
}
$consulta=$conexionBD->prepare("SELECT * FROM Contenido");
$consulta->execute();
$listaContenido=$consulta->fetchALL();




?>
