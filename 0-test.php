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
    <?php 
    class Korisnik {
        public $ime, $email, $korisnicko_ime, $lozinka;

        function sacuvaj_korisnika() {
            echo "Ovde ce ici logika cuvanja podataka o korisniku";
        }
    }
    $korisnik1 = new Korisnik();
    $korisnik1->ime = "Slobodan";
    $korisnik1->email = "slobamiric@gmail.com";
    $korisnik1->korisnicko_ime = "Sloba";
    $korisnik1->lozinka = "0805977";

    echo "<pre>";
    print_r($korisnik1);
    echo "</pre>";
    ?>
</body>
</html>