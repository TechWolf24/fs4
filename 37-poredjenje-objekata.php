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
    <h1>Poredjenje objekata</h1>
    <hr>
    <pre>
        $objekat1 == $objekat2
        $objekat1 === $objekat2
    </pre>
    <?php 
    class Zaposleni {
        public $ime;
    }
    $zaposleni1 = new Zaposleni();
    $zaposleni1->ime = "Bojan";
    $zaposleni2 = new Zaposleni();
    $zaposleni2->ime = "Bojan";
    echo "Ime zaposlenog 1 " . $zaposleni1->ime;
    echo "<hr>";
    echo "Ime zaposlenog 2 " . $zaposleni2->ime;
    echo "<hr>";
    if($zaposleni1 == $zaposleni2) {
        echo "Tacno";
    } else {
        echo "Netacno";
    }
    echo "<hr>";
    class Honorarci{
        public $ime;
    }
    $honorarac1 = new Honorarci();
    $honorarac1->ime = "Bojan";
    if($zaposleni1 === $honorarac1) {
        echo "Tacno";
    } else {
        echo "Netacno";
    }
    ?>
</body>
</html>