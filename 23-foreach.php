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
        span {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Foreach loop</h1>
    <hr>
    <pre>
                 key      value
        foreach($niz as $element) {
            // radi nesto
        }
    </pre>
    <pre>     
        foreach($niz as $kljuc => $vrednost) {
            // radi nesto
        }
    </pre>
    <?php 
    $kurs_ekipa = ['Arnold', 'Barisa', 'Bojan', 'Dare', 'Meda', 'Milos', 'Nina', 'Ninoslav', 'Olja', 'Sanel', 'Vukasin'];
    echo "<pre>";
    print_r($kurs_ekipa);
    echo "</pre>";
    echo "<hr>";
    foreach ($kurs_ekipa as $kljuc => $vrednost) {
        echo $kljuc . " : " . $vrednost . '<br>';
    }
    foreach ($kurs_ekipa as $polaznik) {
        echo $polaznik . ", ";
    }

    echo "<hr>";
    $websites_workshop = [
        "web dizajn"=> "boban",
        "javascript"=> "danijel",
        "react"=> "jovana",
        "php i mysql"=> "sloba",
        "python"=> "sloba",   
        "sql"=> "zoran",     
    ];
    // echo "<pre>";
    // print_r($websites_workshop);
    // echo "</pre>";
    // foreach( $websites_workshop as $predavac => $tehnologija) {
    //     echo $predavac . " : " . $tehnologija . "<br>";
    // }
    ?>

    <?php foreach($websites_workshop as $predavac => $tehnologija) : ?>

        <h3><span><?php echo $predavac; ?></span> : <?php echo $tehnologija; ?></h3>

    <?php endforeach; ?>
    
</body>
</html>