<?php

class Movie
{
    public $titolo;
    public $paese_produzione;
    public $anno;
    public $durata;
    public $regista;

    function __construct($_titolo, $_paese_produzione, $_anno, $_durata, $_regista)
    {
        $this->titolo = $_titolo;
        $this->paese_produzione = $_paese_produzione;
        $this->anno = $_anno;
        $this->durata = $_durata;
        $this->regista = $_regista;
    }
}

$movie1 = new Movie('La Haine', 'Francia', '1995', '95 minuti', 'Mathieu Kassovitz');
$moviu2 = new Movie('Inglourious Basterds', 'USA Germania', '2009', '153 minuti', 'Quentin Tarantino');

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>