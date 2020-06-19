<?php

// EN EL CASO DE QUE NOS LLEGUE LA VARIABLE "id" BUSCAMOS ESE "id" EN LA BBDD
if(isset($_GET["id"])){

    // LLAMADA A LA BASE DE DATOS
    include("includes/connect.php");

    // CONSULTA "SELECT" Y MUESTRA UN JUEGO A TRAVES DE SU "id" POR "GET" EN LA URL "game.php?id=xxx"    
    $resultado = $conn->query("SELECT * FROM clasicos WHERE id=".$_GET["id"].";");

    // AL SER SOLO UNO, REALIZAMOS SOLO UN FETCH
    $game = $resultado->fetch_assoc();

    // DESCONECTA
    include("includes/disconnect.php");
}else{
    // EN EL CASO DE QUE NO NOS LLEGUE "id" CREAMOS UN OBJETO CON TODOS SUS CAMPOS VACIOS PARA EVITAR LOS FALLOS
    $game = array(
        "titulo" => "",
        "compañia" => "",
        "año" => "",
        "programador" => "",
        "genero" => "",
        "id" => ""
    );
}

?>
<!DOCTYPE html>
<html lang="es">
    <?php include("includes/head.php") ?>
<body>
    <?php include("includes/menu.php") ?>
    <section class="form-register">

        <form method="post" action="create.php" id="form-game">

            <h4>Registro de Programas</h4>

            <input class="controls" type="text" name="titulo" id="titulo" placeholder="Ingrese título" value="<?= $game["titulo"] ?>" required>
            <input class="controls" type="text" name="compañia" id="compañia" placeholder="Ingrese compañia" value="<?= $game["compañia"] ?>" required>
            <input class="controls" type="number" name="año" id="año" max="9999" placeholder="Ingrese año" value="<?= $game["año"] ?>" required>
            <input class="controls" type="text" name="programador" id="programador" placeholder="Ingrese programador" value="<?= $game["programador"] ?>" required>
            <input class="controls" type="text" name="genero" id="genero" placeholder="Ingrese genero" value="<?= $game["genero"] ?>" required>
            <input class="controls" type="hidden" name="id" id="id" value="<?= $game["id"] ?>">
            <?php if(isset($_GET["id"])){ ?>
                <input class="botons" type="submit" value="Actualizar" required>
            <?php }else{?>
                <input class="botons" type="submit" value="Registrar" required>
            <?php }?>
        </form>

    </section>
   
    <?php include("includes/footer.php") ?>
</body>

</html>