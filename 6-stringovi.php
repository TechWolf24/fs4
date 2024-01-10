<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
        body {
            font-size: 30px;
        }
    </style>
</head>
<body>
    <?php 
    $stringovi = "Tekstualne vrednosti unutar navodnika";
    $ime = "Slobodan";
    $prezime = "Miric";
    echo $ime . " - " . $prezime;
    echo "<br>";
    var_dump($stringovi );
    echo "<br>";
    $back_end_kurs = "Hajd' da krenemo da ucimo backend";
    echo $back_end_kurs;
    echo "<br>";
    $full_stack_kurs = 'Let\'s go';
    echo $full_stack_kurs;
    echo "<br>";
    $first_name = "Slobodan";
    $last_name = "Miric";
    $full_name = $first_name . " " . $last_name;
    echo "<br>";
    $hobby = "ukulele";
    echo $full_name;
    echo "<br>";
    echo $full_name . " u slobodno vreme kada ne programira i ne seta Fridu svira " . $hobby; 
    echo "<br>";
    $konferencija = "WordCamp Apatin";
    $datum = 2023;
    echo "Prvi WordPress dogadjaj $konferencija desio se $datum godine. Videcemo da li ce biti i 2024.";
    echo "<br>";
    $ingredients = "banana";
    echo "Sloba likes to eat smoothie with {$ingredients}s";
    echo "<br>";
    echo "Sloba likes to eat smoothie with " . $ingredients . "s";
    ?>
</body>
</html>