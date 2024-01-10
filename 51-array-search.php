<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Array search</h1>
    <hr>
    <?php 
    $meni = ['pasta', 'sarma', 'riblji paprikas', 'burek', 'pecenje', 'pizza'];
    print_r(array_search('riblji paprikas', $meni));
    $ispis = array_search('riblji paprikas', $meni);
    echo "$meni[2] je tradicionlano jelo gornjeg podunavlja";
    ?>
</body>
</html>