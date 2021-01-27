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

function paginationHtml($page) {

    $originalUrl = $_SERVER['REQUEST_URI'];
    if ($paginationParamPos = strpos($_SERVER['REQUEST_URI'], '&pagination_page')) {
        $originalUrl = substr($originalUrl, 0, $paginationParamPos);
    }

    // The "back" link
    echo ($page > 0) ? '<a href="'. $originalUrl .'" title="First page">&laquo;</a> <a href="'. $originalUrl .'&pagination_page=' . ($page - 1) . '" title="Previous page">&lsaquo;</a>' : '<span class="disabled">&laquo;</span> <span class="disabled">&lsaquo;</span>';

    // The "forward" link
    echo '<a href="'.$originalUrl.'&pagination_page=' . ($page + 1) . '" title="Next page">&rsaquo;</a>';
}
//

// Film detail
function minutesToHour($minutes) {
    return date("H:i", mktime(0, $minutes));
}