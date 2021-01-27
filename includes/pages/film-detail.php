<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/../includes/php/movie/data.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/../includes/php/movie/html.php';
$imgPath = getImgDir();

if (!isset($_SESSION['email'])) {
    header('location: index.php?p=inloggen');
}

$film = null;
if (isset($_GET['film'])) {
    $film = getSingleById($_GET['film']);

    $film->duration = minutesToHour($film->duration);
} else {
    header('location: index.php?p=404');
}

?>
<main>
    <?php if (isset($_GET['film'])) { ?>
        <div class="main-film-info">
            <img src="<?= $imgPath . $film->cover_image ?>" alt="<?= $film->title ?>">
            <div class="description">
                <div class="title">
                    <div class="icons">
                        <span class="fas fa-2x fa-bug"></span>
                        <span class="fas fa-2x fa-bug"></span>
                        <span class="fas fa-2x fa-bug"></span>
                    </div>
                    <h1><?= $film->title ?></h1>
                    <div class="flex-sub-group">
                        <h4>Duur: <?= $film->duration ?></h4>
                        <a href="#" class="button"><span class="fas fa-play"></span>Play</a>
                    </div>
                </div>
                <p><?= $film->description ?></p>
            </div>
        </div>

        <div class="film-detail-info">
            <h2><span>Regisseurs</span> - Cast</h2>
            <div class="tile-grid tile-small">
                <?php
                if (isset($film->directors)) {
                    foreach ($film->directors as $director) {
                        echo '<div class="item">
                          <img src="img/Peter.jpg" class="img-border" alt="Peter">
                          <p>' . $director->firstname . ' ' . $director->lastname . '</p>
                      </div>';
                    }

                    if (isset($film->cast)) {
                        foreach ($film->cast as $actor) {
                            echo '<div class="item">
                          <img src="img/Ian.jpg" alt="Peter">
                          <p>' . $actor->firstname . ' ' . $actor->lastname . '</p>
                          </div>';
                        }
                    }
                }
                ?>
            </div>

            <h2>Extra Information</h2>
            <p><?= $film->publication_year ?></p>

            <iframe width="1118" height="629" src="https://www.youtube.com/embed/V75dMMIW2B4"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
        </div>
    <?php } ?>
</main>