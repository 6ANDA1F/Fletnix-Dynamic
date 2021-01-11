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
    $sql = 'SELECT M.movie_id, M.title, M.duration, M.description, M.publication_year, M.cover_image, PDIR.person_id AS dirId, PDIR.firstname AS dirFirst, PDIR.lastname AS dirLast, PCAST.person_id AS castId, PCAST.firstname AS castFirst, PCAST.lastname AS castLast
            FROM ' . TABLE_MOVIES . ' 
            LEFT JOIN ' . TABLE_MOVIE_DIRECTOR . ' ON MD.movie_id = M.movie_id JOIN ' . TABLE_PERSON . 'DIR ON MD.person_id = PDIR.person_id
            LEFT JOIN ' . TABLE_MOVIE_CAST . ' ON MC.movie_id = M.movie_id JOIN ' . TABLE_PERSON . 'CAST ON MC.person_id = PCAST.person_id
            WHERE M.movie_id = :id';

    $handler = getDatabaseHandler();

    $query = $handler->prepare($sql);

    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->execute();

    $result = $query->fetchAll(PDO::FETCH_OBJ);

    $movie = new stdClass();
    array_map(function ($object) use ($movie) {
        $director = new stdClass();
        $director->id = $object->dirId;
        $director->firstname = $object->dirFirst;
        $director->lastname = $object->dirLast;

        if (!isset($movie->cast)) {

        }
        $cast_person = new stdClass();
        $cast_person->id = $object->castId;
        $cast_person->firstname = $object->castFirst;
        $cast_person->lastname = $object->castLast;

        if (!isset($movie->movie_id)) {
            $movie->movie_id = $object->movie_id;
            $movie->title = $object->title;
            $movie->duration = $object->duration;
            $movie->description = $object->description;
            $movie->publication_year = $object->publication_year;
            $movie->cover_image = $object->cover_image;
            $movie->directors = array($director);
            $movie->cast = array($cast_person);
        } else {
            if (!in_array_of_objects($movie->directors, 'id', $object->dirId)) {
                $movie->directors[] = $director;
            }

            if (!in_array_of_objects($movie->cast, 'id', $object->castId)) {
                $movie->cast[] = $cast_person;
            }
        }
    }, $result);

    return $movie;
}

function in_array_of_objects($array, $attr, $value) {
    foreach ($array as $item) {
        if ($item->$attr == $value) {
            return true;
        }
    }
    return false;
}