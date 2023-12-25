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
    <h1>Metode</h1>
    <hr>
    <h3>Primer zaposleni</h3>
    <hr>
    <?php 
    class Zaposleni {
        public $ime, $prezime, $pozicija;
        public function starostZaposlenog($godinaRodjenja) {
            return date("Y") - $godinaRodjenja;
        }
    }
    $zaposleni1 = new Zaposleni();
    $zaposleni1->ime = "Slobodan";
    $zaposleni1->prezime = "Miric";
    $zaposleni1->pozicija = "WordPress developer";
    echo "<pre>";
    print_r($zaposleni1);
    echo "</pre>";
    echo $zaposleni1->ime . " " . $zaposleni1->prezime . " ima " . $zaposleni1->starostZaposlenog(1977) . " godina, tako da ima jos da radi i radi i radiiiiii";
    ?>

    <h3>Primer prodavnica</h3>
    <hr>
    <?php 
    class Prodavnica {
        public $ime, $cena;
        function informacije() {
            //echo "Funckija mi radi";
            echo $this->ime . " " . $this->cena;
        }
    }
    $ranac = new Prodavnica();
    $ranac->ime = "Adidas";
    $ranac->cena = "50$";

    $jakna = new Prodavnica();
    $jakna->ime = "Vijetnamka";
    $jakna->cena = "100$";

    echo $ranac->informacije();
    ?>
</body>
</html>