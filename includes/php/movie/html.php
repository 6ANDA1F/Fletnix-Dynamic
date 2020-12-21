<?php
// Film overzicht
function filmToHtml($filmArray)
{
    echo <<<HTML

       <div class="item">
            <a href="#">
                <h3>{$filmArray['title']}</h3>
                <img src="{$filmArray['imageUrl']}" alt="{$filmArray['title']}">
            </a>
       </div>

HTML;

}

function createFilm($title, $filmDuration, $description, $regisseurs, $actors, $extraInfo, $trailerYtId, $banner) {
    $imgFolder = '/img/';

    return array(
        'title' => $title,
        'film-duration' => minutesToHour($filmDuration),
        'description' => $description,
        'regisseurs' => $regisseurs,
        'actors' => $actors,
        'extra-info' => $extraInfo,
        'trailerTtId' => $trailerYtId,
        'banner' => $imgFolder . $banner
    );
}
//

// Film detail
function minutesToHour($minutes) {
    return date("H:i", mktime(0, $minutes));
}