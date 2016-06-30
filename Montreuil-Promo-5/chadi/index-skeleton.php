<?php
// Connexion à la base de données
/* TODO */
$con = mysqli_connect("localhost", "root", "root", "shoutit");
$query = "SELECT * FROM shouts ";
$shouts = mysqli_query($con, $query);

// Test Connection
if (mysqli_connect_errno()) {
    echo 'connection to database Failed' . mysqli_connect_errno();
}

if (isset($_POST['submit'])) {
    $user = mysqli_real_escape_string($con, $_POST['pseudo']);
    $message = mysqli_real_escape_string($con, $_POST['message']);




    // Validate input
    if (!isset($user) || $user == '' || !isset($message) || $message == '') {
        $error = "Please Fill the Field";
        header("Location: index-skeleton.php?error=" . urlencode($error));
        exit();
    } else {
        $query = "Insert into shouts ( user,message) Values('$user', '$message')";

        if (!mysqli_query($con, $query)) {
            die('Error:' . mysql_error($con));
        } else {
            header("Location: index-skeleton.php");
            exit();
        }
    }
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
        <style>
            .mdl-list__item{
                font-size: small  ;
                border-bottom:1px solid gray;
            }
        </style>
    </head>

    <body>
        <div class="mdl-layout mdl-js-layout">
            <main class="mdl-layout__content">
                <div class="page-content">
                    <ul class="demo-list-item mdl-list" id="conversation">
<?php
// Récupération des 10 derniers messages
/* TODO */

// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
/* TODO */
// while (...) 
while ($row = mysqli_fetch_assoc($shouts)):
    ?>
                            <li class="mdl-list__item">
                                <span class="mdl-list__item-primary-content">
                               <strong><?php echo $row['user']; ?></strong>: <?php echo $row['message']; ?>
                                </span>
                            </li>
                            <?php
                        endwhile;
                        ?>
                    </ul>
                 

                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>"   name="form1" class="mdl-grid" method="POST">
                        <div class="mdl-cell mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="pseudo" id="pseudo">
                            <label class="mdl-textfield__label" for="sample3">Pseudo</label>
                        </div>
                        <div class="mdl-cell mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="message" id="message">
                            <label class="mdl-textfield__label" for="sample3">Message</label>
                        </div>
                        <button id="send" type="submit" name="submit"  class="mdl-cell mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored">
                            <i class="material-icons">send</i>
                        </button>
                    </form>
                      
                </div>
                <div>
                 
                </div>
            </main>
        </div>

        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
        <!-- Material Design Light -->
        <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
    </body>

</html>
