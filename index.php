<?php 
//definire una classe ‘Movie’
class Movie{
    //all'interno della classe sono dichiarate delle variabili d'istanza
    public $title;
    public $plot;
    public $language;
    public $director;
    public $price;
    //all'interno della classe è definito un costruttore
    public function __construct($_title, $_plot, $_language, $_director,$_price) {
        $this->title = $_title;
        $this->plot = $_plot;
        $this->language = $_language;
        $this->director = $_director;
        $this->price = $_price;
    }
    //all'interno della classe è definito almeno un metodo
    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice(int $price)
    {
        $this->price = $price;
    }

};
//vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
$titanic = new Movie("Titanic","lorem ipsum dolor sit","Emglish","James Cameron",12.99);
$inception = new Movie("Inception","lorem ipsum dolor sit","Emglish","Christopher Nolan",30);
$pinocchio = new Movie("Pinocchio","lorem ipsum dolor sit","Italiano","Matteo Garrone",10);

$titanic->setPrice(10);
?>