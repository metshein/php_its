<h1>Teenused</h1>

<div class="row row-cols-1 row-cols-md-4 g-4">
<?php
    //faili avamine
    $products = "products.csv";
    $minu_csv = fopen($products, "r");

    //kõikide ridade saamine feof = file-end-of-file
    while (!feof($minu_csv)) {
        //ühe rea saamine, eraldatud komaga
        $rida = fgetcsv($minu_csv, filesize($products), ",");
        //print_r($rida);
        // echo "$rida[1] - $rida[3]€<br>";
        echo '
        <div class="col">
            <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">'.$rida[1].'</h5>
                <p class="card-text">'.$rida[2].'</p>
                <p class="card-text">'.$rida[3].'</p>
                </div>
            </div>
        </div>
        ';
    }
    
?>

</div>