<?php
// Connexion à la base de données
try {
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'simplonco');
} catch (Exception $e) {
    die('Erreur : '.$e->getMessage());
}

if ($_POST) {
    // Insertion du message à l'aide d'une requête préparée
    $req = $bdd->prepare('INSERT INTO minichat (pseudo, message) VALUES(?, ?)');
    $req->execute(array($_POST['pseudo'], $_POST['message']));
}

?>
<!DOCTYPE>
<html>

<head>
    <title>MiniChat Project II - The Return</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Material Design Light -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
</head>

<body>
    <div class="mdl-layout mdl-js-layout">
        <main class="mdl-layout__content">
            <div class="page-content">
                <ul class="demo-list-item mdl-list" id="conversation">
<?php
// Récupération des 10 derniers messages
$reponse = $bdd->query('SELECT pseudo, message FROM minichat ORDER BY ID DESC LIMIT 0, 10');

// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($donnees = $reponse->fetch()) {
?>
                    <li class="mdl-list__item">
                        <span class="mdl-list__item-primary-content">
                            <strong><?php echo htmlspecialchars($donnees['pseudo']); ?></strong>: <?php echo htmlspecialchars($donnees['message']); ?>
                        </span>
                    </li>
<?php
}

$reponse->closeCursor();
?>
                </ul>

                <form action="#" class="mdl-grid" method="POST">
                    <div class="mdl-cell mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" name="pseudo" id="pseudo">
                        <label class="mdl-textfield__label" for="sample3">Pseudo</label>
                    </div>
                    <div class="mdl-cell mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" name="message" id="message">
                        <label class="mdl-textfield__label" for="sample3">Message</label>
                    </div>
                    <button id="send" class="mdl-cell mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored">
                        <i class="material-icons">send</i>
                    </button>
                </form>
            </div>
        </main>
    </div>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/3.0.2/firebase.js"></script>
    <script src="./script.js"></script>
    <!-- Material Design Light -->
    <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
</body>

</html>
