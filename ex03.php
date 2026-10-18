<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 3</title>
</head>
<body>
    <?php
    // Constantes
    define("TAUX_TVA", 20);
    define("DEVISE", "MAD");

    // Données
    $prixUnitaireHT = 60;
    $quantite = 3;

    // Calculs
    $totalHT = $prixUnitaireHT * $quantite;
    $montantTVA = $totalHT * TAUX_TVA / 100;
    $totalTTC = $totalHT + $montantTVA;

    // Frais de livraison avec +=
    $fraisLivraison = 15;
    $totalTTC += $fraisLivraison;
    ?>

    <h2>Récapitulatif</h2>
    <p>Prix unitaire HT : <?= $prixUnitaireHT ?> <?= DEVISE ?></p>
    <p>Quantité : <?= $quantite ?></p>
    <p>Total HT : <?= $totalHT ?> <?= DEVISE ?></p>
    <p>TVA (<?= TAUX_TVA ?>%) : <?= $montantTVA ?> <?= DEVISE ?></p>
    <p>Frais de livraison : <?= $fraisLivraison ?> <?= DEVISE ?></p>
    <p>Montant final TTC : <?= $totalTTC ?> <?= DEVISE ?></p>

    <?php
    if (defined("TAUX_TVA")) {
        echo "<p>La constante TAUX_TVA existe.</p>";
    }
    ?>
</body>
</html>