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
        <form action="#" method="get">
            Otsi: <input type="text" name="s">
            <input type="submit" value="Otsi">

        </form>
        <div class="row row-cols-1 row-cols-md-6 g-4 pt-4">

        <?php
        if (isset($_GET["s"])) {
        $s = $_GET["s"];
        $paring = 'SELECT album, hind FROM albumid WHERE album LIKE "%'.$s.'%"';
        } else {
        $paring = "SELECT album, hind FROM albumid ORDER BY artist ASC LIMIT 11";
        }

        //Päring mille saadan andmebaasi
        //$paring = "SELECT album,hind FROM `albumid` ORDER BY artist ASC LIMIT 11";
        //Saadan soovitud ühendusele minu päringu
        $valjund = mysqli_query($yhendus, $paring);
        //Sikutame andmebaasi vastuse
        $rida = mysqli_fetch_assoc($valjund);
        //Test
        while($rida = mysqli_fetch_assoc($valjund)){
            //print_r($rida);
            //echo $rida['artist']." - ".$rida['album']."<br>";
            echo '
            <div class="col">
            <div class="card">
              <img src="https://picsum.photos/400/400" alt="pildike">
              <div class="card-body">
                <h5 class="card-title">'.$rida['album'].'</h5>
                <p class="card-text">'.$rida['hind'].'€</p>
                <a href="#" class="btn btn-danger">Osta</a>
              </div>
            </div>
          </div>
            ';
        }

        ?>
        </div>
        </div>
    </body>
</html>