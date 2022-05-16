<?php

$user = array(
    "naam" => "Shyam",
    "e-mail" => "shyan@nu.nl",
    "wachtwoord" => "",
    "photo" => "shyam.jpg"
);
echo "<br>userArray: <br>";
var_dump($user, true);
$userJsonString = json_encode($user);
echo "<br>userJsonLitral: <br>" . $userJsonString;



$boekenJsonLiteral = '[
    {"titel":"Stoner","auteur":"John Williams",
    "genre":"Fictie","prijs":19.99},
    {"titel":"De cirkel","auteur":"Dave Eggers",
    "genre":"Fictie","prijs":22.5},
    {"titel":"Rayuela","auteur":"Julio Cortazar",
    "genre":"Fictie","prijs":25.5}]';
    $boeken = json_decode($boekenJsonLiteral, true);
    echo "<br><br><br>";
    foreach($boeken as $boek) {
        echo "<br>Titel: " . $boek["titel"];
        echo "<br>Auteur: " . $boek["auteur"];
        echo "<br>Genre: " . $boek["genre"];
        echo "<br>Prijs: " . $boek["prijs"];
    }
?>