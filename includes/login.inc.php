<?php
if (isset($_SESSION['dangerMsg'])) {
    unset($_SESSION['dangerMsg']);
}
?>

<div class="login">
    <div class="container" id="banner-white">
        <form action="php/login.php" method="post">
            <div class="row">
                <div class="col l12">
                    <div class="row">
                        <div class="input-field col l12">
                            <i class="material-icons prefix">account_box</i>
                            <input type="text" id="autocomplete-input" class="autocomplete" name="username" value="">
                            <label for="autocomplete-input">Username</label>
                        </div>
                    </div>
                </div>
                <div class="col l12">
                    <div class="row">
                        <div class="input-field col l12">
                            <i class="material-icons prefix">hot_tub</i>
                            <input type="password" id="autocomplete-input-1" class="autocomplete" name="password" value="">
                            <label for="autocomplete-input-1">Password</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input class="btn-large waves-effect cyan darken-4" type="submit" name="login" value="Login">
                    </div>
        </form>
                    <div class="col">
                        <a href="index.php">
                            <button class="btn-large waves-effect cyan darken-4">Go back</button>
                        </a>
                    </div>
                </div>
            </div>
    </div>
</div>