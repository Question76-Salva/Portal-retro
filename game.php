<?php

    // LLAMADA A LA BASE DE DATOS
    include("includes/connect.php");

    // CONSULTA "SELECT" Y MUESTRA UN JUEGO A TRAVES DE SU "id" POR "GET" EN LA URL "game.php?id=xxx"    
    $resultado = $conn->query("SELECT * FROM clasicos WHERE id=".$_GET["id"].";");

    // AL SER SOLO UNO, REALIZAMOS SOLO UN FETCH
    $game = $resultado->fetch_assoc();

    // DESCONECTA
    include("includes/disconnect.php");
?>

<!DOCTYPE html>
<html lang="es">

<?php include("includes/head.php") ?>

<body>

    <?php include("includes/menu.php") ?>

    <section id="game">

        <img src="img/<?= $game["id"]?>.png">
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Año</th>
                    <th>Compañia</th>
                </tr>
            </thead>

            <tr>
                <td><?= $game["titulo"] ?></td>
                <td><?= $game["año"] ?></td>
                <td><?= $game["programador"] ?><td>
            </tr>

        </table>

    </section>
   
    <!-- ===================== -->
    <!-- === PIE DE PÁGINA === -->
    <!-- ===================== -->
    <?php include("includes/footer.php") ?>
</body>
<script>

    // EFECTO SOMBRA EN IMAGENES PUNTO DE LUZ REFERENCIA DEL RATÓN
    
     $( document ).ready(function() {
          $( document ).mousemove(function( event ) {
            $("img").each(function( index ) {
              x = (($(this).offset().left + ($(this)[0].offsetWidth  / 2)) - event.originalEvent.pageX) / 100
              y = (($(this).offset().top  + ($(this)[0].offsetHeight / 2)) - event.originalEvent.pageY) / 100
              $(this).css(
                {
                  "-webkit-box-shadow": x + "px "+ y +"px 5px 1px rgba(0,0,0,0.75)",
                  "-moz-box-shadow": x + "px "+ y +"px 5px 1px rgba(0,0,0,0.75)",
                  "box-shadow": x + "px "+ y +"px 5px 1px rgba(0,0,0,0.75)",
                }
              );
            });
          });
        });
</script>
</html>