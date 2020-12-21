<?php

$title = "The Lord of the Rings: The Fellowship of the Ring (2001)";
$filmDuration = 150;
$description = "The Lord of the Rings: The Fellowship of the Ring is het eerste deel van Peter Jacksons filmtrilogie The Lord of the Rings, gebaseerd op J.R.R. Tolkiens gelijknamige bestseller.
                De film was in 2002 genomineerd voor dertien Oscars en won er uiteindelijk vier.";
$regisseurs = array(
    'name' => "Peter Jackson",
    'img' => $GLOBALS['imgPath'] . "peter.jpg"
);
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
    'film-duration' => minutesToHour($filmDuration),
    'description' => $description,
    'regisseurs' => $regisseurs,
    'actors' => $actors,
    'extra-info' => $extraInfo,
    '$trailerTtId' => $trailerYtId,
    'banner' => 'peter.jpg'
);

?>

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
                    <h4>Duur: <?= $film['film-duration'] ?></h4>
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