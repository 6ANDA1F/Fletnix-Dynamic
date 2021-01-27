<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/../includes/php/sql.php';

$imgPath = getImgDir();

if (!isset($_SESSION['email'])) {
    header('location: index.php?p=403');
}

if(isset($_SESSION['name'])){
    $name = $_SESSION['name'];
}


?>

<header>
    <h1>Accountgegevens wijzigen</h1>
</header>
<main>
    <div class="profiel-info">
        <h2>
            Welkom <?php echo $name ?>
        </h2>
        <img src="<?= $imgPath ?>avatar.png" class="profiel-logo" alt="avatar">
        <h2>
            Username wijzigen
        </h2>
        <div class="button-wrapper">
            <a class="button" href="index.php?p=username">
                <strong>Edit username</strong>
            </a>
        </div>
        <h2>
            Email wijzigen
        </h2>
        <img src="<?= $imgPath ?>email.png" class="email-logo" alt="Email">
        <div class="button-wrapper">
            <a class="button" href="index.php?p=email">
                <strong>Edit email</strong>
            </a>
        </div>
        <h2>
            Password wijzigen
        </h2>
        <img src="<?= $imgPath ?>lock.png" class="email-logo" alt="Lock">
        <div class="button-wrapper">
            <a class="button" href="index.php?p=password">
                <strong>Edit password</strong>
            </a>
        </div>
        <div class="button-wrapper">
            <a class="button" href="index.php?p=uitloggen">
                <strong>Uitloggen</strong>
            </a>
        </div>
    </div>
</main>
