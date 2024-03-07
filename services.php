<h1>Teenused</h1>
<?php
    //faili avamine
    $products = "products.csv";
    $minu_csv = fopen($products, "r");

    //kõikide ridade saamine feof = file-end-of-file
    while (!feof($minu_csv)) {
        //ühe rea saamine, eraldatud komaga
        $rida = fgetcsv($minu_csv, filesize($products), ",");
        print_r($rida);
    }
    

    


?>