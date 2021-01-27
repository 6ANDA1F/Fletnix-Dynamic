<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/../includes/php/sql.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/../includes/php/accounts/update.php';

if (!isset($_SESSION['email'])) {
    header('location: index.php?p=403');
}

if(isset($_POST['submit'])){
    editPassword($_POST);
}

?>


<header>
    <h1>Accountgegevens wijzigen</h1>
</header>
<main>
    <div class="profiel-info">
        <form action="index.php?p=password" class="form-block" method="post">
            <h3>Change password</h3>
            <label>
                <input type="password" name="newpassword" placeholder="New Password" required>
            </label>
            <div class="button-wrapper">
                <button type="submit" class="button" value="submit" name="submit">Finish editing</button>
            </div>
        </form>
        <div class="button-wrapper">
            <a class="button" href="index.php?p=profiel">
                <strong>Go back</strong>
            </a>
        </div>
    </div>
</main>