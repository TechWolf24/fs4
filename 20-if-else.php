<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>IF else</h1>
    <hr>
    <pre>
        if(uslov) {
            // ovo se izvrsvava ako je uslov ispunje
        } else {
            // a ovo ako nije
        }
    </pre>
    <hr>
    <?php 
    $ocena = 8;
    if($ocena == 10) {
        echo "Razbio si ispit";
    } elseif($ocena == 9) {
        echo "Skoro savrseno si naucio";
    } elseif($ocena == 8) {
        echo "Vrlo dobro";
    } elseif($ocena == 7) {
        echo "Vrlo solidno";
    } elseif($ocena == 6) {
        echo "Jedva si se izvukao";
    } else {
        echo "Pripremi se bolje za naredni ispitni rok";
    }

    echo "<hr>";
    if(1200 <= 100) {
        echo "Izraz je tacan";
    } else {
        echo "Izraz nije tacan";
    }

    echo "<hr>";
    $x = 90;
    $y = "90";
    if($x === $y) {
        echo "X i Y su jednaki";
    } else {
        echo "X i Y nisu jednaki";
    }
    ?>
</body>
</html>