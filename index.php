<?php 
//definire una classe ‘Movie’
class Movie{
    //all'interno della classe sono dichiarate delle variabili d'istanza
    public $title;
    public $plot;
    public $language;
    public $director;
    public $rating;
    //all'interno della classe è definito un costruttore
    public function __construct($_title, $_plot, $_language, $_director, $_rating) {
        $this->title = $_title;
        $this->plot = $_plot;
        $this->language = $_language;
        $this->director = $_director;
        $this->rating = $_rating;
    }
}
//all'interno della classe è definito almeno un metodo
//vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
?>