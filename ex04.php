<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 4</title>
</head>
<body>
    <?php
    // Six variables
    $entier = 42;
    $chaine = "42";
    $decimal = 15.8;
    $vrai = true;
    $faux = false;
    $vide = null;
    ?>

    <h2>Types et valeurs (var_dump)</h2>
    <pre>
    <?php
    var_dump($entier);
    var_dump($chaine);
    var_dump($decimal);
    var_dump($vrai);
    var_dump($faux);
    var_dump($vide);
    ?>
    </pre>

    <h2>Conversions</h2>
    <pre>
    <?php
    echo '"42" en entier : ';
    var_dump((int) "42");

    echo '15.8 en entier : ';
    var_dump((int) 15.8);

    echo '42 en chaîne : ';
    var_dump((string) 42);
    ?>
    </pre>

    <h2>true et false avec echo</h2>
    <p>true : <?php echo $vrai; ?></p>
    <p>false : <?php echo $faux; ?></p>

    <h2>true et false avec var_dump</h2>
    <pre>
    <?php
    var_dump($vrai);
    var_dump($faux);
    ?>
    </pre>

    <h2>Conversion en booléen</h2>
    <pre>
    <?php
    echo "0 : ";
    var_dump((bool) 0);

    echo '"0" : ';
    var_dump((bool) "0");

    echo '"PHP" : ';
    var_dump((bool) "PHP");

    echo "tableau vide : ";
    var_dump((bool) []);
    ?>
    </pre>
</body>
</html>