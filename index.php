<?php

$kons = '';
$pask = '';

if (isset($_POST['send'])) {
    $vardas = $_POST['name'];
    $pavarde = $_POST['lname'];
    $data = $_POST['date'];
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
    $data = 'nepateikta';
    $kons = 'nepateikta';
    $pask = 'nepateikta';
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
            <td><?php print $data; ?></td>
            <td><?php print $kons; ?></td>
            <td><?php print $pask; ?></td>
        </tr>
    </table>
</div>
</body>
</html>