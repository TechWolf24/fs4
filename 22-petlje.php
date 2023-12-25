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
    <h1>Petlje</h1>
    <hr>
    <pre>
        for(inicijalizacija varijable; uslov; povecanje) {
            // ovde nesto petlja radi
        }
    </pre>
    <?php 
    echo "Ponovi ovaj ispis " . "<br>";
    echo "Ponovi ovaj ispis " . "<br>";
    echo "Ponovi ovaj ispis " . "<br>";
    echo "Ponovi ovaj ispis " . "<br>";
    echo "Ponovi ovaj ispis " . "<br>";

    echo "<hr>";
    echo "<h2>While loop</h2>";
    $brojac = 0;
    while($brojac < 5) {
        echo "$brojac - broj ponavljanja " . "<br>";
        $brojac++; // $brojac = $brojac + 1
    }

    echo "<hr>";
    echo "<h2>Do While loop</h2>";
    $counter = 1;
    do {
        echo $counter . " Ponovi neki tekst";
        $counter++;
    } while($counter < 0);

    echo "<hr>";
    echo "<h2>For loop</h2>";
    for($i = 1; $i < 5; $i++) {
        echo "$i - broj ponavljanja " . "<br>";
    }

    echo "<hr>";
    echo "<h2>For loop sa nizom</h2>";
    $program_kursa = ['html', 'css', 'js', 'php', 'mysql', 'wp'];
    for($i = 0; $i < count($program_kursa); $i++) {
        echo $program_kursa[$i] . ' - ';
    }

    echo "<hr>";
    echo "<h2>For loop sa nizom 2</h2>";
    // $zanimljiva_geografija = ['Novi Sad', 'Banja Luka', 'Split', 'Zrenjanin', 'Vranje'];
    $zanimljiva_geografija[1] = 'Novi Sad';
    $zanimljiva_geografija[2] = 'Banja Luka';
    $zanimljiva_geografija[3] = 'Split';
    $zanimljiva_geografija[4] = 'Zrenjanin';
    $zanimljiva_geografija[5] = 'Vranje';

    for($i = 1; $i < count($zanimljiva_geografija); $i++) {
        echo "$i Na broju jedan: $zanimljiva_geografija[$i]" . "<br>";
    }

    foreach($zanimljiva_geografija as $key => $value) {
        echo "Na broju: " . $key ." imamo grad ". $value ."<br>";
    }
    ?>
</body>
</html>