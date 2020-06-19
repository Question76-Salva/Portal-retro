<!DOCTYPE html>
<html lang="es">

<?php include("includes/head.php") ?>

<body>

    <?php include("includes/menu.php") ?>

    <?php 

   
    if($_GET["id"] == 1){

    ?>
    <section id="fila">

        <article class="columna">
            <img src="img/Match Day II.png">
            <p>El mejor simulador de fútbol de los micros de 8bits.
                Cuantas horas disfruté con este juego, tanto jugando contra el ordenador como contra otro jugador.
                Hasta la llegada de este programa, los simuladores de fútbol en los micros de 8 bits desjaban mucho que
                desear, con este juego se llegó a una perfección técnica que aprovechaba cada ciclo de la cpu del
                ordenador. La jugabilidad, así como el tener que pasar el balón , pases de tacón, rematar y cabecear lo
                hicieron el juego de fútbol por excelencia. Otra joya que nos dejaron John Ritman y Bernie Drummond.</p>
        </article>


        <div id="contenedor">
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Año</th>
                        <th>Compañia</th>
                    </tr>
                </thead>

                <tr>
                    <td>Match Day II</td>
                    <td>1987</td>
                    <td>Ocean Softwrare</td>
                </tr>

            </table>

        </div>

    </section>
    <?php 

    }

    if($_GET["id"] == 2){

    ?>


    <section id="fila">
        <article class="columna">
            <img src="img/Target Renegade.png">
            <p>Genial arcade beat´n´up. Obra maestra del género.
                Para mi el mejor juego realizado para el Amstrad CPC, no era una simple conversión del ZX Spectrum. El
                scroll es impresionante, la jugabilidad es una pasada, así como los detalles gráficos, colorido y la
                impresionante melodía que acompaña en cada fase. Lo disfruté al máximo, insuperable.</p>
        </article>
        <div id="contenedor">
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Año</th>
                        <th>Compañia</th>
                    </tr>
                </thead>

                <tr>
                    <td>Target Renegade</td>
                    <td>1988</td>
                    <td>Imagine Softwrare</td>
                </tr>

            </table>

        </div>

    </section>
    <?php 

    }

    if($_GET["id"] == 3){

    ?>

    <section id="fila">

        <article class="columna">
            <img src="img/Saboteur II.png">
            <p>Mapeado extenso, infiltración y música para el recuerdo.
                Desde la impactante portada de la cinta de cassette, todo en este juego me fascinó. Fué de los 3
                primeros que compré para mi Amstrad y he de reconocer que disfruté muchas horas jugando hasta que
                conseguí acabarlo. La melodia del juego era fascinante, así como su extenso mapeado y detalles que hacen
                de este juego uno de los clásicos en su género.</p>
        </article>


        <div id="contenedor">
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Año</th>
                        <th>Compañia</th>
                    </tr>
                </thead>

                <tr>
                    <td>Saboteur II</td>
                    <td>1987</td>
                    <td>Durell Softwrare</td>
                </tr>

            </table>

        </div>

    </section>
    <?php 
    }
    ?>
    <!-- ===================== -->
    <!-- === PIE DE PÁGINA === -->
    <!-- ===================== -->
    <?php include("includes/footer.php") ?>
</body>

</html>