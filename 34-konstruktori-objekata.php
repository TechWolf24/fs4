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
    </style>
</head>
<body>
    <h1>Konstruktori objekata</h1>
    <hr>
    <?php 
    class ImeKlase {
        function __construct($parametar) {
            echo "Ja sam objekar sa imenom $parametar";
        }
    }
    $objekat1 = new ImeKlase("Prvi objekat");
    echo "<hr>";
    $objekat2 = new ImeKlase("Drugi objekat");
    ?>

    <h3>Primer prodavnica</h3>
    <?php 
    class Prodavnica {
        public $ime, $cena;
        function __construct($arg1 = "Ime proizvoda", $arg2 = "0")  {
            $this->ime = $arg1;
            $this->cena = $arg2;
        }
        function informacije() {
            echo $this->ime . " " . $this->cena;
        }
    }
    $proizvod = new Prodavnica();
    $laptop = new Prodavnica("MacBook Pro", "650$");
    $roleri = new Prodavnica("Rollerblade", "150$");
    echo "<h4>". $laptop->ime. "</h4>";
    echo "<hr>";
    echo $roleri->informacije() ." su moja omiljena marka rolera su " ;
    echo "<hr>";
    echo $proizvod->informacije();
    ?>

    <h3>Zaposleni primer - kako do penzije</h3>
    <?php 
    class Zaposleni {
        public $ime, $rodjenje, $godine;
        function __construct($argIme, $argGodinaRodjenja) {
            $this->ime = $argIme;
            $this->rodjenje = $argGodinaRodjenja;
        }
        function izracunajGodine() {
            $this->godine = date("Y") - $this->rodjenje;
            echo $this->ime . " ima " . $this->godine . " godina i ima dosta do penzije";
        }
    }
    $zaposleni1 = new Zaposleni("Slobodan", 1977);
    $zaposleni1->izracunajGodine();
    echo "<hr>";
    $zaposleni2 = new Zaposleni("Bojan", 2000);
    $zaposleni2->izracunajGodine();
    ?>
</body>
</html>