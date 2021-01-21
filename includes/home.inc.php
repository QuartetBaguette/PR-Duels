<?php
require 'php/get_score.php';
?>

<div id="banner">
</br>

    <h1 class="wht center-align" id="title">De tussenstand van de duels tussen Patrick en Ruben</h1> </br> </br>
    <div class="row">
        <div class="col l6">
            <h1 class="wht center-align">Patrick</h1>
        </div>
        <div class="col l6">
            <h1 class="wht center-align">Ruben</h1>
        </div>
    </div>
    

    <div class="row">
        <div class="col l1"></div>
        <div class="col l4">
            <h1 class="wht center-align"><?php echo $points['points_patrick']; ?> Wins</h1>

            <?php if(isset($_SESSION['loggedin'])) {?>
                <div class="center-align">
                    <a class="button" href="php/add_point.php?user=patrick"><button class="btn-large waves-effect cyan darken-4" type="submit" name="action">Patrick won</button></a>
                    <a class="button" href="php/correction.php?user=patrick"><button class="btn-large waves-effect cyan darken-4" type="submit" name="action">Correction</button></a>
                </div>
            <?php } ?>
        </div>
        <div class="col l2">
            <h1 class="wht center-align">-</h1>
        </div>
        <div class="col l4">
            <h1 class="wht center-align"><?php echo $points['points_ruben']; ?> Wins</h1>

            <?php if(isset($_SESSION['loggedin'])) {?>
                <div class="center-align">
                    <a class="button" href="php/add_point.php?user=ruben"><button class="btn-large waves-effect cyan darken-4" type="submit" name="action">Ruben won</button></a>
                    <a class="button" href="php/correction.php?user=ruben"><button class="btn-large waves-effect cyan darken-4" type="submit" name="action">Correction</button></a>
                </div>
            <?php } ?>
        </div>
    </div>

    <?php 
        if(!isset($_SESSION['loggedin'])) {
            echo '<div class="row center-align"><a class="button" href="index.php?page=login"><button class="btn-large waves-effect cyan darken-4" type="submit" name="action">Login</button></a></div>';
        }
    ?>
</div>