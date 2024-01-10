<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Substring funkcija</h1>
    <hr>
    <pre>
        substr(string $string, ing $offset, int $length)
    </pre>
    <?php 
    $tekst = "Ovo je neki tekst gde zelimo da izbacimo VISAK koji nam smeta IZBACITI";
    echo substr($tekst,41,5);
    echo "<hr>";
    echo substr($tekst, -8);
    echo "<hr>";
    echo substr($tekst,62,8);
    ?>
</body>
</html>