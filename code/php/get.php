<?php
    require 'functions.php';
    require '../../Private/config.php';

    if(isset($_GET['pAddPoint'])){
        functions::addPoint($_GET['pAddPoint']);
    }

    if(isset($_GET['pCorrect'])){
        functions::correction($_GET['pCorrect']);
    }

?>