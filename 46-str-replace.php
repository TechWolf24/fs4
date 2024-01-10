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
    <h1>String replace</h1>
    <hr>
    <pre>
        str_replace(array | string $search, array | string $replace, string | niz $subjecta)
    </pre>
    <?php 
    $relax = "_ voli da seta Fridu u slobodno vreme";
    echo str_replace("_","Sloba", $relax);
    echo "<hr>";
    $sport = "__ voli da voza rolere po keju, takodje __ voli i brzi hod, posto je raspadnut za trcanje";
    echo str_replace(array("__"),"Sloba", $sport);
    echo "<hr>";
    $ugovor = "Ime_sponzora se obavezuje da ce uplatiti celokupan iznos koji je dogovaren najdalje do 31. decembra. Ime_klijenta se obavezuje da ce uraditi sve dogovoreno u vezi predstavljanja sponzora na konferenciji. Ime_sponzora se obavezuje da ce dostaviti trazene materijale, a Ime_klijenta da ce sve dogovoreno sprovesti u delo";
    echo str_replace(array("Ime_sponzora", "Ime_klijenta"),array("GoDaddy", "WP Apatin") , $ugovor);
    echo "<hr>";
    $organizatori = array("ORGANIZATOR treba da organizuje volontere i goste", "DOMACIN treba da obezbedi sve vezano za prostor odrzavanja konferencije");
    echo "<pre>";
    print_r(str_replace(array("ORGANIZATOR", "DOMACIN"), array("WP Apatin","Liberland"), $organizatori));
    echo "</pre>";
    ?>
</body>
</html>