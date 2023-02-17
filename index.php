<?php

class Movie
{
    public $name;
    public $director;
    public $year;
    public $length;

    public function __construct($name, $director, $year, $length)
    {
        $this->name = $name;
        $this->director = $director;
        $this->year = $year;
        $this->length = $length;
    }

    public function durata($length, $name)
    {
        if ($length > 120)
            return "$name e' un film lungo dalla durata di $length minuti";
        else
            return "$name e' un film corto dalla durata di $length minuti";
    }

    public function isOld($year, $name)
    {

        if ($year < 2000) {
            return "$name e' un film vecchio datato $year";
        } else {
            return "$name e' un film recente datato $year";
        }
    }
}

$space_odissey = new Movie('2001: Odissea nello spazio', 'Stanley Kubrick', 1968, 139);
$carnage = new Movie('Carnage', 'Roman Polansky', 2011, 79);

var_dump($space_odissey);
var_dump($carnage);

echo $space_odissey->durata(139, '2001: Odissea nello spazio');
echo $carnage->durata(79, 'Carnage');
echo $space_odissey->isOld(1968, '2001: Odissea nello spazio');
echo $space_odissey->isOld(2011, 'Carnage');
