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
$movie2 = new Movie('Inglourious Basterds', 'USA, Germania', '2009', '153 minuti', 'Quentin Tarantino');

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="film1">
            <h1><?php echo  $movie1->titolo; ?> </h1>
            <h3><?php echo $movie1->paese_produzione ?></h3>
            <h3><?php echo $movie1->anno ?></h3>
            <h3><?php echo $movie1->durata ?></h3>
            <h3><?php echo $movie1->regista ?></h3>
        </div>
        <div class="film-2 pt-5">
            <h1><?php echo $movie2->titolo; ?> </h1>
            <h3><?php echo $movie2->paese_produzione ?></h3>
            <h3><?php echo $movie2->anno ?></h3>
            <h3><?php echo $movie2->durata ?></h3>
            <h3><?php echo $movie2->regista ?></h3>

        </div>

    </div>

</body>

</html>