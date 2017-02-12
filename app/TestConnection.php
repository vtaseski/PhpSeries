<?php

namespace app;

include 'TMDb.php';
include 'Movie.php';
include 'DBImpl.php';

echo DBImpl::getRatingsForMovie('1') . "<br />";

foreach (DBImpl::getCommentsForMovie('1') as $UserId => $Comment) {
    echo $UserId . " : " . $Comment . "<br />";
}

echo DBImpl::getUserById('1') . "<br />";

echo DBImpl::getMoviesWatchedByUser('1')[0] . "<br />";

#echo "Affected rows: " . DBImpl::insertIntoUserMovies(1, 101);

#echo "Affected rows: " . DBImpl::insertIntoUserMoviesComments(2, 10, "komOdPHP");

#echo "Affected rows: " . DBImpl::insertIntoRatings(1, 9, 9);
