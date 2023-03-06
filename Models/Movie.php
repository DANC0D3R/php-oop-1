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

    public function __construct($_title, $_director, $_year, Genres $_genres){
        $this->title=$_title;
        $this->director=$_director;
        $this->year=$_year;
        $this->genres=$_genres;
    }

    public function setPoster($_poster){
        $this->poster = $_poster;
    }

    public function getPoster(){
        $placeholder = './img/placeholder-cover-not-avielable.png';

        if ($this->poster) {
            return $this->poster;
        }
        return $placeholder;
    }
}