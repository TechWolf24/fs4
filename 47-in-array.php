<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Funkcija za rad sa nizovima - In Array</h1>
    <hr>
    <?php 
    $automobili = ['Mercedes', 'Audi', 'Renault', 'Peugeot', 'Honda', 'Toyota', 'BMW'];
    var_dump(in_array('BMW', $automobili));
    if(true) {
        $akcija = in_array('BMW', $automobili);
        echo "Ovog meseca imamo BMW program na akciji";
    } 
    ?>
</body>
</html>