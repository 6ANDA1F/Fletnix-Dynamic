<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/../includes/php/sql.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/../includes/php/accounts/inlog.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/../includes/php/accounts/update.php';


// if(isset($_POST['submit'])){
//      editEmail($_POST);
// }
?>

<header>
    <h1>Accountgegevens wijzigen</h1>
</header>
<main>
    <div class="profiel-info">
        <form action="index.php?p=email" class="form-block" method="post">
            <h3>Change e-mail</h3>
            <label>
                <input type="text" name="newemail" placeholder="New e-mail" required>
            </label>
        <div class="button-wrapper">
                <button type="submit" class="button" value="submit" name="submit">Finish editing</button>
        </div>
        </form>
       <?php if(isset($_POST['submit'])){
         $error = editEmail($_POST);
         echo "<h3 class='error'>$error</h3>";
        }
        ?>
        <div class="button-wrapper">
            <a class="button" href="index.php?p=profiel">
                <strong>Go back</strong>
            </a>
        </div>
    </div>
</main>