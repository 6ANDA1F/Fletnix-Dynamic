<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/../includes/php/sql.php';
$imgPath = getImgDir();
?>

<header>
    <h1>Accountgegevens wijzigen</h1>
</header>
<main>
    <div class="profiel-info">
        <img src="<?= $imgPath ?>avatar.png" class="profiel-logo" alt="avatar">
        <h2>
            Profielnaam wijzigen
        </h2>
        <div class="button-wrapper">
            <a class="button" href="nickname.php">
                <strong>Edit name</strong>
            </a>
        </div>
        <h2>
            Email wijzigen
        </h2>
        <img src="<?= $imgPath ?>email.png" class="email-logo" alt="Email">
        <div class="button-wrapper">
            <a class="button" href="email.php">
                <strong>Edit email</strong>
            </a>
        </div>
    </div>
</main>