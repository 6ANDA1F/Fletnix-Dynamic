<?php

// Film overzicht
function filmToHtml($filmObj)
{
    $imgPath = getImgDir();
    echo <<<HTML

       <div class="item">
            <a href="index.php?p=film-detail&film={$filmObj->movie_id}">
                <h3>{$filmObj->title}</h3>
                <img src="{$imgPath}{$filmObj->cover_image}" alt="{$filmObj->title}">
            </a>
       </div>

HTML;

}
//

// Film detail
function minutesToHour($minutes) {
    return date("H:i", mktime(0, $minutes));
}