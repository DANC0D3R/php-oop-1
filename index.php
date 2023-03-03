<?php 
class Movie{

    public $title;
    public $director;
    public $year;
    public $genres;
    public $poster;

    /**
     * @param String $title;
     * @param String $director;
     * @param Number $year;
     * @param Genres $genres;
    */

    public function __construct($_title, $_director, $_year, Genres $_genres)
    {
    $this->title=$_title;
    $this->director=$_director;
    $this->year=$_year;
    $this->genres=$_genres;
    }

    public function setPoster($_poster)
    {
        $this->poster = $_poster;
    }

    public function getPoster()
    {
        $placeholder = './img/placeholder-cover-not-avielable.png';

        if ($this->poster) {
            return $this->poster;
        }
        return $placeholder;
    }
}

class Genres{

    public $genre1;
    public $genre2;
    
    /**
     * @param String $genre1
     * @param String $genre2
     */

    public function __construct($_genre1, $_genre2 = null){
    $this->genre1=$_genre1;
    $this->genre2=$_genre2;
    }
}

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

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Daniele Minieri">
        <title>PHP OOP</title>

        <!-- Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <!-- Stile -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <h1>Movies</h1>
        <div class="dc-cont">
            <div class="container-fluid">
            <div class="row justify-content-center">
                <?php foreach($moviesList as $movie) : ?>
                    <div class="card mx-2 p-0">
                        <img src="<?php echo $movie->getPoster() ?>" class="card-img-top p-0" alt="<?php echo $movie->title ?>">
                        <div class="card-body text-center">
                            <h4 class="card-title"><?php echo $movie->title ?></h4>
                            <hr>
                            <h6><?php echo $movie->director ?></h6>
                            <hr>
                            <p class="card-text"><?php echo $movie->year ?></p>
                            <hr>
                            <p>Genre: <?php echo $movie->genres?->genre1 ?>,
                                <?php if($movie->genres?->genre2): ?>
                                <?php echo $movie->genres?->genre2 ?>
                                <?php endif; ?>
                            </p>
                            
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </body>
</html>