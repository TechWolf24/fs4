<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-size: 25px;
        }
    </style>
</head>
<body>
    <h1>Vrednost funkcije - RETURN</h1>
    <hr>
    <?php 
    function ebook() {
        return "Preuzmeite svoj ebook sa emaila";
    }
    $download = ebook();
    echo $download;
    ?>
</body>
</html>