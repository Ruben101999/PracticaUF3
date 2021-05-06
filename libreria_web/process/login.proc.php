<?php
//inicio la conexión escrita en recibir.php
include '../services/connection.php';

$email=$_REQUEST['email'];
$pass=$_REQUEST['password'];

$usernada=mysqli_real_escape_string($conexion,$email);
$sql="select * from users where email='{$usernada}' and password='{$pass}';";
$result=mysqli_query($conexion,$sql);
$num=mysqli_num_rows($result);
mysqli_free_result($result);
if ($num==1)
{
    session_start();
    $_session['email']=$email;
    header("Location:../view/admin.bookshop.php?email=$email");
}
else {
    header("location:../index.php");
}

mysqli_free_result($result);
?>