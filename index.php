<?php

    // CONECTAR A LA BD
    include("includes/connect.php");

    // TRAER TODA LA LISTA DE JUEGOS
    $resultado = $conn->query("SELECT * FROM clasicos limit 3;");
    
    // DESCONECTAR BD
    include("includes/disconnect.php");
?>
<!DOCTYPE html>
<html lang="es">

<?php include("includes/head.php") ?>

<body>

    <!-- ============================================= -->
    <!-- === CONTENEDOR PRINCIPAL | toda la página === -->
    <!-- ============================================= -->

    <div class="contenedor">

        <?php include("includes/menu.php") ?>

        <!-- imagen principal -->
        <div id="imagen"></div>

        <!-- ======================================== -->
        <!-- === CONTENIDO 1 fila con 3 ARTICULOS === -->
        <!-- ======================================== -->

        <section class="fila">

            <h2>Segundas partes nunca fueron buenas... No siempre</h2>

            <p>La historia nos dejó estas obras maestras en sus géneros que superaron con creces a sus predecesores.</p>


            <?php
               // RECORRE ARRAY CARGANDO EN CADA VUELTA EL SIGUIENTE
               // JUEGO HASTA LLEGAR AL ÚLTIMO
                while($game = $resultado->fetch_assoc()) {                  
            ?>
                <article class="columna">
                    <h2><?= $game["titulo"] ?></h2>
                    <a href="game.php?id=1"><img src="/blog/img/<?= $game["id"] ?>.png"></a>
                    <p><?= $game["programador"] ?> - <?= $game["año"] ?></p>
                </article>
            <?php
                }
            ?>
        </section>

        
    </div>
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