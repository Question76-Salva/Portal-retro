<!DOCTYPE html>
<html lang="es">

<?php include("includes/head.php") ?>

<body>

    <?php include("includes/menu.php") ?>

    <section id="about">

        <h1>Sobre mi</h1>
        <h2> Salvador Belloso Santos</h2>
        <img src="img/foto.jpeg">
        <p>Estudiante de Desarrollo Web y Retro Nostalgico. Me interesan las tecnologías web tanto de Front End como de Back End</p>

        

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
              x = (($(this).offset().left + ($(this)[0].offsetWidth  / 2)) - event.originalEvent.pageX) / 45
              y = (($(this).offset().top  + ($(this)[0].offsetHeight / 2)) - event.originalEvent.pageY) / 45
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