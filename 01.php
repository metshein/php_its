<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP harjutused</title>
</head>
<body>
    <h1>Harjutused 01</h1>

    <?php
    /*
        Harjutus 01
        8.2.24
        Lihtsalt harjutan
    */
        $enimi = "Mario";
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