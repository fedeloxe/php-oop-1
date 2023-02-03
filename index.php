<?php

class Movie
{
    public $titolo;
    public $paese_produzione;
    public $anno;
    public $durata;
    public $regista;
    public $locandina;

    function __construct($_titolo, $_paese_produzione, $_anno, $_durata, $_regista, $_locandina)
    {
        $this->titolo = $_titolo;
        $this->paese_produzione = $_paese_produzione;
        $this->anno = $_anno;
        $this->durata = $_durata;
        $this->regista = $_regista;
        $this->locandina = $_locandina;
    }

    public function getAge()
    {
        $currentYear = date("Y");
        $age = $currentYear - $this->anno;
        return $age;
    }
}

$movie1 = new Movie('La Haine', 'Francia', '1995', '95 minuti', 'Mathieu Kassovitz', 'https://images-na.ssl-images-amazon.com/images/S/pv-target-images/35191590405a3ad59c008ef49eebc52db5511ae34d527e942a51e9b43d2a194f._RI_V_TTW_.jpg');
$movie2 = new Movie('Inglourious Basterds', 'USA, Germania', '2009', '153 minuti', 'Quentin Tarantino', 'https://pad.mymovies.it/filmclub/2008/10/105/locandina.jpg');

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>PHP-OOP-1</title>
</head>

<body>
    <div class="container pt-5">
        <h1>Lista film belli </h1>
        <div class="film1 d-flex pt-5">
            <div class="locandina w-25">
                <img class="card-img-top" src="<?php echo $movie1->locandina; ?>" alt="locandina">
            </div>
            <div class="info ps-5">
                <h1><?php echo  $movie1->titolo; ?> </h1>
                <h3><?php echo $movie1->paese_produzione ?></h3>
                <h3><?php echo $movie1->anno ?></h3>
                <h3><?php echo $movie1->durata ?></h3>
                <h3><?php echo $movie1->regista ?></h3>
                <h3>L'età del film è : <?php echo $movie1->getAge(); ?> anni</h3>

            </div>
        </div>
        <div class="film-2 pt-5 d-flex">
            <div class="locandina w-25">
                <img class="card-img-top" src="<?php echo $movie2->locandina; ?>" alt="locandina">
            </div>
            <div class="info ps-5">
                <h1><?php echo $movie2->titolo; ?> </h1>
                <h3><?php echo $movie2->paese_produzione ?></h3>
                <h3><?php echo $movie2->anno ?></h3>
                <h3><?php echo $movie2->durata ?></h3>
                <h3><?php echo $movie2->regista ?></h3>
                <h3>L'età del film è : <?php echo $movie2->getAge(); ?> anni</h3>
            </div>

        </div>

    </div>

</body>

</html>