<?php

use Entity\User;
use Entity\Post;

require '../vendor/autoload.php';

$user01 = new User(1, "Natasha", "Fajfrowska");
$user02 = new User(2, "Roanna", "Cooper");

$post01 = new Post(
    1,
    "http://www.authentic-antiques.com/images/chaises_bistrot_baumann.jpg",
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

<body style="background-image: url('https://www.vps.net/blog/wp-content/uploads/2016/08/shutterstock_349708880-710x345.jpg'); background-repeat: repeat;">
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand h1 pt-3">SHOPPING GRATUIT ENTRE MARSEILLAIS</a>
            <form class="form-inline">
                <input class="form-control border-dark rounded-0 mr-2" type="search" placeholder="Chercher" aria-label="Chercher">
                <!-- <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Chercher</button> -->
                <button class="btn-success border-0 px-4 py-2 ml-2">LOGIN</button>
                <!-- <button class="btn-danger px-3 ml-2">OUT</button> -->
            </form>
        </div>
    </nav>

    <div class="container py-5 mb-5" style="color: #E8E4E1;">
        <h1 style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; letter-spacing: -10px; font-size: 284px;">
            FREECYCLE
        </h1>
        <h1 style="font-size: 180px; letter-spacing: 50px; line-height: 40%">
            Marseille
        </h1>
    </div>

    <main class="container">
        <div class="row">

            <?php foreach ($items as $item) { ?>

                <article class="col-12">
                    <div class="my-3" style="background-color: #E8E4E1; border: solid #948F8A; border-width: thick;">
                        <div class="row">
                            <div class="col-4">
                                <div style="background: url('<?php echo $item->url_image ?>') no-repeat center; background-size: cover; min-height: 100%; position: relative">
                                </div>
                            </div>
                            <div class="col-8  ">
                                <div class="card-body">
                                    <h5 class="card-title h2 "><?php echo $item->title ?></h5>
                                    <p class="card-text"><?php echo $item->content ?>
                                        <small class="text-muted"><?php echo $item->created_at ?></small>
                                    </p>
                                    <p class="card-text"><span class="badge badge-secondary rounded-0"><?php echo $item->category ?></span>
                                        <span class="badge badge-secondary rounded-0"><?php echo $item->location ?></span></p>
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