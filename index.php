<?php

class Movie
{
    public $name;
    public $director;
    public $year;
    public $length;
    public $genre;

    public function __construct($name, $director, $year, $length)
    {
        $this->name = $name;
        $this->director = $director;
        $this->year = $year;
        $this->length = $length;
    }

    public function durata()
    {
        if ($this->length > 120)
            return "$this->name e' un film lungo dalla durata di $this->length minuti";
        else
            return "$this->name e' un film corto dalla durata di $this->length minuti";
    }

    public function isOld()
    {

        if ($this->year < 2000) {
            return "$this->name e' un film vecchio datato $this->year";
        } else {
            return "$this->name e' un film recente datato $this->year";
        }
    }
}

$space_odissey = new Movie('2001: Odissea nello spazio', 'Stanley Kubrick', 1968, 139,"fantascienza");
$carnage = new Movie('Carnage', 'Roman Polansky', 2011, 79,"drammatico");
$genre = new Movie('Interstellar','Cristopher Nolan',2014,169,'fantascienza')

var_dump($space_odissey);
var_dump($carnage);

echo $space_odissey->durata();
echo $carnage->durata();
echo $space_odissey->isOld();
echo $carnage->isOld();
