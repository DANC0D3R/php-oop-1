<?php
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