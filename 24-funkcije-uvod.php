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
        b {
            color: navy;
        }
    </style>
</head>
<body>
    <h1>Funckije uvod</h1>
    <hr>
    <pre>
        function ime_funkcije() {
            // neki kod - nesto radi
        }
        ime_funkcije();
    </pre>
    <hr>
    <?php 
    function fs_oglas() {
        echo "Slobo pripremi vizuale i tekst za novi FS oglas";
    }
    fs_oglas();
    fs_oglas();
    fs_oglas();

    echo "<hr>";
    $counter = 0;
    while ($counter < 5) {
        fs_oglas();
        $counter++;
    }

    echo "<hr>";
    echo "<h3>Built in - Ugradjene PHP funkcije</h3>";
    $today = date("F j, Y, g:i a");  
    echo $today;
    echo "<hr>";
    echo date("Y");
    echo "<hr>";
    echo date("l");
    echo "<hr>";
    echo date("y");

    echo "<hr>";
    echo "<h3>Parametri i argumenti funkcije</h3>";
    function mnozenje($broj1 = 1, $broj2 = 10) {
        echo $broj1 * $broj2;
    }
    mnozenje(20,20);

    echo "<hr>";
    function kursevi($dizajn, $programiranje) {
        echo "Za 2 dana krece jedan kurs dizajnerski i to je <b>$dizajn</b>, dok u februaru krece novi programerski kurs i to je <b>$programiranje</b>";
    }
    kursevi("WordPress", "Fullstack");

    echo "<hr>";
    echo "<h3>Return</h3>";
    function rezultat() {
        $x = 30;
        $y = 5;
        $podeli = $x / $y;
        return $podeli;
    }
    echo rezultat();
    ?>
</body>
</html>