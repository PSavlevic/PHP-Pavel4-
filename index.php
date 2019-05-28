<?php

$kons = '';
$pask = '';



if (isset($_POST['send'])) {
    $vardas = $_POST['name'];
    $pavarde = $_POST['lname'];
    $date = $_POST['date'];
        if (!isset($_POST["kons"])){
            $kons = "Nebuvo";
        } else {
            $kons = "Buvo";
        }
    if (!isset($_POST['pask'])) {
        $pask = "Nebuvo";
    } else {
        $pask = "Buvo";
    }
} else {
    $vardas = 'nepateikta';
    $pavarde = 'nepateikta';
    $date = 'nepateikta';
    $kons = 'nepateikta';
    $pask = 'nepateikta';
}

//DUOMENU IRASYMAS I .TXT FAILA
if (isset($_POST['send'])) {
//    SUKURIAMAS KINTAMASIS APJUNGIANTIS VISUS POST LAUKELIUS
    $data = $_POST['name'] . ' ' . $_POST['lname'] . ' ' . $_POST['date'] . ' ' . $_POST['kons'] . ' ' . $_POST['pask'];
//    NURODOMA .TXT FAILO VIETA IR KAS BUS JAME DAROMA
    $fp = fopen('info.txt', 'a');
//    IRASOMI DUOMENYS I NURODYTA .TXT FAILA
    fwrite($fp, $data);
//    UZDAROMAS FAILAS
    fclose($fp);
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <form method="POST">
        <input type="text" placeholder="Name" name="name">
        <input type="text" placeholder="LastName" name="lname">
        <input type="date" placeholder="Date" name="date">
        <input type="checkbox" name="kons"> Kons
        <input type="checkbox" name="pask"> Pask
        <input type="submit" value="siusti" name="send">
    </form>
    <table>
        <tr>
            <td>Name</td>
            <td>LastName</td>
            <td>Date</td>
            <td>Kons</td>
            <td>Pask</td>
        </tr>
        <tr>
            <td><?php print $vardas; ?></td>
            <td><?php print $pavarde; ?></td>
            <td><?php print $date; ?></td>
            <td><?php print $kons; ?></td>
            <td><?php print $pask; ?></td>
        </tr>
    </table>
</div>
</body>
</html>