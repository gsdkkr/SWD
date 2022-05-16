<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .album{clear: left; width: 100%;}
        .omslag{float: left;}
        .gegevens{float: left; padding-left: 20px;}
        .korting{clear: left;}
        .aantal{background-color: #f8ce6c;}
    </style>
    <title>Mijn winkelmandje</title>
</head>
<body style="font-family: Verdana; font-size: 9px;">
<h3>Mijn winkelmandje</h3>
<form name="albums" action="" method="POST">
<div class="album">
    <div class="omslag">
        <img src="img/evora.jpg" width="50px" alt="">
    </div>
    <div class="gegevens">
        Cesaria Evora "Em Um Concerto"  Prijs: $9
        <input type="hidden" name="albumcode[0]" value="001">
        <input type="hidden" name="artiest[0]" value="Cesaria Evora">
        <input type="hidden" name="album[0]" value="Em Um Concerto">
        <input type="hidden" name="prijs[0]" value="9">
        <input type="hidden" name="genre[0]" value="World">
        <br />Aantal:
        <input type="text" size=2 maxlength=3 name="aantal" class="aantal" value="0">
    </div>
</div>

<div class="korting">
    <br><hr />Korting:<br />
    <input type="checkbox" name="student" value="15">
    Student: 15% <br>
    <input type="checkbox" name="klant" value="10">
    Klant: 10% <br>
    <input type="submit" width="300px" name="verzenden" value="Bestellen">
</div>
</form>

</body>
</html>