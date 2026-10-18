<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 8</title>
</head>
<body>
    <section>
        <h2>Partie 1 : nombres pairs de 0 à 20</h2>
        <?php
        $i = 0;
        while ($i <= 20) {
            if ($i == 10) {
                echo "<strong>" . $i . "</strong> ";
            } else {
                echo $i . " ";
            }
            $i += 2;
        }
        ?>
    </section>

    <section>
        <h2>Partie 2 : while et do-while</h2>
        <?php
        
        $compteur = 5;
        $executionsWhile = 0;
        while ($compteur < 5) {
            $executionsWhile++;
            $compteur++;
        }
        echo "<p>while : " . $executionsWhile . " exécution(s)</p>";

        
        $compteur = 5;
        $executionsDoWhile = 0;
        do {
            $executionsDoWhile++;
            $compteur++;
        } while ($compteur < 5);
        echo "<p>do-while : " . $executionsDoWhile . " exécution(s)</p>";
        ?>
    </section>

    <section>
        <h2>Partie 3 : continue et break</h2>
        <?php
        for ($n = 1; $n <= 20; $n++) {
            if ($n % 3 == 0) {
                continue; 
            }
            if ($n >= 16) {
                break; 
            }
            echo $n . " ";
        }
        ?>
    </section>
</body>
</html>