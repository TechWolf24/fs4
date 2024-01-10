<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
        body {
            font-size: 25px;
        }
        h3 {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Trim funkcija</h1>
    <hr>
    <ul>
        <li>trim</li>
        <li>ltrim</li>
        <li>rtrim</li>
    </ul>
    <hr>
    <h3>TRIM, LTRIM, RTRIM</h3>
    <?php 
    $ime = "          Slobodan          ";
    $prezime = "      Miric         ";
    $celo_ime = trim($ime) . " " . trim($prezime);
    echo "<pre>";
    echo $celo_ime;
    echo "</pre>";
    $levo = "          prazno levo";
    $desno = "prazno desno          ";
    $ispis = ltrim($levo) . " - " . rtrim($desno);
    echo "<pre>"; 
    echo $ispis;
    echo "</pre>";
    ?>
    <h3>Primer za explode</h3>
    <?php 
    $primer = "Evo nam ga string,         koji koristimo za primer sa explode";
    echo "<pre>"; 
    echo $primer;
    echo "</pre>";
    $eksplode = explode(",", $primer);
    echo "<pre>"; 
    print_r($eksplode);
    echo "</pre>";
    echo "<pre>"; 
    print_r(trim($eksplode[1]));
    echo "</pre>";
    ?>
</body>
</html>