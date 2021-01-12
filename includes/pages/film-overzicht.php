<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/../includes/php/movie/data.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/../includes/php/movie/html.php';
$imgPath = getImgDir();
$movies = getAll(30);
?>

<header>
    <h1>Top films</h1>
</header>

<main>

    <form class="filter-form" method="get" action="">
        <input type="hidden" name="p" value="film-overzicht">

        <label for="zoeken">Zoek: </label>
        <input type="search" id="zoeken" name="search" placeholder="Film, Regisseur">

        <label for="year">Zoek: </label>
        <input name="year" type="number" id="year" placeholder="Jaartal" min="1900" max="2021">

        <label for="genre">Filter op: </label>
        <select name="genre" id="genre">
            <option value="">Geen</option>
            <option value="Horror">Horror</option>
            <option value="Comedy">Comedy</option>
            <option value="Action">Actie</option>
            <option value="Romantic">Romantiek</option>
        </select>

        <input type="submit" value="Zoek">
    </form>

    <div class="tile-grid">
        <?php
        foreach ($movies as $movie) {
            filmToHtml($movie);
        }
        ?>
    </div>
</main>