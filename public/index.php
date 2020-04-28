<?php

use Entity\User;
use Entity\Post;

require '../vendor/autoload.php';

$user01 = new User(1, "Natasha", "Fajfrowska");
$user02 = new User(2, "Roanna", "Cooper");

$post01 = new Post(
    1,
    "images/chairs.jpg",
    "4 chaises en bois",
    "This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.",
    "Posté il y a 3 mins",
    "Meubles",
    "1er arrondissement",
    "natasha@icloud.com",
    $user01
);
$post02 = new Post(
    2,
    "images/leftovers.jpg",
    "Restes d'anniversaire",
    "This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.",
    "Posté il y a 10 mins",
    "Alimentaire",
    "13ème arrondissement",
    "+33663751431",
    $user02
);
$post03 = new Post(
    3,
    "images/ciment.jpg",
    "1 sac ciment",
    "This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.",
    "Posté il y a 2h",
    "Construction",
    "15ème arrondissement",
    "rocoop@gmail.com",
    $user02
);
$post04 = new Post(
    4,
    "images/feutres.jpg",
    "Lot de feutres",
    "This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.",
    "Posté il y a 3h",
    "Divers",
    "1er arrondissement",
    "natasha@icloud.com",
    $user01
);

$items = array($post01, $post02, $post03, $post04);

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Freecycle Marseille</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand h1">Freecycle Marseille</a>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="🔍Chercher" aria-label="Chercher">
                <!-- <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Chercher</button> -->
                <button class="btn btn-outline-success border-0 shadow-sm my-2 ml-2">LOGIN</button>
                <button class="btn btn-outline-danger border-0 shadow-sm my-2 ml-2">LOGOUT</button>
            </form>
        </div>
    </nav>

    <img src="images/hero.jpg" class="img-fluid mb-5" alt="Responsive image">

    <main class="container">
        <div class="row">

            <?php foreach ($items as $item) { ?>

                <article class="col-6">
                    <div class="card my-3 border-0 shadow-sm">
                        <div class="row no-gutters">
                            <div class="col-4 ">
                                <div class="rounded-left" style="background: url(<?php echo $item->url_image ?>) no-repeat center; background-size: cover; min-height: 100%; position: relative;">
                                </div>
                            </div>
                            <div class="col-8  ">
                                <div class="card-body">
                                    <h5 class="card-title h2 "><?php echo $item->title ?></h5>
                                    <p class="card-text"><?php echo $item->content ?>
                                        <small class="text-muted"><?php echo $item->created_at ?></small>
                                    </p>
                                    <p class="card-text"><span class="badge badge-secondary"><?php echo $item->category ?></span>
                                        <span class="badge badge-secondary"><?php echo $item->location ?></span></p>
                                    <p class="card-text">Contact: <?php echo $item->user->nickname ?>
                                        <a href="#" class="card-link"><?php echo $item->contact ?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

            <?php } ?>

        </div>
    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>