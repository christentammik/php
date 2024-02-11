<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP harjutused</title>
</head>
<body>
    <h1>Harjutus 04</h1>
<?php
    $p = 3;
    switch ($p) {
        case ($p > 10):
            echo "SUPER";
            break;
        case ($p>=5 && $p<=9):
            echo "Tehtud!";
            break;
        case ($p<5):
            echo "KASIN!";
            break;
        default:
            echo "Punkte pole lisatud";
            break;
    }
?>
    <form action="" method="GET">
        Lisa sünniaasta <input type="number" name="synd" min="1900" max="2100" placeholder="2000">
        <input type="submit" value="Leia juubel"><br>
    </form>
<?php
    if (!empty($_GET['synd'])) {
        $aasta =  $_GET['synd'];
        $seeAasta = date ('Y');
        $vanus = $seeAasta - $aasta; 
        if ($vanus % 5 == 0) {
            echo "Sul juubel";
        } else {
            echo "Ei ole juubel";
        }
    }

?>

<?php
    $nr1 = 5;
    $nr2 = 2;
    // < > >= <= == != TRUE FALSE
    // OR - VÕI - ÜKS ÕIGE
    // AND - MÕLEMAD ÕIGED

    if ($nr2 > 0 && $nr1 != 0) {
        $tehe = $nr1 / $nr2;
        echo $tehe;
    } else {
        echo "Nulliga ei saa jagada";
    }

?>
    <h1>Harjutus 03</h1>

    <form action="" method="GET">
        Toode 1: <input type="number" name="toode1"><br>
        Toode 2: <input type="number" name="toode2"><br>
        Toode 3: <input type="number" name="toode3"><br>
        <input type="submit" value="Arvuta">
</form>
    <?php
    if (!empty($_GET["toode1"]) && $t2 = !empty($_GET["toode2"]) && $t3 = !empty($_GET["toode3"])) {
    //GETiga saatsin, GETiga võtan
    $t1 = $_GET["toode1"];
    $t2 = $_GET["toode2"];
    $t3 = $_GET["toode3"];

    $kokku = $t1+$t2+$t3;

    echo "Toode1: $t1 <br>";
    echo "Toode2: $t2 <br>";
    echo "Toode3: $t3 <br>";
    echo "Kõik kokku: $kokku tk";
    } 
?>

    <h1>Harjutus 02</h1>
    <?php
        $arv1 = 5; //int
        $arv2 = 3; //float
        $tehe = $arv1/$arv2; //String
        $jaak = $arv1 % $arv2; //Jaak

        echo "Vastus: $tehe";
        printf("Vastus: %d / %0.2f = %0.2f<br>", $arv1, $arv2, $tehe);
        echo $jaak;

    ?>

    <h1>Harjutused 1</h1>
    <?php
    /*
        Harjutus 01
        8.2.24
        Testing
    */
        $enimi = "Mario";
        $pnimi = "Metshein";
        // $enimi = "Mari";

        $v = 43;
        $pikkus = 1.8;

        $hyydnimi = "THE B0SS";
        $lugu = 'Dr. Alban - "It\'s my life"';


        echo "<p>Tere $enimi \"$hyydnimi\" $pnimi!<br>";
        echo "Vanus: $v<br>Pikkus: $pikkus</p>"; 
        echo '<p>Lemmiklugu on: '.$lugu.'</p>'; //punkt on elementide kokkuliitmiseks


    ?>
</body>
</html>