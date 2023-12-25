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
    <h1>Parametri funkcije</h1>
    <hr>
    <?php 
    function saberi($x, $y, $z) {  // vise istih parametara isti tip podataka brojevi
        return $x + $y + $z;
    }
    $rezultat = saberi(20,100, 200);
    echo $rezultat;

    echo "<hr>";
    function firma($ime, $staz) { // razliciti tipovi podataka / broj / string
        echo "Zaposleni $ime ima $staz godina radnog staza" . "<hr>";
    }
    echo firma("Slobodan", 20);
    echo firma("Bojan", 10);
    echo firma("Arnold", 4);

    echo "<hr>";
    echo "<h3>Konverzija tipova podata</h3>";
    $x = 10;
    $y = "10";
    echo $x + $y;
    echo "<hr>";
    $broj = (double) 13;
    var_dump($broj);
    $broj2 = (int) 3.14;
    var_dump($broj2);
    echo "<hr>";

    function zaposleni(string $ime, int $godiste) {  // fiksirani tipovi podataka u parametrima
        echo "Nas zaposleni $ime je $godiste godiste";
    }
    echo zaposleni('Vukasin', "1982");

    echo "<hr>";
    function websites_workshop(array $predavaci) {   // parametri su niz
        foreach ($predavaci as $ime => $tehnologije) {
            echo "Predavac:  $ime - predaje: $tehnologije <hr>";
        }
    }
    $predavaci_niz = [
        "Boban" => "HTML i CSS",
        "Sloba Miric" => "PHP i MYSQL",
        "Danijel"=> "Javascript",
        "Jovana"=> "React",
        "Zoran"=> "Python i SQL",
        "Sloba Zelic"=> "Python i SQL",
    ];
    websites_workshop($predavaci_niz);

    echo "<hr>";
    echo "<h3>Varijabilna lista parametara</h3>";
    function parametri(...$args) {
        $konacan_zbir = 0;
        foreach ($args as $parametar) {
            $konacan_zbir += $parametar;
        }
        return $konacan_zbir;
    }
    echo parametri(1,2,3,4,5,6,7,8,9,10);
    ?>
</body>
</html>