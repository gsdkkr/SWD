<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="lab082.php" method="post">
        <h1>Inschrijfformulier</h1>
        <input type="text" name="achternaam" placeholder="achternaam"><br>
        <input type="text" name="voornaam" placeholder="voornaam"><br>
        <input type="text" name="straat" placeholder="straat"><br>
        <input type="text" name="postcode" placeholder="postcode"><br>
        <input type="text" name="plaats" placeholder="plaats"><br>
        <input type="email" name="email" placeholder="email"><br>
        <br>Kies een opleiding:<br>
        <input type="radio" name="opleiding" value="ICT">ICT<br>
        <input type="radio" name="opleiding" value="Engels">Engels<br>
        <input type="radio" name="opleiding" value="Techniek">Techniek<br>
        <input type="radio" name="opleiding" value="Nederlands">Nederlands<br><br>

        <input type="submit" name="versturen" value="Versturen">
        <input type="reset" name="Reset" value="Reset">

    </form>
</body>
</html>