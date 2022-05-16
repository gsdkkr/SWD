<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 1.4</title>
</head>
<body>
    <?php
    $playlist = array (
        array('genre'=>'hiphop','auteur'=>'John Williams','title'=>'My Girl'),
        array('genre'=>'jazz','auteur'=>'John Coltrane','title'=>'New York'),
        array('genre'=>'hiphop','auteur'=>'Shakira','title'=>'Obsession'),
    );
    array_walk_recursive($playlist,"printArray");
    function printArray($item, $key){echo "<div style='font-family: arial; color: red;'><br> $key" . " :" ."<strong> $item </strong></div>";}
    ?>
</body>
</html>