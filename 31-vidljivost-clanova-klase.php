<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Vidljivost clanova klase</h1>
    <hr>
    <ol>
        <li>Public</li>
        <li>Private</li>
        <li>Protected</li>
    </ol>
    <?php 
    class Firma {
        public $username;
        private $password;
    }
    $korisnik1  = new Firma();
    $korisnik1->username = "Sloba";
    //$korisnik1->password = "0805977";
    echo "Slobo tvoja lozinka je " . $korisnik1->username;
    ?>
</body>
</html>