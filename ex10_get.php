<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat GET</title>
</head>
<body>
    <?php
    if (!isset($_GET["nom"], $_GET["prenom"], $_GET["groupe"])) {
        echo "<p>Aucune donnée reçue. Veuillez remplir le formulaire <a href=\"ex10_get.html\">ici</a>.</p>";
    } else {
        $nom = trim($_GET["nom"]);
        $prenom = trim($_GET["prenom"]);
        $groupe = trim($_GET["groupe"]);

        if ($nom === "" || $prenom === "" || $groupe === "") {
            echo "<p>Erreur : tous les champs sont obligatoires.</p>";
            echo "<p><a href=\"ex10_get.html\">Retour au formulaire</a></p>";
        } else {
            echo "<p>Bienvenue " . htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8') . " "
               . htmlspecialchars($nom, ENT_QUOTES, 'UTF-8')
               . " du groupe " . htmlspecialchars($groupe, ENT_QUOTES, 'UTF-8') . " !</p>";
        }
    }
    ?>
</body>
</html>