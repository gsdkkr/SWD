<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $brief="Beste <b><<abonnee>></b><br>
    U heeft het laatste nummer van ons magazine ontvangen.<br>
    Omdat we u heel graag als abonnee willen behouden, bieden we
    u een aantrekkelijke en exclusieve korting:<br>";
    $brief2="U betaalt <b><<bedrag-met-korting>></b>
    in plaats van 65 euro.<br><br>
    <i>Profiteer nu van deze aanbieding!</i><br><br>
    Met vriendelijke groet,<br>
    Sam Simons<br>
    Hoofdredacteur.<br>";
    $nieuwbrief = str_replace("<<abonnee>>", "Jan Davids", $brief);
    $nieuwbrief2 = str_replace("<<bedrag-met-korting>>", "50", $brief2);
    echo $nieuwbrief;
    echo $nieuwbrief2;
?>
</body>
</html>