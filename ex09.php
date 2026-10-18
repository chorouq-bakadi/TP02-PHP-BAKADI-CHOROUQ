<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 9</title>
</head>
<body>
    <?php
    $notes = [
        "Amine" => 12,
        "Sara" => 16,
        "Youssef" => 8,
        "Lina" => 14,
        "Adam" => 10
    ];

    $somme = 0;
    $nbValides = 0;
    $meilleureNote = -1;
    $meilleurEtudiant = "";
    ?>

    <h2>Notes des étudiants</h2>
    <table border="1" cellpadding="6">
        <tr>
            <th>Étudiant</th>
            <th>Note</th>
            <th>Validé</th>
        </tr>
        <?php
        foreach ($notes as $nom => $note) {
            $somme += $note;

            if ($note >= 10) {
                $statut = "Validé";
                $nbValides++;
            } else {
                $statut = "Non validé";
            }

            if ($note > $meilleureNote) {
                $meilleureNote = $note;
                $meilleurEtudiant = $nom;
            }

            echo "<tr>";
            echo "<td>" . $nom . "</td>";
            echo "<td>" . $note . "</td>";
            echo "<td>" . $statut . "</td>";
            echo "</tr>";
        }

        $moyenne = $somme / count($notes);
        ?>
    </table>

    <p>Somme des notes : <?= $somme ?></p>
    <p>Moyenne de la classe : <?= $moyenne ?></p>
    <p>Nombre d'étudiants validés : <?= $nbValides ?></p>
    <p>Meilleure note : <?= $meilleureNote ?> (<?= $meilleurEtudiant ?>)</p>
</body>
</html>