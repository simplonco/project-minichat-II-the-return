<?php
// Connexion à la base de données

$localhost = 'localhost';
$username = 'root';
$password = 'root';
$database = 'chat';
mysql_connect($localhost, $username, $password);
mysql_select_db($database);
$nickname = $_POST['nickname'];
$message = $_POST['message'];
$sql = "INSERT INTO chat(nickname,message) VALUES('$nickname','$message')";
if ($_POST) {
    $query = mysql_query($sql);
}?>
<!DOCTYPE>
<html>

<head>
    <title>MiniChat Project II - The Return</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="15; URL=index-skeleton.php">
    <!-- Material Design Light -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">


</head>

<body>
  <style>
.mdl-grid {
bottom: 0px;
left: -382.5px;
margin: 0px auto 0px 50%;
margin-left: 50%;
position: fixed;
width: 765px;
}
.mdl-layout__container {
    position: absolute;
    width: 100%;
    height: 80%;
}
ul, ol {
    font-size: 14px;
    line-height: 50px;
}
</style>
    <div class="mdl-layout mdl-js-layout">
        <main class="mdl-layout__content">
            <div class="page-content">
                <ul class="demo-list-item mdl-list" id="conversation">
                
                  <?php
                  // Récupération des 10 derniers messages
               
                  $localhost = 'localhost';
                  $username = 'root';
                  $password = 'root';
                  $database = 'chat';
                  $_COOKIE['nickname'] = $_POST['nickname'];
                  mysql_connect($localhost, $username, $password);
                  mysql_select_db($database);$sql = 'SELECT * FROM chat';
                  $query = mysql_query($sql);
                  $gravatar_link = 'http://www.gravatar.com/avatar/' . md5($comment_author_email) . '?s=32';


                  // Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
                  
                
                  while ($row = mysql_fetch_array($query)) {
                      echo '<img src="' . $gravatar_link . '" />'. $row['nickname'].':'.$row['message'].'<br>';
                  }

                  ?>
                    <li class="mdl-list__item">
                        <span class="mdl-list__item-primary-content">
                            <strong><?php  ?></strong><?php  ?>
                        </span>
                    </li>
<?php
// }
// ...
?>
                </ul>
                  </div>
<div>
                 <form action="<?php echo $PHP_SELF;?>" class="mdl-grid" method="POST">
                    <div class="mdl-cell mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" name="nickname" id="nickname" value= "<?php if (isset($_COOKIE['nickname'])) {
    echo $_COOKIE['nickname'];
} ?>">
                        <label class="mdl-textfield__label" for="sample3">Nickname</label>
                    </div>
                    <div class="mdl-cell mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" name="message" id="message">
                        <label class="mdl-textfield__label" for="sample3">Message</label>
                        <i class="em em-some-emoji"></i>
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
    <!-- Material Design Light -->
    <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
</body>

</html>
