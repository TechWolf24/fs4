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
    <h1>Scope - oblast vazenja varijable</h1>
    <hr>
    <?php 
    // $a = 50;
    // $b = 100;
    // function scope() {
    //     // $a = 2;
    //     // $b = 4;
    //     global $a;
    //     global $b;
    //     return $a + $b;
    // }
    // echo scope();
    // // echo $a . "<br>";
    // // echo $b . "<br>";

    $kurs_dizajn = "Figma";
    function upis() {
        $kurs_dizajn = "WordPress";
        echo $kurs_dizajn;
    }
    upis();
    echo "<hr>";
    echo $kurs_dizajn;

    echo "<hr>";
    echo "<h3>Lokalne varijable</h3>";
    function rezultat() {
        $x = 100;
        $y = 10;
        $podeli = $x / $y;
        return $podeli;
    }
    echo rezultat();

    echo "<hr>";
    echo "<h3>Globalne varijable</h3>";
    $a = 50;
    $b = 5;
    function izracunaj() {
        global $a, $b;
        $pomnozi = $a * $b;
        return $pomnozi;
    }
    echo izracunaj();

    echo "<hr>";
    $webinar = "Python for data science";
    function online_predavanja() {
        global $webinar;
        echo $webinar;
    }
    online_predavanja();
    ?>
</body>
</html>