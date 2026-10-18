<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 2</title>
</head>
<body>
    <?php
    $nom = "Bakadi";
    $prenom = "Chorouq";
    $age = 20;
    $formation = "Informatique";

    // Phrase de présentation avec concaténation
    $phrase = "Je m'appelle " . $prenom . " " . $nom . ", j'ai " . $age . " ans, formation : " . $formation . ". ";

    // Ajout avec .=
    $phrase .= "J'apprends PHP";

    echo "<p>" . $phrase . "</p>";

    // PHP est sensible à la casse
    $note = 12;
    $Note = 16;
    echo "<p>\$note = " . $note . "</p>";
    echo "<p>\$Note = " . $Note . "</p>";
    ?>
</body>
</html>