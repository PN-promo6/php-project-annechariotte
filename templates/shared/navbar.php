<nav class="navbar navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand h1 pt-3" href="?action=display" role="button">SHOPPING GRATUIT ENTRE MARSEILLAIS</a>

        <form class="nav-item ml-auto">
            <input name="search" class="form-control border-dark rounded-0 " type="search" placeholder="Chercher" aria-label="Chercher">
            <!-- <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Chercher</button> -->
        </form>
        <?php
        if (isset($_SESSION['user'])) {
        ?>
            <a class="nav-item btn-danger border-0 px-4 py-2 ml-2" href="?action=logout" role="button">LOGOUT</a>
        <?php
        } else {
        ?>
            <a class=" nav-item btn-success border-0 px-4 py-2 ml-2" type="submit" href="?action=login">LOGIN</a>
            <a class="nav-item btn-dark border-0 px-4 py-2 ml-2" type="submit" href="?action=register">SIGN UP</a>
        <?php
        }
        ?>

        <!-- <form class="justify-content-end">
            <input type="hidden" name="action" value="login">
            <button class="btn-success border-0 px-4 py-2 ml-0" type="submit">LOGIN</button>
        </form>
        <form class="justify-content-end">
            <input type="hidden" name="action" value="register">
            <button class="btn-dark border-0 px-4 py-2 ml-0" type="submit">SIGN UP</button>
        </form> -->
    </div>
</nav>