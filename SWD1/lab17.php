<?php
function korting()
{
    $korting = 0;
    if (isset($_POST["student"])) $korting = $korting + 15;
    if (isset($_POST["klant"])) $korting = $korting + 10;
    return $korting;
}
function serviceKosten($betalingswijze)
{
    $servicekosten = 0;
    switch ($betalingswijze)
    {
        case 'visa':
            $servicekosten = 2;
        break;
        case 'mastercard':
            $servicekosten = 2.5;
        break;
        case 'paypal':
            $servicekosten = 1.5;
        break;
        case 'ideal':
            $servicekosten = 1;
        break;
    }
    return $servicekosten;
}
function facturering()
{
    echo "</br>";
    echo "<table>";
    echo "<tr>";
    echo "<td> Genre";
    echo "</td>";
    echo "<td> Artiest";
    echo "</td>";
    echo "<td> Album";
    echo "</td>";
    echo "<td> Aantal";
    echo "</td>";
    echo "<td> Prijs";
    echo "</td>";
    echo "<td> Bedrag";
    echo "</td>";
    echo "</tr>";
    for ($x = 0;$x < sizeof($_POST["albumcode"]);$x++)
    {
        echo "<tr>";
        echo "<td>";
        echo "</td>";
        echo "<td>";
        echo $_POST["artist"][$x];
        echo "</td>";
        echo "<td>";
        echo $_POST["album"][$x];
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
function premium()
{
    $boolean = false;
    $totaal = 0;
    for ($x = 0;$x < count($_POST["aantal"]);$x++)
    {
        $totaal += $_POST["aantal"][$x];
        if ($boolean == false)
        {
            if ($totaal > 4)
            {
                echo "<br>Word lid van de premium club.";
                $boolean = true;
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta http-equiv="Content-Type"
              content="text/html;
              charset=UTF-8" />
        <title>Lab 17</title>
    </head>
<body>
    <h3>Voorbeeld van de do-while-lus</h3>
    <?php
echo "<br>Reken het saldo uit zolang het saldo lager dan 2000 is.";
$saldo = 100;
$rente = 0.1;
$maand = 1;
echo "<br>Uw beginsaldo is: $saldo";
echo "<br>Start...";
do
{
    if ($maand == 2)
    {
        echo "<br> Februari betaalt geen rente.";
        $maand++;
        continue;
    }
    $saldo = $saldo + ($saldo * $rente);
    $saldo = sprintf("%0.2f", $saldo);
    echo "<br>maand: $maand uw saldo is: $saldo";
    $maand++;
    if ($saldo > 2000)
    {
        echo "<br>Uw maximale saldo is bereikt.";
        break;
    }
    if ($saldo < 1000 && $maand == 6)
    {
        break;
    }
}
while ($saldo < 2000);

?>
</body>
</html>
