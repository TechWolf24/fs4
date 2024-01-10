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
    <h1>Kljucna rec THIS</h1>
    <?php 
    class MojaGitara {
        public $boja_gitare = "crvena";
        function ispisiBojuGitare() {
            return $this->boja_gitare;
        }
    }
    $gitara = new MojaGitara();
    var_dump($gitara);
    echo $gitara->ispisiBojuGitare() . " je Slobina omiljena boja tambure";
    ?>

    <h3>Upotreba atributa klase</h3>
    <?php 
    class NekaKlasa {
        public $atribut;
        function nekaFunckionalnost($parametar) {
            $this->atribut = $parametar;
            echo $this->atribut;
        }
    }
    $objekat = new NekaKlasa();
    $objekat->atribut = "Nekakva vrednost";
    echo $objekat->atribut;
    ?>

    <h3>Primer telefoni</h3>

    <?php 
    class Telefoni {
        public $os = "Android";
        function odeberiOperativniSistem() {
            return $this->os;
        }
    }
    $telefon1 = new Telefoni();
    var_dump($telefon1);
    echo "<hr>";
    echo $telefon1->odeberiOperativniSistem() . " je Slobin izbor";
    echo "<hr>";
    $telefon2 = new Telefoni();
    $telefon2->os = "IOS";
    echo $telefon2->os . " je do nedavno bio moj izbor";
    ?>

    <h3>Kad ce penzija - primer</h3>
    <?php 
    class Zaposleni {
        public $ime, $datumRodjenja, $starost;

        function izracunajGodineZaposlenog() {
            $this->starost = date("Y") - $this->datumRodjenja;
            echo $this->ime . " ima " . $this->starost . " godina";
        }
    }
    $zaposleni1 = new Zaposleni();
    $zaposleni1->ime = "Slobodan";
    $zaposleni1->datumRodjenja = 1977;
    $zaposleni1->izracunajGodineZaposlenog();
    echo "<hr>";
    $zaposleni2 = new Zaposleni();
    $zaposleni2->ime = "Bojan";
    $zaposleni2->datumRodjenja = 2000;
    $zaposleni2->izracunajGodineZaposlenog();
    echo "<hr>";
    $zaposleni3 = new Zaposleni();
    $zaposleni3->ime = "Medin";
    $zaposleni3->datumRodjenja = 1969;
    $zaposleni3->izracunajGodineZaposlenog();
    ?>

    <h3>Razdvajanje funkcionalnosti = vise metoda</h3>
    <?php 
    class Prodavnica {
        public $ime, $cena;

        function __construct($arg1, $arg2) {
            $this->ime = $arg1;
            $this->cena = $arg2;
        }
    }
    $racunar = new Prodavnica('Mac Mini', '650$');
    $ukulele = new Prodavnica('Ivans guitar', '150$');
    $telefon = new Prodavnica('Honor 90', '500$');
    // var_dump($racunar);
    // var_dump($ukulele);
    // var_dump($telefon);

    class Popust {
        public function prikaz($jedanProizvod) {
            echo $jedanProizvod->ime . " je trenutno na popustu i kosta " . $jedanProizvod->cena;
        }
    }
    $popust = new Popust();
    $popust->prikaz($telefon);
    ?>
</body>
</html>