<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 1.02</title>
</head>
<body>
    <?php
    $breedte = 10;
    $lengte = 11;
    $hoogte = 5;

    $containerbasisoppervlakte = $breedte * $lengte;
    $containervolume = $breedte * $lengte * $hoogte;

    echo($containerbasisoppervlakte);
    echo("<br>" . $containervolume);
    ?>
</body>
</html>