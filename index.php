<?php
    include '../private/config.php';

  if (isset($_GET['page'])){
    $page = $_GET['page'];
  }else{
    $page='home';
  }
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/materialize.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/materialize.js"></script>
    <link rel="shortcut icon" type="image/png" href="../Images/hmm.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Asap:wght@500&family=Teko:wght@500&display=swap" rel="stylesheet">
    <link rel="icon" href="../Images/xlarge.jpg" type="image/gif" sizes="16x16">
    <title>Patrick-Ruben Duel counter</title>
  </head>

  <body>
    <!-- Main content -->
    <?php
      session_start();
      include 'includes/'.$page.'.inc.php';
    ?>
  </body>

  <div class="footer">
    <p>(We all know dat tf2 een goed spel is) Made by: Ruben&copy; 2021 <?php if(isset($_SESSION['loggedin'])) {?><a href="php/logout.php"><button class="btn-small waves-effect cyan darken-4">Log out</button></a><?php } ?></p>
  </div>
    
</html>