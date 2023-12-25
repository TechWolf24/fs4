<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
        body {
            font-size: 30px;
        }
        ul {
            list-style: none;
        }
        b {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Aritmeticki operatori</h1>
    <hr>
    <ul>
        <li><b>+</b> | Sabiranje | <b>$i + 1</b></li>
        <li><b>-</b> | Oduzimanje | <b>$i - 1</b></li>
        <li><b>*</b> | Mnozenje | <b>$i * 1</b></li>
        <li><b>/</b> | Deljenje | <b>$i / 1</b></li>
        <li><b>%</b> | Ostatak | <b>$i % 1</b></li>
    </ul>
    <?php 
    $x = 30;
    $y = 6;
    $z = 23;
    $q = 4;
    echo $x + $z . '<hr>';
    echo $x - $z . '<hr>';
    echo $x * $z . '<hr>';
    echo $x / $y . '<hr>';
    echo $z % $q . '<hr>';
    
    $sabiranje = $x + $y;

    echo "Rezultat 1 - zbir: $sabiranje";

    ?>
</body>
</html>