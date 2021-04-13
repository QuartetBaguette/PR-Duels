<?php
$points_p1 = functions::getScore(1);
$points_p2 = functions::getScore(2);
$match_history = functions::getRecentHistory();
?>

<div id="banner" class="row">
</br>

    <h1 class="wht center-align" id="title">De tussenstand van de duels tussen</br> Patrick en Ruben</h1> </br> </br>
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
            echo '<div class="row center-align"><a class="button" href="index.php?page=history"><button class="btn-large waves-effect cyan darken-4" type="submit" name="action">View all matches</button></a></div>';
        }
    ?>

    </br>
    <div class="divider"></div>

    <div class="row center-align tableHistory">
        <h1>Recent match history:</h1>
        <table class="responsive-table centered">
            <thead>
              <tr>
                  <th>Map:</th>
                  <th>Duel kills Patrick:</th>
                  <th>Duel kills Ruben:</th>
              </tr>
            </thead>
        
            <tbody>
        
        <?php
            foreach($match_history as $history){
        ?>
              <tr>
                <td><?php echo $history['mode_name']; echo $history['map_name']; ?></td>
                <td><?php echo $history['DK_patrick']; ?></td>
                <td><?php echo $history['DK_ruben']; ?></td>
              </tr>
        <?php
            }
        ?>
           </tbody>
        </table>

    </div>
</div>