<!DOCTYPE html>
<html lang="en">

<head>
    <title>Social Network (PHP Course))</title>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="img/icon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
</head>

<body style="background-image: url('https://www.vps.net/blog/wp-content/uploads/2016/08/shutterstock_349708880-710x345.jpg'); background-repeat: repeat;">
    <?php
    include "shared/navbar.php";
    ?>

    <div class="container">

        <div class="row">
            <div class="col-sm-10 col-md-9 col-lg-8 mx-auto mt-5">
                <form class="form-signin" method="POST" action="?action=login">
                    <h2 class="form-signin-heading text-center mb-5 mt-5" style="color: #E8E4E1; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; font-size: 115px;">Welcome Back</h2>
                    <?php
                    if (isset($errorMsg)) {
                        echo "<div class='alert alert-warning' role='alert'>$errorMsg</div>";
                    }
                    ?>
                    <input type="text" class="form-control border-dark rounded-0 mb-1" name="username" placeholder="Nickname" required="" autofocus="" />
                    <input type="password" class="form-control border-dark rounded-0 mb-1" name="password" placeholder="Password" required="" />
                    <button class="btn btn-lg btn-dark border-0 btn-block rounded-0" type="submit">LOGIN</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>