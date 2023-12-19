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
    <h1>Brojevi</h1>
    <hr>
    <?php 
    // pozitivni brojevi
    $broj  = 743;
    var_dump( $broj );
    echo "<hr>";
    // nula 
    $broj = 0;
    var_dump( $broj );
    echo "<hr>";
    // negativni brojevi
    $broj = -100;
    var_dump( $broj );
    ?>
</body>
</html>