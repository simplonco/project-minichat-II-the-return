<?php
$localhost="localhost";
$db_user="root";
$db_password="simplonco";
$db_name="chat";

mysql_connect($localhost,$db_user,$db_password);
mysql_select_db($db_name);

$name=$_POST['pseudo'];
$message=$_POST['message'];
$smile=$_POST['smile'];



$sql="INSERT INTO AMA(pseudo,message) VALUES('$name','$message')";
if ($_POST){
mysql_query($sql);
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
    <meta http-equiv="Refresh" content="30">

</head>

<body>
    <div class="mdl-layout mdl-js-layout">
        <main class="mdl-layout__content">
            <div class="page-content">
                <ul class="demo-list-item mdl-list" id="conversation">
<?php
$sql="SELECT * FROM AMA";
$query=mysql_query($sql);
while($row=mysql_fetch_array($query)){
  echo "<br>";
  echo $row['pseudo']." : ";
  echo $row['message'];
}

?>
                    <li class="mdl-list__item">
                        <span class="mdl-list__item-primary-content">
                            <strong><?php /* TODO */ ?></strong>: <?php /* TODO */ ?>
                        </span>
                    </li>
<?php
$smilies = array(
        ':|'  => 'mellow',
        ':-|' => 'mellow',
        ':-o' => 'ohmy',
        ':-O' => 'ohmy',
        ':o'  => 'ohmy',
        ':O'  => 'ohmy',
        ';)'  => 'wink',
        ';-)' => 'wink',
        ':p'  => 'tongue',
        ':-p' => 'tongue',
        ':P'  => 'tongue',
        ':-P' => 'tongue',
        ':D'  => 'biggrin',
        ':-D' => 'biggrin',
        '8)'  => 'cool',
        '8-)' => 'cool',
        ':)'  => 'smile',
        ':-)' => 'smile',
        ':('  => 'sad',
        ':-(' => 'sad',
    );
  if ($smilies [':|' ]=$smilies [':|' ])
  {
    $smile=$_POST['smile'];
  };



?>
                </ul>

                <form action="#" class="mdl-grid" method="POST">
                    <div class="mdl-cell mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" name="pseudo" value="pseudo" id="pseudo">
                        <label class="mdl-textfield__label" for="sample3">Pseudo</label>
                    </div>
                    <div class="mdl-cell mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" name="message" id="message">
                        <label class="mdl-textfield__label" for="sample3">Message</label>
                    </div>
                      <input type="image" src="images.jpg" alt="Submit" width="40" height="40" id="smile">
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
    <!-- Material Design Light -->
    <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
</body>

</html>
