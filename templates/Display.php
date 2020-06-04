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
    <?php
    include "shared/navbar.php";
    ?>

    <div class="container py-5 mb-5" style="color: #E8E4E1;">
        <h1 style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; letter-spacing: -10px; font-size: 284px;">
            FREECYCLE
        </h1>
        <h1 style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; font-size: 180px; letter-spacing: 50px; line-height: 40%">
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
                                    <p><a href="?search=@<?= $item->user->nickname ?>" class="card-link">@<?= $item->user->nickname ?></a></p>
                                    <p class="card-text"><?php echo $item->content ?>
                                        <small class="text-muted"><?php echo $item->created_at ?></small>
                                    </p>
                                    <p class="card-text"><span class="badge badge-secondary rounded-0"><?php echo $item->category ?></span>
                                        <span class="badge badge-secondary rounded-0"><?php echo $item->location ?></span></p>
                                    <p>
                                        Contact : <a href="#" class="card-link"><?php echo $item->contact ?></a></p>
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