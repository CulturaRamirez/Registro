<?php

$Usuari=$_POST['Usuari'];
$passwword=$_POST['passwword'];

//conectar con base de datos bdregistro

$conexion=mysqli_connect ("localhost", "root", "", "registro"); 
$consulta ="SELECT * FROM usuarios WHERE Usuari ='$Usuari' and password= '$passwword'";
$resultado =mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);
if ($filas>0){
    header("location:Rtabla.php");
    }
    else{
        
        echo "Usuario o password incorrectos";
        
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>