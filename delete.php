<?php

include("includes/connect.php");

// CAPTURAR EL "id" DEL JUEGO A BORRAR
$id = $_GET['id'];

// INSERTAR LA INFORMACIÓN EN LA TABLA "clasicos"
$conn->query("DELETE FROM `clasicos` WHERE `clasicos`.`id` = $id;");

// DESCONECTA LA BBDD
include("includes/disconnect.php");

// REDIRECCIONAR AL USUARIO AL OBJETO QUE ACABA DE CREAR
header('Location: /blog/list.php');
exit;
?>