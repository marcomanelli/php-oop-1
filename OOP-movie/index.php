<?php

require_once __DIR__ . '/classes/Movie.php';


$movie1 = new Movie("Ritorno al futuro");
$movie1->setGenres('Fantascienza|Commedia|Documentario');
$movie1->setCast('Lino Banfi|Toto Cotugno|Sting');
$movie1->overview = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat est, eum, pariatur tenetur itaque sequi voluptate aliquam vero sapiente ut ab libero animi debitis nobis! Accusantium illum eos recusandae harum!";
$movie1->setVote(4);
//var_dump($movie1);

$movie2 = new Movie("Colazione da Tiffany");
$movie2->setGenres('FRomantico|Storico|Commedia');
$movie2->setCast('Audrey Hepburn|Gina Lollobrigida');
$movie2->overview = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat est, eum, pariatur tenetur itaque sequi voluptate aliquam vero sapiente ut ab libero animi debitis nobis! Accusantium illum eos recusandae harum!";
$movie2->setVote(5);


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <title>Movie</title>
</head>
<body>
<div class="container my-5">
  <h1>Film Vincitore</h1>
  <div class="row">

    <div class="col">
      Titolo: <?php echo $movie1->getTitle() ?>
    </div>

    <div class="col">
      Generi:
      <ul>
        <?php foreach ($movie1->getGenres() as $genre) : ?>

          <li><?php echo $genre ?></li>

        <?php endforeach; ?>
      </ul>
    </div>

    <div class="col">
      Cast:
      <ul>
        <?php foreach ($movie1->getCast() as $cast) : ?>

          <li><?php echo $cast ?></li>

        <?php endforeach; ?>
      </ul>
    </div>

    <div class="col">
          <p> <strong>Trama:</strong> <?php echo $movie1->overview ?></p>
    </div>

    <div class="col">
          <p> <strong>Voto:</strong> <?php echo $movie1->getVote() ?></p>
    </div>


  </div>

  <h1>Secono classificato</h1>
  <div class="row">

    <div class="col">
      Titolo: <?php echo $movie2->getTitle() ?>
    </div>

    <div class="col">
      Generi:
      <ul>
        <?php foreach ($movie2->getGenres() as $genre) : ?>

          <li><?php echo $genre ?></li>

        <?php endforeach; ?>
      </ul>
    </div>

    <div class="col">
      Cast:
      <ul>
        <?php foreach ($movie2->getCast() as $cast) : ?>

          <li><?php echo $cast ?></li>

        <?php endforeach; ?>
      </ul>
    </div>

    <div class="col">
          <p> <strong>Trama:</strong> <?php echo $movie2->overview ?></p>
    </div>

    <div class="col">
          <p> <strong>Voto:</strong> <?php echo $movie2->getVote() ?></p>
    </div>


  </div>
  <h3>Totale film:<?php echo Movie::getCounter() ?> </h3>
</div>
 
</body>
</html>
