<?php
function conn(){
    $hostname ="localhost";
    $usuariodb= "root";
    $passworddb= "";
    $dbname= "usuarios";
    // se genera la conexion de la base con el servidor
 $conectar =mysqli_connect ($hostname,$usuariodb, $passworddb, $dbname);
 return $conectar;
}

?>