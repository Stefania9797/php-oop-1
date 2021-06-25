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
    public function setPrice(int $price)
    {
        $this->price = $price;
    }

};
//vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
$titanic = new Movie("Titanic","Il transatlantico Titanic, considerato un gioiello tecnologico ed il più lussuoso piroscafo da crociera mai realizzato, salpa dall'Inghilterra il dieci aprile del 1912 con oltre 1500 passeggeri a bordo per il suo viaggio inaugurale. I viaggiatori sono collocati in tre classi, riflesso delle differenze sociali.","Inglese","James Cameron",12.99);
$inception = new Movie("Inception","Dom Cobb possiede una qualifica speciale: è in grado di inserirsi nei sogni altrui per prelevare i segreti nascosti nel più profondo del subconscio. Viene contattato da Saito, un potentissimo industriale giapponese.","Inglese","Christopher Nolan",30);
$pinocchio = new Movie("Pinocchio","Il povero Geppetto, per smorzare la propria solitudine, costruisce un burattino di legno che gli faccia da figlio. Per magia, la creaturina prende vita, desiderosa solo di diventare un bambino vero. Crescere, però, si dimostra un'ardua impresa.","Italiano","Matteo Garrone",10);

$titanic->setPrice(10);
$inception->setPrice(17);
$movies = [$titanic, $inception, $pinocchio]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 1</title>
    <style>
        body{
            font-family: sans-serif;
        }
        .movie{
            padding: 10px;
            margin: 10px 0;
            border: 2px solid lightgray;
        }
    </style>
</head>
<body>
    <h1>Movies</h1>
    <div class="movies">
        <?php foreach ($movies as $movie) { ?>
        <div class="movie">
            <h2><?php echo $movie-> title ?></h2>
            <p><?php echo $movie-> plot ?></p>
            <h3>Lingua:<?php echo $movie-> language ?></h3>
            <h3>Regista:<?php echo $movie-> director ?></h3>
            <h5><?php echo $movie-> price ?> Euro</h5>
        </div>
        <?php } ?>
    </div>
</body>
</html>