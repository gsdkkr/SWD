<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="voornaam" placeholder="voornaam"><br>
        <input type="text" name="naam" placeholder="naam"><br>
        <input type="date" name="geboortedatum" placeholder="geboortedatum"><br>
        <input type="text" name="straat" placeholder="straat"><br>
        <input type="text" name="postcode" placeholder="postcode"><br>
        <input type="text" name="plaats" placeholder="plaats"><br>
        <input type="email" name="email" placeholder="email"><br>
        <input type="password" name="wachtwoord" placeholder="wachtwoord"><br>
        <br>Minderjarig:
        <input type="radio" name="minderjarig" value="ja">JA
        <input type="radio" name="minderjarig" value="nee">NEE<br>

        <input type="submit" name="submit" value="Registreren">
        <input type="reset" name="Reset" value="Resetten"><br>

<?php
    
    if(isset($_POST["submit"])) {
        $gebruiker = array(
            "voornaam" => $_POST["voornaam"],
            "naam" => $_POST["naam"],
            "geboortedatum" => $_POST["geboortedatum"],
            "straat" => $_POST["straat"],
            "postcode" => $_POST["postcode"],
            "plaats" => $_POST["plaats"],
            "email" => $_POST["email"],
            "wachtwoord" => $_POST["wachtwoord"],
            "minderjarig" => $_POST["minderjarig"]
        );
        $userJsonString = json_encode($gebruiker);
        echo $userJsonString;
        }

?>

    </form>
</body>
</html>