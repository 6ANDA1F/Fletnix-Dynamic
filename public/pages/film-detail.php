<?php
$title = "The Lord of the Rings: The Fellowship of the Ring (2001)";
$filmDuration = "02:30:00";
$description = "The Lord of the Rings: The Fellowship of the Ring is het eerste deel van Peter Jacksons filmtrilogie The Lord of the Rings, gebaseerd op J.R.R. Tolkiens gelijknamige bestseller.
                De film was in 2002 genomineerd voor dertien Oscars en won er uiteindelijk vier.";
$regisseurs = array("Peter Jackson");
$actors = array(
    "Elijah wood",
    "Sean Astin",
    "Orlando Bloom",
    "Billy Boyd",
    "Sean Bean",
    "Cate Blanchett",
    "Ian McKellen"
);

$extraInfo = "De film ging op 19 december 2001 in première. Na The Fellowship of the Ring volgden The Two Towers (2002)
              en The Return of the King (2003).
              Deze films waren gelijktijdig met The Fellowship of the Ring opgenomen.";

$trailerYtId = "V75dMMIW2B4";

$film = array(
    'title' => $title,
    'film-duration' => $filmDuration,
    'description' => $description,
    'regisseurs' => $regisseurs,
    'actors' => $actors,
    'extra-info' => $extraInfo,
    '$trailerTtId' => $trailerYtId
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/normalize.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c4753c6a87.js" crossorigin="anonymous"></script>
    <title><?= $film['title'] ?></title>
</head>
<body>
<div class="layout-container">
    <nav>
        <a href="../index.html"><img src="../img/logo.png" alt="Logo"></a>
        <div class="menu">
            <a href="over-ons.php">Over ons</a>
            <a href="film-overzicht.php">Filmoverzicht</a>
            <a href="abonnement.php">Abonnement</a>
            <a href="profiel.php"><span class="fas fa-user-circle"></span>Inloggen</a>
            <!--            <a href="./profiel.pages"><span class="fas fa-user-circle"></span>Owen</a>-->
            <a href="../index.html">Home</a>
        </div>
    </nav>

    <main>
        <div class="main-film-info">
            <img src="../img/LOTR.jpg" alt="Lotr">
            <div class="description">
                <div class="title">
                    <div class="icons">
                        <span class="fas fa-2x fa-bug"></span>
                        <span class="fas fa-2x fa-bug"></span>
                        <span class="fas fa-2x fa-bug"></span>
                    </div>
                    <h1><?= $film['title'] ?></h1>
                    <div class="flex-sub-group">
                        <h4>Duur: 02:30:00</h4>
                        <a href="#" class="button"><span class="fas fa-play"></span>Play</a>
                    </div>
                </div>
                <p><?= $film['description'] ?></p>
            </div>
        </div>

        <div class="film-detail-info">
            <h2>Regisseurs</h2>
            <div class="tile-grid tile-small">
                <?php

                foreach ($film['regisseurs'] as $regisseur) {
                    echo '<div class="item">
                          <img src="../img/Peter.jpg" alt="Peter">
                          <p>' . $regisseur . '</p>
                          </div>';
                }
                ?>
            </div>

            <h2>Cast</h2>
            <div class="tile-grid tile-small">
                <?php

                foreach ($film['actors'] as $actor) {
                    echo '<div class="item">
                          <img src="../img/Ian.jpg" alt="Peter">
                          <p>' . $actor . '</p>
                          </div>';
                }
                ?>
            </div>

            <h2>Extra Information</h2>
            <p><?= $film['extra-info'] ?></p>

            <iframe width="1118" height="629" src="https://www.youtube.com/embed/V75dMMIW2B4"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
        </div>
    </main>
</div>
</body>
</html>