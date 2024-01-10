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
    <h1>Radnom - nasumicne vrednosti </h1>
    <hr>
    <?php 
    $telefoni = ['samsung', 'xiaomi', 'honor', 'iphone', 'motorala', 'vivo'];
    echo "Do nedavno sam koristio $telefoni[3], pa sam presao na $telefoni[2]";
    echo "<hr>";
    echo $telefoni[array_rand($telefoni)];
    echo "<hr>";
    $zapamti = array_rand($telefoni);
    echo $zapamti . " = " . $telefoni[$zapamti];
    ?>
</body>
</html>