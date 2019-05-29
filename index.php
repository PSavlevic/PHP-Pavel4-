<?php
$pirmas_skc = rand(0, 9);
$antras_skc = rand(0, 9);

$checkTotal = $pirmas_skc + $antras_skc;


if (isset($_POST['send'])) {
    $vardas = $_POST['name'];
    $mail = $_POST['mail'];
    $tel = $_POST['tel'];
    
} else {
    $vardas = 'nepateikta';
    $mail = 'nepateikta';
    $tel = 'nepateikta';
}
//DUOMENU IRASYMAS I .TXT FAILA
if (isset($_POST['send'])) {
//    SUKURIAMAS KINTAMASIS APJUNGIANTIS VISUS POST LAUKELIUS
    $data = $_POST['name'] . ' ' . $_POST['mail'] . ' ' . $_POST['tel'];
//    NURODOMA .TXT FAILO VIETA IR KAS BUS JAME DAROMA
    $fp = fopen('info.txt', 'a');
//    IRASOMI DUOMENYS I NURODYTA .TXT FAILA
    fwrite($fp, $data);
//    UZDAROMAS FAILAS
    fclose($fp);
}
$captcha = "$pirmas_skc" . ' + ' . "$antras_skc";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="http://sfaxa.org/wp-content/uploads/microsoft-logo-white-transparent_2166875.png" alt="logo">
        </div>
        <nav>
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#contacts">Contacts</a>
        </nav>
    </header>
    <main>
        <section>
            <div class="content-wrapper">
                <h1>Hello</h1>
                <p>This can be a lot of text</p>
            </div>
        </section>
        <section  id="about" class="flex">
            <div class="wrapper">
                <div class="hello">
                    <h1>Hello</h1>
                    <p>This can be a lot of text</p>
                </div>
            </div>
            <div class="image"></div>
        </section>
        <section class="flex">
            <div class="wrapper">
                <div class="hello">
                    <h1>Hello</h1>
                    <p>This can be a lot of text</p>
                </div>
            </div>
            <div class="image"></div>
        </section>
        <section class="flex">
            <div class="wrapper">
                <div class="hello">
                    <h1>Hello</h1>
                    <p>This can be a lot of text</p>
                </div>
            </div>
            <div class="image"></div>
        </section>
        <section class="flex">
            <div class="wrapper">
                <div class="hello">
                    <h1>Hello</h1>
                    <p>This can be a lot of text</p>
                </div>
            </div>
            <div class="image"></div>
        </section>
        <section class="flex">
            <div class="wrapper">
                <div class="hello">
                    <h1>Hello</h1>
                    <p>This can be a lot of text</p>
                </div>
            </div>
            <div class="image"></div>
        </section>
        <section class="flex">
            <div class="wrapper">
                <div class="hello">
                    <h1>Hello</h1>
                    <p>This can be a lot of text</p>
                </div>
            </div>
            <div class="image"></div>
        </section>
        <section>
            <div class="wrapper">
                <div class="hello content-wrapper">
                    <h1>Add employee</h1>
                    <form method="post">
                        <label for="name">Name:</label>
                        <input type="text" placeholder="Petras" name="name" id="name" required>
                        <label for="mail">EMAIL:</label>
                        <input type="email" placeholder="Petras@mozilla.lt" name="mail" id="mail" required>
                        <label for="tel">PHONE:</label>
                        <input type="number" placeholder="867574401" name="tel" id="tel" required>
                        <label for="cap"><?php print $captcha; ?></label>
                        <input type="number" name="cap" id="cap" required>
                        <input type="submit" value="ADD EMPLOYEE" name="send">
                    </form>
                </div>
            </div>
        </section>
        <section>
            <div class="wrapper">
                <div class="hello content-wrapper">
                    <h1>Employee Table</h1>
                    <table>
                        <tr>
                            <th>Vardas</th>
                            <th>El.paštas</th>
                            <th>Telefonas</th>
                        </tr>
                        <tr>
                            <td>Petras</td>
                            <td>petras@mozilla.lt</td>
                            <td>867574401</td>
                        </tr>
                        <tr>
                            <td><?php print $vardas; ?></td>
                            <td><?php print $mail; ?></td>
                            <td><?php print $tel; ?></td>
                        </tr>
                        <tr>
                            <td>Petras</td>
                            <td>petras@mozilla.lt</td>
                            <td>867574401</td>
                        </tr>
                        <tr>
                            <td>Petras</td>
                            <td>petras@mozilla.lt</td>
                            <td>867574401</td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>
        <section id="contacts">
            <div class="wrapper content-wrapper">
                <div class="height flex">
                    <div class="form1">
                        <form method="post">
                            <label for="fullname"> FULL NAME:</label>
                        <input type="text" placeholder="Petras" name="fullname" id="fullname" required>
                        <label for="email">EMAIL:</label>
                        <input type="email" placeholder="Petras@mozilla.lt" name="email" id="mail" required>
                        <label for="email">MESSAGE:</label>
                        <textarea name="area" placeholder="Your message..."></textarea>
                        <input type="submit" value="SEND!">
                        <input type="RESET" value="CLEAR">
                    </form>
                </div>
                <div class="info">
                    <div class="phone">
                        <div class="icons">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div>
                            <h3>Phone</h3>
                            <p>37067574401</p>
                        </div>
                    </div>
                    <div class="email">
                        <div class="icons">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div>
                            <h3>Email</h3>
                            <p>info@info.lt</p>
                        </div>
                    </div>
                    <div class="adressas">
                        <div class="icons">
                            <i class="fas fa-home"></i>
                        </div>
                        <div>
                            <h3>Adress</h3>
                            <p>Mindaugo str. 16</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer>
    Copyright &copy; Petras Slekys
</footer>
</body>
</html>