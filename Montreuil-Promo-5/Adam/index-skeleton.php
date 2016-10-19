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
    <!--<meta http-equiv="refresh" content="15; URL=index-skeleton.php"> -->
    <!-- Material Design Light -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/cover.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <!-- Begin emoji-picker Stylesheets -->
  <link href="lib/css/nanoscroller.css" rel="stylesheet">
  <link href="lib/css/emoji.css" rel="stylesheet">
  <link href="lib/css/adam.css" rel="stylesheet">
  <!-- End emoji-picker Stylesheets -->


</head>

<body>

    <div class="mdl-layout mdl-js-layout">
        <main class="mdl-layout__content">
            <div class="page-content">
                <ul class="demo-list-item mdl-list" id="conversation">
                
                  <?php
                  // Récupération des 10 derniers messages
               
                 
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
                           
                        </span>
                    </li>

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
                        <input class="mdl-textfield__input lead emoji-picker-container" type="text" name="message" id="message" data-emojiable="true">
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
    <div class="mdl-layout mdl-js-layout">
      <div>
                <ul class="demo-list-item mdl-list" id="conversation">

                  <?php
                  // Récupération des 10 derniers messages
                  $_COOKIE['nickname'] = $_POST['nickname'];
                  mysql_connect($localhost, $username, $password);
                  mysql_select_db($database);$sql = 'SELECT * FROM chat';
                  $query = mysql_query($sql);
                  $gravatar_link = 'http://www.gravatar.com/avatar/'.md5($comment_author_email).'?s=32';
                  while ($row = mysql_fetch_array($query)) {
                      echo '<img src="'.$gravatar_link.'" />'.$row['nickname'].':'.$row['message'].'<br>';
                  }

                  ?>


                </ul>
                  </div>


 
    <!-- Material Design Light -->
    <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

  <!-- Begin emoji-picker JavaScript -->
  <script src="lib/js/nanoscroller.min.js"></script>
  <script src="lib/js/tether.min.js"></script>
  <script src="lib/js/config.js"></script>
  <script src="lib/js/util.js"></script>
  <script src="lib/js/jquery.emojiarea.js"></script>
  <script src="lib/js/emoji-picker.js"></script>
  <!-- End emoji-picker JavaScript -->

  <script>
    $(function() {
      // Initializes and creates emoji set from sprite sheet
      window.emojiPicker = new EmojiPicker({
        emojiable_selector: '[data-emojiable=true]',
        assetsPath: 'lib/img/',
        popupButtonClasses: 'fa fa-smile-o'
      });
      
      window.emojiPicker.discover();
    });
  </script>



</body>

</html>
