<?php

    // CONECTAR A LA BD
    include("includes/connect.php");

    // TRAER TODA LA LISTA DE JUEGOS
    $resultado = $conn->query("SELECT * FROM clasicos;");
    
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
        <section id="list">
           <table class="tabla">
                <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>Titulo</th>
                        <th>Año</th>
                        <th>Compañia</th>
                        <th>Ver</th>
                        <th>Editar</th>
                        <th>Borrar</th>
                    </tr>
                </thead>
                <tbody>
               <?php

               // RECORRE ARRAY CARGANDO EN CADA VUELTA EL SIGUIENTE
               // JUEGO HASTA LLEGAR AL ÚLTIMO
                while($game = $resultado->fetch_assoc()) {
                  
                ?>
               <tr>
                   <!-- IMPRIME UNO DETRAS DE OTRO -->
                    <td><img src="/blog/img/<?= $game["id"] ?>.png" width="50"></td>
                    <td><?= $game["titulo"] ?></td>
                    <td><?= $game["año"] ?></td>
                    <td><?= $game["programador"] ?></td>
                    <td><a href="/blog/game.php?id=<?= $game["id"] ?>">Ver</a></td>
                    <td><a href="/blog/form.php?id=<?= $game["id"] ?>">Editar</a></td>
                    <td><a href="/blog/delete.php?id=<?= $game["id"] ?>">Borrar</a></td>
               </tr>
                <?php
                }
               ?>
               </tbody>
           </table>

        </section>       
    </div>
    
    <!-- ===================== -->
    <!-- === PIE DE PÁGINA === -->
    <!-- ===================== -->
    <?php include("includes/footer.php") ?>
    

</body>

<script>
    $('table').DataTable();
</script>

</html>