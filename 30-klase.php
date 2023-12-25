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
    <h1>Klase</h1>
    <hr>
    <pre>
        class Automobili {

        }
    </pre>
    <h3>Kreiranje klase i objekta</h3>
    <hr>
    <?php 
    // class Automobili {
        
    // }
    // $auto1 = new Automobili();
    // var_dump($auto1);
    // $auto2 = new Automobili();
    // var_dump($auto2);
    ?>

    <h3>Svojstva i pristupanje svojstvu objekta</h3>
    <hr>
    <?php 
    class Automobili {
        public $ime = "Peugeot"; 
    }
    $auto1 = new Automobili();
    $auto1->ime = "Renault";
    var_dump($auto1);
    $auto2 = new Automobili();
    $auto2->ime = "BMW";
    print_r($auto2);
    echo "<hr>";
    echo "Sloba u zadnjih 12 godina preferira " . $auto1->ime;
    echo "<hr>";
    ?>

    <h3>Klasa VS Objekat</h3>
    <hr>
    <?php 
    class Kursevi {
        public $kurs = "Front end kurs";
    }
    $kurs1 = new Kursevi();
    $kurs1->kurs = "Full stack kurs";
    echo "<pre>";
    var_dump($kurs1);
    echo "</pre>";
    $kurs2 = new Kursevi();
    $kurs2->kurs = "WordPress kurs";
    echo "<pre>";
    var_dump($kurs2);
    echo "</pre>";
    echo "<hr>";
    echo "Trenutno ide nas kurs " . $kurs1->kurs . " a danas nam krece i " . $kurs2->kurs;
    ?>

    <h3>Primer Zaposleni</h3>
    <hr>
    <?php 
    class Zaposleni {
        public $ime, $prezime, $pozicija, $email;
        function unos_novog_zaposlenog() {
            echo "Funkcija sa unos novog radnika u bazu";
        }
    }
    $zaposleni1 = new Zaposleni();
    $zaposleni1->ime = "Arnold";
    $zaposleni1->prezime = "Sudicki";
    $zaposleni1->pozicija = "SQL developer";
    $zaposleni1->email = "arnold@gmail.com";
    echo "<pre>";
    print_r($zaposleni1);
    echo "</pre>";

    $zaposleni2 = new Zaposleni();
    $zaposleni2->ime = "Ninoslav";
    $zaposleni2->prezime = "Veljkovic";
    $zaposleni2->pozicija = "PHP developer";
    $zaposleni2->email = "ninoslav@gmail.com";
    echo "<pre>";
    print_r($zaposleni2);
    echo "</pre>";
    ?>

    <h3>Prodavnica</h3>
    <hr>
    <?php 
    class Prodavnica {
        public $ime, $cena;
    }
    $racunar = new Prodavnica();
    $racunar->ime = "Mac Mini";
    $racunar->cena = "650$";
    echo "<pre>";
    print_r($racunar);
    echo "</pre>";
    $roleri = new Prodavnica();
    $roleri->ime = "Rollerblade";
    $roleri->cena = "200$";
    echo "<pre>";
    print_r($roleri);
    echo "</pre>";
    ?>
</body>
</html>