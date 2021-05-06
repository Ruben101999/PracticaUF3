<?php
    include '../services/connection.php';
        $email = $_POST["email"];
        
        $libro=$_POST['libro'];
        $publicacion=$_POST['publicacion'];
        $seccion=$_POST['seccion'];
        
        
        $resultado= mysqli_query($conexion,"insert into books (name,publication,section)values ('$libro','$publicacion','$seccion');");
        header("Location:../view/admin.bookshop.php?email=$email");
        ?>

