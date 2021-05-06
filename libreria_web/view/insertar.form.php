<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Anadir libro</title>
        <link rel="stylesheet" type="text/css" href="../css/insertar.css">
        <?php
        $email = $_GET["email"];
        
   echo "</head>";
   echo "<body>";
   echo '<div class="bienvenido">';
   echo "<p>Hola $email</p>";
   echo "</div>";
   echo '<div class="adios">';
   echo "<a href='../index.php'><button type=\"button\" class=\"logout\"\">logout</button></a>";
   echo "</div>";
    
   echo "<form action=\"../process/insertar.php\" method=\"post\">";
   echo "<input type='hidden' name='email' value='$email'>";
            
   echo  "<p>Libro: <input type='text' name='libro'></p>";
   echo  "<p>Publicacion: <input type='text' name='publicacion'></p>";
   echo  "<p>Seccion: <input type='text' name='seccion'></p>";
   echo  "<p><input type='submit' value='Enviar'></p>";
   echo  "</form>";
    ?>    
        
  
    </body>
</html>




