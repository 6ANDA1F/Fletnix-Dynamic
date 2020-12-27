<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/../includes/php/sql.php';

/**
 *
 * Movies
 *
 */

const TABLE_MOVIES = "Movie M";
const TABLE_MOVIE_CAST = "Movie_Cast MC";
const TABLE_MOVIE_DIRECTOR = "Movie_Director MD";
const TABLE_PERSON = "Person P";

function getAll($limit = 20)
{
    $sql = 'SELECT movie_id, title, cover_image FROM ' . TABLE_MOVIES . ' ORDER BY movie_id
            OFFSET 0 ROWS FETCH NEXT :limit ROWS ONLY';

    $handler = getDatabaseHandler();

    $query = $handler->prepare($sql);

    $query->bindParam(':limit', $limit, PDO::PARAM_INT);
    $query->execute();

    return $query->fetchAll(PDO::FETCH_OBJ);
}

function getSingleById($id)
{
    $sql = 'SELECT M.title, M.duration, M.description, M.publication_year, M.cover_image, P.firstname, P.lastname
            FROM ' . TABLE_MOVIES . ' 
            LEFT JOIN '. TABLE_MOVIE_DIRECTOR .' ON MD.movie_id = M.movie_id JOIN ' . TABLE_PERSON . ' ON MD.person_id = P.person_id
            LEFT JOIN '. TABLE_MOVIE_CAST .' ON MC.movie_id = M.movie_id JOIN '. TABLE_PERSON .' ON MC.person_id = P.person_id
            WHERE movie_id = :id';

    $handler = getDatabaseHandler();

    $query = $handler->prepare($sql);

    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->execute();

    return $query->fetch(PDO::FETCH_OBJ);
}