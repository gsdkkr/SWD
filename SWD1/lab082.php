<?php
        if(empty($_POST["achternaam"])) {
            echo "achternaam is niet ingevuld<br>";
        }
        if(empty($_POST["voornaam"])) {
            echo "voornaam is niet ingevuld<br>";
        }
        if(empty($_POST["straat"])) {
            echo "straat is niet ingevuld<br>";
        }
        if(empty($_POST["postcode"])) {
            echo "postcode is niet ingevuld<br>";
        }
        if(empty($_POST["plaats"])) {
            echo "plaats is niet ingevuld<br>";
        }
        if(empty($_POST["email"])) {
            echo "email is niet ingevuld";
        }
        if($_POST["opleiding"] == "ICT") {
            echo "<h1>ICT opleidingen zijn vol.</h1>";
        }
        echo "<h1>Uw Gegevens Zijn:</h1><br><br>";
        echo "Achternaam: " . $_POST["achternaam"] . "<br>";
        echo "Voornaam: " . $_POST["voornaam"] . "<br>";
        echo "Straat: " . $_POST["straat"] . "<br>";
        echo "Postcode: " . $_POST["postcode"] . "<br>";
        echo "Plaats: " . $_POST["plaats"] . "<br>";
        echo "Email Adres: " . $_POST["email"] . "<br>";
        if($_POST["opleiding"] == "ICT") {
            echo "U wordt ingeschreven voor de volgende opleiding:<br>ICT";
        }
        if($_POST["opleiding"] == "Engels") {
            echo "U wordt ingeschreven voor de volgende opleiding:<br>Engels";
        }
        if($_POST["opleiding"] == "Techniek") {
            echo "U wordt ingeschreven voor de volgende opleiding:<br>Techniek";
        }
        if($_POST["opleiding"] == "Nederlands") {
            echo "U wordt ingeschreven voor de volgende opleiding:<br>Nederlands";
        }
?>