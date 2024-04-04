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
        <h1>Muusikapood OÜ</h1>
        <h2>Albumine muutmine</h2>

        <form action="#" method="get">
        <?php
        if (!empty($_GET['id'])) {
            $id = $_GET['id'];
            $paring = "SELECT * FROM albumid WHERE id=".$id;
            //print_r($paring);
            $valjund = mysqli_query($yhendus, $paring);
            //Sikutame andmebaasi vastuse
            $rida = mysqli_fetch_assoc($valjund);
            print_r($rida);
            echo '<br>
            id <input type="number" name="id" hidden value="'.$rida['id'].'"><br>
            artist <input type="text" name="artist" value="'.$rida['artist'].'"><br>
            album <input type="text" name="album" value="'.$rida['album'].'"><br>
            aasta <input type="number" name="aasta" min="1900" value="'.$rida['aasta'].'"><br>
            hind <input type="number" name="hind" step="0.01" value="'.$rida['hind'].'"><br>
            <input type="submit" value="Muuda" name="muuda">
            ';
        }

        if (!empty($_GET['id']) && !empty($_GET['muuda'])) {
            $id = $_GET['id'];
            $artist = $_GET['artist'];
            $album = $_GET['album'];
            $aasta = $_GET['aasta'];
            $hind = $_GET['hind'];
            $paring = "UPDATE albumid SET artist='$artist', album='$album', aasta='$aasta', hind='$hind' WHERE id=".$id;
            //print_r($album);
            $valjund = mysqli_query($yhendus, $paring);
            print_r($valjund);
            if ($valjund) {
                //echo "Lisamine õnnestus!</br>";
                header("Location: index.php?msg=true");
            } else {
                //echo "Viga ebaõnnestus!</br>";
                header("Location: index.php?msg=false");
            }
        }

         ?>
</form>


</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>