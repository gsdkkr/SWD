<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h4>Reiskosten berekenen</h4>
<?php
    function reiskosten($vertrek, $bestemming) {
        $reiskosten = array();
        $reiskosten[1] = array();
        $reiskosten[2] = array();
        $reiskosten[3] = array();
        $reiskosten[4] = array();

        $reiskosten[1][1] = 0;
        $reiskosten[1][2] = 30;
        $reiskosten[1][3] = 60;
        $reiskosten[1][4] = 90;

        $reiskosten[2][1] = 30;
        $reiskosten[2][2] = 0;
        $reiskosten[2][3] = 40;
        $reiskosten[2][4] = 20;
        return($reiskosten[$vertrek][$bestemming]);
    }
?>

Vertrek
<form action="" method="POST">
<select name="vertrek" id="vertrek">
    <option value="1">Amsterdam</option>
    <option value="2">Utrecht</option>
    <option value="3">Den Haag</option>
    <option value="4">Rotterdam</option>
</select>

<select name="aankomst" id="aankomst">
    <option value="1">Amsterdam</option>
    <option value="2">Utrecht</option>
    <option value="3">Den Haag</option>
    <option value="4">Rotterdam</option>
</select>

<input type="submit" value="submit" name="bereken">
</form>

<?php
    if (isset($_POST["bereken"])) {
        $vertrek = $_POST["vertrek"];
        $bestemming = $_POST["aankomst"];
        echo reiskosten($vertrek, $bestemming);
    }
?>

</body>
</html>