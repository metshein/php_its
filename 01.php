<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP harjutused</title>
</head>
<body>
    <h1>Harjutused 04</h1>
    <?php
        $p = 5;
        switch ($p) {
            case ($p > 10):
                echo "SUPER!";
                break;
            case ($p>=5 && $p<=9):
                echo "TEHTUD!";
                break;
            case ($p<5):
                echo "KASIN!";
                break;
            default:
                echo "Punkte pole lisatud";
                break;
        }

    ?>


   
    <form action="" method="get">
        Lisa sünniaasta: <input type="number" name="synd" min="1900" max="2100" placeholder="2000">
        <input type="submit" value="Leia juubel"><br>
    </form>
    <?php
        if (!empty($_GET['synd'])) {
            $aasta = $_GET['synd']; //tüübi sünniaasta
            $seeAasta = date('Y');  //käesolev aasta
            $vanus = $seeAasta - $aasta; //vanus 
            // var_dump($aasta);       //testimiseks
            if ($vanus % 5 == 0) {      // jääk, et leida juubel
                echo "Sul juubel";
            } else {
                echo "Ei ole juubel";
            }
        }

    ?>
    
    <br>
    <br>
    <?php
        $nr1 = 2;
        $nr2 = 2;
        // < > >= <= == !=  True False
        // OR - VÕI || - üks õige
        // AND - NING && - mõlemad õiged
        if ($nr2 != 0 && $nr1 != 0) {
            $tehe = $nr1 / $nr2;
            echo $tehe;
        } else {
            echo "Nulliga ei saa jagada";
        }


    ?>



    <h1>Harjutused 03</h1>

    <form action="" method="GET">
        Toode 1: <input type="number" name="toode1"><br>
        Toode 2: <input type="number" name="toode2"><br>
        Toode 3: <input type="number" name="toode3"><br>

        <input type="submit" value="Arvuta">
    </form>
    <?php
        if (!empty($_GET['toode1']) && !empty($_GET['toode2']) && !empty($_GET['toode3'])) {
            //GETiga saatsin, GETiga võtan
            $t1 = $_GET['toode1'];
            $t2 = $_GET['toode2'];
            $t3 = $_GET['toode3'];
            $kokku = $t1+$t2+$t3;

            echo "Toode1: $t1 tk<br>";
            echo "Toode2: $t2 tk<br>";
            echo "Toode3: $t3 tk<br>";
            echo "Kõik kokku: $kokku tk";
        }
    ?>



    <h1>Harjutused 02</h1>
    <?php
        $arv1 = 5;              //int
        $arv2 = 3.14;           //float
        $tehe = $arv1 / $arv2;  
        $jaak = $arv1 % $arv2;  //Jääk

        echo "Vastus: $tehe <br>";
        printf("Vastus: %d / %0.2f = %0.2f<br>", $arv1, $arv2, $tehe);
        echo $jaak;
    ?>



    <h1>Harjutused 01</h1>

    <?php
    /*
        Harjutus 01
        8.2.24
        Lihtsalt harjutan
    */
        $enimi = "Mario"; // String
        $pnimi = "Metshein";
        $v = 43;
        $pikkus = 1.8;
        // $enimi = "Maarja";
        $hyydnimi = "THE BOSS";
        $lugu = 'Dr. Alban - "It\'s My Life"';
 
        echo "<p>Tere $enimi \"$hyydnimi\" $pnimi!<br>";
        echo "Vanus: $v<br>Pikkus: $pikkus</p>";
        echo '<p>Lemmik lugu on: '.$lugu.'</p>'; //punkt on kokkuliitmiseks

    ?>

</body>
</html>