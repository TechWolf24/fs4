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
    </style>
</head>
<body>
    <h1>Floats - decimalni brojevi</h1>
    <?php 
    $broj = 0.5;
    var_dump( $broj );
    echo "<hr>";
    $pi = 3.14;
    var_dump( $pi );
    echo "<hr>";
    $x = 40.89;
    echo "Vrednost promenljive: " . $x ." | Tip promenljive: " . gettype($x);
    echo "<hr>";
    $y = - 700;
    echo "Vrednost promenljive: " . $y ." | Tip promenljive: " . gettype($y);
    ?>
</body>
</html>