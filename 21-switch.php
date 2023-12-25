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
    <h1>Switch naredba</h1>
    <hr>
    <pre>
        switch($promenjljiva) {
            case 1 :
                // nesto radi
                break;
            case 2 :
                // nesto radi
                break;
            case 3 :
                // nesto radi
                break;
            default:
                // ako nije ispinjen uslov onda se ovo desava
        }
    </pre>
    <hr>
    <?php 
    $ispitni_rezultati = "60";
    switch($ispitni_rezultati) {
        case $ispitni_rezultati <= 50:
            echo "Nije dovoljno za prolaz, vidimo se na sledecem roku";
            break;
        case $ispitni_rezultati <= 60:
            echo "Moze i bolje, ali ako ti je 6ica ok, imas je";
            break;
        case $ispitni_rezultati <= 70:
            echo "Ok ocena znaci da imas vise od osnovnog znanja";
            break;
        case $ispitni_rezultati <= 80:
            echo "Vidi se da si ucio, bravo";
            break;
        case $ispitni_rezultati <= 90:
            echo "Pa svaka cast, ovo je zavidan nivo znanja";
            break;
        case $ispitni_rezultati <= 100:
            echo "Ovo je neverovatan rezultat svaka cast";
            break;
        default:
            $ispitni_rezultati = "";
            echo "Pripremi se za iduci ispitni rok";
    }

    echo "<hr>";
    $boja_zidova = "";
    switch($boja_zidova) {
        case "zelena":
            echo "Slaze se uz plocice na podu";
            break;
        case "braon":
            echo "Ja ne volem zeleno";
            break;
        case "belo":
            echo "Belo je kompromis";
            break;
        default:
            echo "Ja bi sacekao prolece";
    }
    ?>
</body>
</html>