<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat POST</title>
</head>
<body>
    <?php
    if (!isset($_POST["nom"], $_POST["prenom"], $_POST["groupe"])) {
        echo "<p>Aucune donnée reçue. Veuillez remplir le formulaire <a href=\"ex10_post.html\">ici</a>.</p>";
    } else {
        $nom = trim($_POST["nom"]);
        $prenom = trim($_POST["prenom"]);
        $groupe = trim($_POST["groupe"]);

        if ($nom === "" || $prenom === "" || $groupe === "") {
            echo "<p>Erreur : tous les champs sont obligatoires.</p>";
            echo "<p><a href=\"ex10_post.html\">Retour au formulaire</a></p>";
        } else {
            echo "<p>Bienvenue " . htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8') . " "
               . htmlspecialchars($nom, ENT_QUOTES, 'UTF-8')
               . " du groupe " . htmlspecialchars($groupe, ENT_QUOTES, 'UTF-8') . " !</p>";
        }
    }
    ?>
</body>
</html>