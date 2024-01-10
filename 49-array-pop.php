<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Array pop - izbacivanje poslednjeg clana niza</h1>
    <?php 
    $pasta = ['Crni luk', 'Beli luk', 'Sampinjoni', 'Kuvani paradajz', "Bosiljak", "Origano", "Vegeta", "Piletina"];
    echo "<pre>";
    $opcioni_elemenat = array_pop($pasta);
    echo "</pre>";
    echo "Moze i ne mora da se koristi $opcioni_elemenat";
    echo "<pre>";
    print_r($pasta);
    echo "</pre>";
    ?>
</body>
</html>