<?php
include_once './Models/Movie.php';
include_once './Models/Genre.php';

$movie1 = new Movie("Bullet Train", "David Leitch", 2022, new Genres("Action", "Comedy") );
$movie1->setPoster("img/bullet-train-cover.jpg");

$movie2 = new Movie("Nope", "Jordan Peele", 2022, new Genres("Horror", "Sci-fi"));
$movie2->setPoster("img/nope-cover.jpg");

$movie3 = new Movie("The Gentlemen", "Guy Ritchie", 2019, new Genres("Action", "Thriller"));
$movie3->setPoster("img/the-gentlemen-cover.jpg");

$movie4 = new Movie("Top Gun: Maverick", "Joseph Kosinski", 2022, new Genres("Action", "Adventure"));
$movie4->setPoster("img/top-gun-maverick-cover.jpg");

$movie5 = new Movie("The Menu", "Joseph Kosinski", 2022, new Genres("Horror", "Thriller"));
$movie5->setPoster("img/the-menu-cover.jpg");

$movie6 = new Movie("Uncharted", "Ruben Fleischer", 2022, new Genres("Action", "Adventure"));

$moviesList=[$movie1, $movie2, $movie3, $movie4, $movie5, $movie6];
?>