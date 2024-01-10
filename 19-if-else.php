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
    <h1>IF ELSE naredba</h1>
    <p>Kontrola toka = grananje</p>
    <pre>
        if(uslov) {
            // ako se ispuni uslov onda se pokrece ovaj kod
        } else {
            // a ako se ne ispuni onda ovaj
        }
    </pre>
    <?php 
    $broj = 138;
    if($broj <= 138) {
        echo "Uslov je ispunjen";
    } else {
        echo "Uslov nije ispunjen";
    }
    echo "<hr>";
    $vikend = date("D");
    if($vikend == "Fri") { // Mon Thu Sat Sun
        echo "Posle danasnjeg casa krece vikend jupiiii";
    } else {
        echo "Nekome mozda pocinje i sutra ili neki drugi dan";
    }

    echo "<hr>";
    $dan = date("D");
    if($dan == "Fri") {
        echo "Kako stvari stoje mi smo docekali vieknd";
    } elseif($dan == 'Sat') {
        echo "Neko ne racuna petak, vec subotu kao pravi pocetak vikenda";
    } elseif($dan == 'Sun') {
        echo "Jos danas uzivamo u vikendu, pa sutra da se radi";
    } else {
        echo "Rad je stvorio coveka, tako da uzivaj dok ne dodju dani vikenda";
    }

    echo "<hr>";
    $stanje = 2000;
    $ime = "Sloba";
    if($stanje < 300) {
        echo "Ili brate smanji trosenje ili zaradi vise";
    } else {
        $zaradi = 300;
        $zaradi += $zaradi;
        echo "Ovaj put si se izvukao $ime i zaradio dodatno jos $zaradi i mozes da odahnes, a sledeci mesec budi bolji racundzija ili radi vise, a trosi manje";
    }

    ?>
</body>
</html>