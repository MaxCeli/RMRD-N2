<?php
session_start();
if(!empty($_POST["entrar"])){
    if(!empty($_POST["correo"]) and !empty($_POST["contra"])){
$usuario=$_POST["correo"];
$password =$_POST["contra"];
$sql=$conexion->query("SELECT * FROM visitas where email='$usuario' and clave='$password'");
if($datos=$sql->fetch_object()) {
    $_SESSION["id"]=$datos->id;
    $_SESSION["nombre"]=$datos->nombre;
    $_SESSION["cedula"]=$datos->NCedula;
    header("location: ../c_demostrativas/c_demo.php");
}else{
    echo "<div class='alert alert-danger'>Acesso denegado</div>";
}
    }else{
        echo "Campos vacios";
    }
}
?>