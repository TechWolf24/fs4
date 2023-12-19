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
    <h1>Promenljive - varijable</h1>
    <?php 
    $posao = "web dizajner";
    $cms = "WordPress";
    //echo $posao;
    $iskustvo = 19;
    $ime = "Slobex";
    echo $ime . " je " . $posao . " sa " . $iskustvo . " godina iskustva";
    echo "<hr>";
    echo $ime . " voli sve sto vole mladi, a posebno " . $cms;
    $vrednosti = "";
    echo "<hr>";
    var_dump($vrednosti);
    echo "<hr>";
    $back_end = "PHP i MySQL";
    $BACK_END = "Python i MySQL";
    echo $BACK_END;
    ?>
</body>
</html>