<?php
if(isset($_GET['p'])) {
    $page = $_GET['p'];
} else {
    $page = 'home';
}

if(isset($_SESSION['name'])){
    $uname = $_SESSION['name'];
    $url = "index.php?p=profiel";
}else{
    $uname = "Inloggen";
    $url = "index.php?p=inloggen";
}

?>

<nav>
    <a href="index.php"><img src="img/logo.png" alt="Logo"></a>
    <div class="menu">
        <a class="<?= $page == 'over-ons' ? 'actief' : ''?>" href="index.php?p=over-ons">Over ons</a>
        <a class="<?= $page == 'film-overzicht' ? 'actief' : ''?>" href="index.php?p=film-overzicht">Filmoverzicht</a>
        <a class="<?= $page == 'abonnement' ? 'actief' : ''?>" href="index.php?p=abonnement">Abonnement</a>
        <a class="<?= $page == 'inloggen' ? 'actief' : ''?>" href="<?= $url ?>"><span class="fas fa-user-circle"></span><?= $uname ?></a>
        <!--            <a href="./profiel.pages"><span class="fas fa-user-circle"></span>Owen</a>-->
        <a class="<?= $page == 'home' ? 'actief' : ''?>" href="index.php">Home</a>
    </div>
</nav>