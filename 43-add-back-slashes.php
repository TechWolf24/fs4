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
        h3 {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Dodavanje i brisanje kose crte / add i back slash</h1>
    <hr>
    <h3>Addslashes</h3>
    <?php 
    $string = "Haj'd da se malo poigramo sa stringovimea to nam je jel'te vazno";
    echo addslashes($string);
    ?>
    <h3>Stripslashes</h3>
    <?php 
    $brisanje = "Haj'\d da mal\'ko brisemo kose crtice obrnuto od funkcije addslashes koja ih dodaje";
    echo stripslashes($brisanje);
    ?> 
</body>
</html>