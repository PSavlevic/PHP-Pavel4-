<?php

$pasiula = [
    'kebabines' => [
        'Jammi',
        'Wraperia Suppa Kebs',
        'Sinano kebabai',
    ],
    'tipas' => [
        'kebabas_lavase',
        'kebabas_pitoje',
        'kebabas_leksteje',
    ],
    'dydis' => [
        'didelis',
        'mazas',
        'kovotojo',
    ],
    'padazas' => [
        'cesnakinis',
        'svelnus',
        'cipotle',
        'astrus',
    ],
    'mesa' => [
        'jautiena',
        'vistiena',
    ],
];

if (!empty($_POST['kebabines']) && ($_POST['tipas']) && ($_POST['dydis']) && ($_POST['padazas']) && ($_POST['mesa'])) {
    $kebabines = $pasiula['kebabines'][$_POST['kebabines']];
    $tipas = $pasiula['tipas'][$_POST['tipas']];
    $dydis = $pasiula['dydis'][$_POST['dydis']];
    $padazas = $pasiula['padazas'][$_POST['padazas']];
    $mesa = $pasiula['mesa'][$_POST['mesa']];
} else {
    $kebabines = 'nepasirinkta';
    $tipas = 'nepasirinkta';
    $dydis = 'nepasirinkta';
    $padazas = 'nepasirinkta';
    $mesa = 'nepasirinkta';
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kebabai</title>
        <link rel="stylesheet" type="text/css" href="css/normalise.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <section>
            <form method="post">
                <?php foreach ($pasiula as $key => $pasirinkimai): ?>
                    <select name="<?php print $key; ?>">
                        <?php foreach ($pasirinkimai as $key => $kebabine): ?>
                            <option value="<?php print $key; ?>">
                                <?php print $kebabine; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                <?php endforeach; ?>
                <input type="submit" value="uzsakyti">
            </form>
            <table>
                <tr>
                    <th>
                        Kebabine:
                    </th>
                    <th>
                        Kebabo tipas:
                    </th>
                    <th>
                        Kebabo dydis:
                    </th>
                    <th>
                        Kebabo padazas:
                    </th>
                    <th>
                        Mesa:
                    </th>
                </tr>
                <tr>
                    <td>
                        <?php print $kebabines; ?>
                    </td>
                    <td>
                        <?php print $tipas; ?>
                    </td>
                    <td>
                        <?php print $dydis; ?>
                    </td>
                    <td>
                        <?php print $padazas; ?>
                    </td>
                    <td>
                        <?php print $mesa; ?>
                    </td>
                </tr>
            </table>
        </section>
    </body>
</html>