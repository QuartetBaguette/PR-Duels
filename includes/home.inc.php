<?php
$points_p1 = functions::getScore(1);
$points_p2 = functions::getScore(2);
?>

<div id="banner" class="row">
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
            <h1 class="wht center-align"><?php echo $points_p1; ?> Wins</h1>

            <?php if(isset($_SESSION['loggedin'])) {?>
                <div class="center-align">
                    <a class="button" href="php/get.php?pAddPoint=1"><button class="btn-large waves-effect cyan darken-4" type="submit" name="action">Patrick won</button></a>
                    <a class="button" href="php/get.php?pCorrect=1"><button class="btn-large waves-effect cyan darken-4" type="submit" name="action">Correction</button></a>
                </div>
            <?php } ?>
        </div>
        <div class="col l2">
            <h1 class="wht center-align">-</h1>
        </div>
        <div class="col l4">
            <h1 class="wht center-align"><?php echo $points_p2; ?> Wins</h1>

            <?php if(isset($_SESSION['loggedin'])) {?>
                <div class="center-align">
                    <a class="button" href="php/get.php?pAddPoint=2"><button class="btn-large waves-effect cyan darken-4" type="submit" name="action">Ruben won</button></a>
                    <a class="button" href="php/get.php?pCorrect=2"><button class="btn-large waves-effect cyan darken-4" type="submit" name="action">Correction</button></a>
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