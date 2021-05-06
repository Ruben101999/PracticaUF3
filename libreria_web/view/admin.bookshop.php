<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/admin.css">
    
    <title>Admin</title>
</head>

<body>
    <?php
    include '../services/connection.php';
    
    $email = $_GET["email"];
    //$session = $_GET["session"];
    
    //if (!isset($session[$email]))
    //{
    //header("location:../index.php");
    //}
    
    echo '<div class="bienvenido">';
    echo "<p>Hola $email</p>";
    echo "</div>";
    echo '<div class="adios">';
    echo "<a href='../index.php'><button type=\"button\" class=\"logout\"\">logout</button></a>";
    echo "</div>";
     
    echo "<div class='libro'>";
    echo "<a href='../view/insertar.form.php?email=$email'><button type=\"button\" class=\"añadir\">Anadir libro</button></a>";
    echo "</div>";
     
    echo "<div class='busqueda'>";
    echo "<form method='GET' action='admin.bookshop.php'>";
    echo "<input type='hidden' name='email' value='$email'></input>";
    echo "<input type=\"text\" class=\"buscar\" name='titulo' placeholder='buscar por titulo...'></input>";
    
    echo "</div>";
     
    echo "<div class='filtro'>";
    echo "<input type=\"submit\" class=\"filtrar\" name='filtro' value='Filtrar'></input>";
    echo "</form>";
    echo "</div>";
     
     
    echo "<div class='tabla'>";
    echo "<table>";
    echo "<th>Titulo";
    echo "</th>";
    echo "<th>Publicacion";
    echo "</th>";
    echo "<th>Seccion";
    echo "</th>";
    
    if (isset($_REQUEST['filtro'])) {
        $titulo=$_REQUEST['titulo'];
        $libro= mysqli_query($conexion,"SELECT books.name as name, books.publication as publication, sections.name as section FROM books INNER JOIN sections on books.section=sections.id where books.name like '%$titulo%';");
    }
    else {
        $libro= mysqli_query($conexion,"SELECT books.name as name, books.publication as publication, sections.name as section FROM books INNER JOIN sections on books.section=sections.id;");
    }
    
    
    foreach ($libro as $libro){
    echo "<tr>";
    echo "<td>{$libro['name']}";
    echo "</td>";
    echo "<td>{$libro['publication']}";
    echo "</td>";
    echo "<td>{$libro['section']}";
    echo "</td>";
    echo "</th>";
    }
    echo "</table>";
    echo "</div>";
?>
</body>


</html>




