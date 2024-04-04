<?php include('config.php'); ?>

<!doctype html>
<html lang="en">
    <head>
        <title>Muusikapood OÜ</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous" 
        />
    </head>

    <body>
        <div class="container">
        <h1>Ostud</h1>
        <h2>Uue albumi lisamine</h2>

        <?php
        //Päring mille saadan andmebaasi
        //$paring = "SELECT album,hind FROM `albumid` ORDER BY artist ASC LIMIT 11";
        //Saadan soovitud ühendusele minu päringu
        $paring = "SELECT ostud.id, kliendid.eesnimi, kliendid.perenimi, albumid.album
        FROM ostud
        INNER JOIN kliendid ON ostud.kliendid_id=kliendid.id
        INNER JOIN albumid ON ostud.albumid_id=albumid.id;";

        $valjund = mysqli_query($yhendus, $paring);
        //Sikutame andmebaasi vastuse
        $rida = mysqli_fetch_assoc($valjund);
        //Test
        while($rida = mysqli_fetch_assoc($valjund)){
            //print_r($rida);
            //echo $rida['artist']." - ".$rida['album']."<br>";
            print_r($rida);
        }

        ?>
        </div>
        </div>
    </body>
</html>