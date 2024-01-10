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
    <h1>Funckije sa stringovima - Explode</h1>
    <hr>
    <pre>
        explode(separator, string, limit)
    </pre>
    <h2>Prvi primer</h1>
    <?php 
    $neki_string = "Samsung Honor Iphone Xiaomi Motorola Huawei";
    $prelomi_string = explode(" ", $neki_string);
    echo "<pre>";
    print_r($prelomi_string);
    echo "</pre>";
    echo "Do nedavno sam koristio $prelomi_string[2], a sad sam presao na $prelomi_string[1]";
    echo "<hr>";
    var_dump($prelomi_string);
    var_dump($neki_string);
    ?>
    <h2>Drugi primer</h2>
    <?php 
    $websites_workshop = "Sloba M, Boban, Danijel, Jovana, Zoran, Sloba Z";
    echo $websites_workshop;
    $izvuci_niz = explode(", ", $websites_workshop);
    echo "<pre>";
    print_r($izvuci_niz);
    echo "</pre>";
    echo "$izvuci_niz[0] je trenutno nas predavac na PHP i MYSQL kursu";
    ?>
    <h2>Treci primer</h2>
    <?php 
    $string = "Slobodan-Mico-Miric";
    $niz = explode("-", $string);
    echo "<pre>";
    print_r($niz);
    echo "</pre>";
    ?>
</body>
</html>