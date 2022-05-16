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
            Drake "Nothing Was the Same"  Prijs: € 12
            <input type="hidden" name="id[0]" value="001" >
            <input type="hidden" name="artist[0]" value="Drake ">
            <input type="hidden" name="album[0]" value="Nothing Was the Same" >
            <input type="hidden" name="prijs[0]" value="12" >
            <input type="hidden" name="genre[0]" value="Hip/Hop Rap"> <br />
            Aantal bestellen:
            <input type="text" size=2 maxlength=3 name="aantal[0]" value="0" style="background-color:#f8ce6c" >
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
        echo "aantal albums: " .$_POST["aantal"][0];
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
        // $korting = 0;
        // if(isset($_POST["student"])){
        //     $korting += 15;
        // } 
        
        // if(isset($_POST["klant"])){
        //     $korting += 10;
        // };

        // echo $korting . " %";

        // switch($_POST["betalingswijze"]){

        //     case "visa" : echo "</br> Betalingswijze Visa";
        //                         break;

        //     case "paypall" : echo "</br> Betalingswijze Paypall";
        //                         break;                            

        //     default: echo "</br>geen betalingswijze gekozen";

        // }

    }

?>