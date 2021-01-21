<?php 
session_start();

if(!isset($_SESSION['loggedin'])){
    header('Location: /index.php');
    die();
}

if($_SESSION['loggedin'] == "Ruby" || $_SESSION['loggedin'] == "Patty"){
    require '../private/config.php';

    if($_GET['user'] == "patrick"){
        $query = "UPDATE points SET points_patrick = points_patrick -1";
        $stmt = $connect -> prepare($query);
        $stmt -> execute();
    }

    else if($_GET['user'] == "ruben"){
        $query = "UPDATE points SET points_ruben = points_ruben -1";
        $stmt = $connect -> prepare($query);
        $stmt -> execute();
    }
}

header('Location: /index.php');

?>