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

    <form class="filter-form" action="#">
        <label for="zoeken">Zoek: </label>
        <input type="search" id="zoeken" name="zoeken" placeholder="Film, Regisseur">

        <label for="year">Zoek: </label>
        <input name="year" type="number" id="year" placeholder="Jaartal" min="1940" max="2020">

        <label for="filter">Filter op: </label>
        <select name="filter" id="filter">
            <option value="Naam">Naam</option>
            <option value="Naam">Jaar</option>
            <option value="Naam">Datum</option>
            <option value="Naam">Populariteit</option>
        </select>

        <label for="genre">Filter op: </label>
        <select name="genre" id="genre">
            <option value="Naam">Horror</option>
            <option value="Naam">Comedy</option>
            <option value="Naam">Actie</option>
            <option value="Naam">Romantiek</option>
        </select>
    </form>

    <div class="tile-grid">
        <?php
        foreach ($movies as $movie) {
            filmToHtml($movie);
        }
        ?>
    </div>
</main>