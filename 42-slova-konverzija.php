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
    </style>
</head>
<body>
    <h1>Mali i velika slova - konverzija</h1>
    <hr>
    <?php 
    $string = "Hocemo Sve U Mala Slova Ali I Velika";
    echo strtolower($string);
    echo "<hr>";
    echo strtoupper($string);
    echo "<hr>";
    $tekst = "hocu samo prvo slovo da mi bude veliko";
    echo ucfirst($tekst);
    echo "<hr>";
    echo $tekst;
    echo "<hr>";
    $nova_vrednost = ucfirst($tekst);
    echo $nova_vrednost;
    ?>
</body>
</html>