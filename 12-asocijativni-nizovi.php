<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
        body {
            font-size: 30px;;
        }
    </style>
</head>
<body>
    <h1>Asocijativni nizovi</h1>
    <hr>
    <?php 
    $ww_predavaci = ['web dizajn' => 'Boban', 'front end' => 'Danijel i Jovana', 'back end' => 'Sloba'];
    //                   key          value        key              value            key          value
    echo '<pre>';
    print_r($ww_predavaci);
    echo '</pre>';

    echo '<hr>';
    echo "Back end na FS kursu predaje " . $ww_predavaci['back end'] . '<hr>';
    $ww_predavaci['marketing'] = "Vlada";
    echo "Nedavno smo imali interesantna program gde smo ubacili marketing i predavac je " . $ww_predavaci['marketing'];
    ?>
</body>
</html>