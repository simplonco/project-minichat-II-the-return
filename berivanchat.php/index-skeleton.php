<?php

$localhost="localhost";
$db_user="root";
$db_password="simplonco";
$db_name="TODO";
$connect=mysql_connect($localhost,$db_user,$db_password);
mysql_select_db($db_name);
$sql="SELECT * FROM minichat WHERE id = ";
  $pseudo=$_POST['pseudo'];
  $message=$_POST['message'];
  $sql="INSERT INTO minichat(pseudo,message) VALUES ('$pseudo','$message')";

if ($_POST) {
mysql_query($sql);
}

?>
<!DOCTYPE>
<html>

<head>
<style>
em {
  font-style: italic;
}
</style>

    <title>MiniChat Project II - The Return</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Material Design Light -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
      <meta http-equiv="refresh" content="30" />
      <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/cover.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <!-- Begin emoji-picker Stylesheets -->
  <link href="lib/css/nanoscroller.css" rel="stylesheet">
  <link href="lib/css/emoji.css" rel="stylesheet">
  <link href="lib/css/amina.css" rel="stylesheet">
</head>

<body>

    <div class="mdl-layout mdl-js-layout">
        <main class="mdl-layout__content">
            <div class="page-content">
                <ul class="demo-list-item mdl-list" id="conversation"></ul>



<?php
$localhost="localhost";
$db_user="root";
$db_password="simplonco";
$db_name="TODO";
$connect=mysql_connect($localhost,$db_user,$db_password);
mysql_select_db($db_name);


$sql="SELECT * FROM minichat ORDER BY ID DESC LIMIT 0,10";
$query=mysql_query($sql);
?>
<?php while($row=mysql_fetch_array($query)){
  echo $row['pseudo'].": ";
  echo $row['message']."<br>";
}
?>


                <form action="#" class="mdl-grid" method="POST">
                    <div class="mdl-cell mdl-textfield mdl-js-textfield mdl-textfield--floating-label">

                        <input class="mdl-textfield__input" type="text" name="pseudo" id="pseudo">
                        <label class="mdl-textfield__label" for="sample3">Pseudo</label>
                    </div>
                    <div class="mdl-cell mdl-textfield mdl-js-textfield mdl-textfield--floating-label ">
                        <input class="mdl-textfield__input lead mdl-textfield--floating-label is-upgraded" type="text" name="message" id="message" data-emojiable="true">
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
     // Finds all elements with `emojiable_selector` and converts them to rich emoji input fields
     // You may want to delay this step if you have dynamically created input fields that appear later in the loading process
     // It can be called as many times as necessary; previously converted input fields will not be converted again
     window.emojiPicker.discover();
   });
 </script>


<script>
// Google Analytics
 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

 ga('create', 'UA-49610253-3', 'auto');
 ga('send', 'pageview');

</script


</body>

</html>
