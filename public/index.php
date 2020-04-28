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
    "https://www.washingtonpost.com/resizer/rduyJyxnQahs6-CwLkvPaM4oCx0=/1484x0/arc-anglerfish-washpost-prod-washpost.s3.amazonaws.com/public/6FVR77O5VE5THDHUVRMFLPIZ5Q.jpg",
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
    "https://media.paruvendu.fr/image/ciment-haute-performance/WB16/3/2/WB163217763_1.jpeg",
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
    "data:image/jpeg;base64,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",
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