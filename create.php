<?php

include("includes/connect.php");

// OBTENER VALORES DEL FORMULARIO
$titulo = $_POST['titulo'];
$compañia = $_POST['compañia'];
$año = $_POST['año'];
$programador = $_POST['programador'];
$genero = $_POST['genero'];
$id = $_POST['id'];

if($_POST['id'] == ""){
    // CUANDO ES NUEVO
    // INSERTAR LA INFORMACIÓN EN LA TABLA "clasicos"
    $conn->query("INSERT INTO clasicos VALUES ('','$titulo','$compañia','$año','$programador','$genero')");
    
    // DEVUELVE ÚLTIMO "id" INSERTADO EN LA BBDD
    $id = $conn->insert_id;
}else{
    // CUANDO YA EXISTE
   // Actualizamos LA INFORMACIÓN EN LA TABLA "clasicos"
    $conn->query("UPDATE clasicos SET titulo = '$titulo', compañia = '$compañia', año = '$año', programador = '$programador', genero = '$genero' WHERE id=$id");
}

// DESCONECTA LA BBDD
include("includes/disconnect.php");

// REDIRECCIONAR AL USUARIO AL OBJETO QUE ACABA DE CREAR
header('Location: /blog/game.php?id='.$id);
exit;
?>