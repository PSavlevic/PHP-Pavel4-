<?php

$vardas = '';
$pareigos = '';
$url = '';
$area = '';

if (isset($_POST['send'])) {
    $vardas = $_POST['vardas'];
    $pareigos = $_POST['pareigos'];
    $url = $_POST['url'];
    $area = $_POST['area'];
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>title</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<main>
    <section class="input-div">
        <h1>Anketa:</h1>
        <form method="post">
            <input type="text" name="vardas" placeholder="Vardas">
            <input type="text" name="pareigos" placeholder="Pareigos">
            <input type="url" name="url" placeholder="https://example.com" pattern="https://.*">
            <textarea name="area" id="area" placeholder="Aprasymas..."></textarea>
            <input type="submit" value="Siusk" name="send">
        </form>
    </section>
    <section class="output-div">
        <h1>Profilis:</h1>
            <img class="transition-rotate" src="<?php print $url; ?>" alt="img">
        <h2>Vardas: <?php print $vardas; ?> </h2>
        <h2>Pareigos: <?php print $pareigos; ?> </h2>
        <h2>Aprasymas: <?php print $area; ?> </h2>
    </section>
</main>

</body>
</html>