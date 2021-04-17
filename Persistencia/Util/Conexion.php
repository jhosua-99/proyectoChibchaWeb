<?php
class Conexion{
 public function conectarDB(){
    $user=  "postgres";
    $password= "12345678";
    $conexion = pg_connect("host=library.cltszkymw618.sa-east-1.rds.amazonaws.com port=5432 dbname=postgres user=$user password=$password");
    return $conexion;
 }
 public function cerrarDB($conexion){
    $cerrar = pg_close($conexion);
    return $cerrar;
 }
}
?>