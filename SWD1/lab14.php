<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 14</title>
</head>
<body>
<!DOCTYPE html> 
<html lang="nl"> 
    <head>
        <meta http-equiv="Content-Type" 
              content="text/html; 
              charset=UTF-8" />
        <style>
            .album{clear:left;width:100%;}
            .omslag{float:left;}
            .gegevens{float:left; padding-left:20px;}
            .korting{clear:left;}
        </style>
        <title>Mijn shoppingcart</title> 
    </head>
	<body style="font-family:Verdana;font-size:9px;">
    <h1>Shoppingcart</h1>
    <form name="albums" action="" method="POST">
        <div class="album"> 
            <div class="omslag">
                <img src="3YV2PTJAVFGCVJK5IC6RJYY6EA.webp" width="50px" alt="X" />
            </div>
            <div class="gegevens">
            Drake "Nothing Was the Same"  Prijs: €12
            <input type="hidden" name="id[0]" value="001" >
            <input type="hidden" name="artist[0]" value="Drake ">
            <input type="hidden" name="album[0]" value="Nothing Was the Same" >
            <input type="hidden" name="prijs[0]" value="12" >
            <input type="hidden" name="genre[0]" value="Hip/Hop Rap"> <br />
            Aantal bestellen:
            <input type="text" size=2 maxlength=3 name="aantal[0]" value="0" style="background-color:#f8ce6c" >
            </div>
        </div>
        <div class="album">
        <div class="omslag">
                <img src="3YV2PTJAVFGCVJK5IC6RJYY6EA.webp" width="50px" alt="X" />
            </div>
            <div class="gegevens">
                Manu Chao "Clandestino"  Prijs: €5
                <input type="hidden" name="albumcode[1]" value="002">
                <input type="hidden" name="artiest[1]" value="Manu Chao">
                <input type="hidden" name="album[1]" value="Clandestino">
                <input type="hidden" name="prijs[1]" value="5">
                <input type="hidden" name="genre[1]" value="World">
                <br>Aantal:
                <input type="text" size=2 maxlength=3 name="aantal[1]" value="0" style="background-color:#f8ce6c" >
            </div>
        </div>
    
        <div class="korting">
        <br>
        <hr />
        Korting:<br />
        <input type="checkbox" name="student" value="15" />Student: 15%<br /> 
        <input type="checkbox" name="klant" value="10" />Client: 10%<br />  
        
        <select name="betalingswijze" id="">
            <option value=""></option>
            <option value="paypal">Paypal</option>
            <option value="mastercard">Mastercard</option>
            <option value="visa">Visa</option>
            <option value="ideal">Ideal</option>
        </select>


        <input type="submit" width="300px" name="verzenden" 
               value=" Bestellen " /> 
        </div>
        </form>
</body> 
</html> 
<?php


    if(isset($_POST["verzenden"])){
        echo "<br>";
        echo "Aantal 'Nothing Was the Same''s: " . $_POST["aantal"][0];
        echo "<br>";
        echo "Aantal 'Clandestino''s: " . $_POST["aantal"][1];
        echo "<br>";

        include_once("externe_functions.php");

        $korting = korting();
        echo "<br> Procent korting: " . $korting . "%";
        echo "<br>";

        $betalingswijze = $_POST["betalingswijze"];
        echo "<br> Betalingswijze: " . $betalingswijze;
        echo "<br>";
        $servicekosten = serviceKosten($betalingswijze);
        echo "<br> Servicekosten: €" . $servicekosten;
    }

?>
</body>
</html>