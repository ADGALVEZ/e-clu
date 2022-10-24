<?php


$servidor='localhost';
$user='root'
$clave=''
$base='eclub'


$con= mysqli_conect ($servidor, $user,$clave,$base);
if (!$con) {
    die("La conexion ha fallado: " . mysqli_conect_error());
}
echo "conexion exitosa";
mysqli_close($con);


?>
