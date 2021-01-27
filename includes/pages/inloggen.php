<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/../includes/php/accounts/inlog.php';
$imgPath = getImgDir();




?>

<header>
    <h1>Inloggen</h1>
</header>



<main>
    <form action="index.php?p=inloggen" method="post">
      <img src="<?= $imgPath ?>avatar.png" class="profiel-logo" alt="avatar">
         <div class="Login">
            <label>
                <input type="text" class="loginUsername" placeholder="Enter Username" name="username" required>
            </label>
            <label>
                <input type="password" class="loginPassword" placeholder="Enter Password" name="password" required>
            <div class="button-wrapper">
                <button type="submit" class="button" name="submit">Login</button>
            </div>
            </label>
            <?php if(isset($_POST['submit'])){
             $error = checkLogin($_POST);
             echo "<h3 class='error'>$error</h3>";
            } ?>
            <div class="button-wrapper">
                <a class="button" href="index.php?p=registreren">
                <strong>Registreren</strong>
                </a>
            </div>
        </div>
    </form>
</main>

