<nav class="navbar navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand h1 pt-3" href="/display">SHOPPING GRATUIT ENTRE MARSEILLAIS</a>

        <form class="nav-item ml-auto">
            <input name="search" class="form-control border-dark rounded-0 " type="search" placeholder="Chercher" aria-label="Chercher">
            <!-- <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Chercher</button> -->
        </form>
        <?php
        if (isset($_SESSION['user'])) {
        ?>
            <a class="nav-item btn-danger border-0 px-4 py-2 ml-2" href="/logout">LOGOUT</a>
            <a class="nav-item btn-dark border-0 px-4 py-2 ml-2" type="submit" href="/new">DONATE</a>
        <?php
        } else {
        ?>
            <a class=" nav-item btn-success border-0 px-4 py-2 ml-2" type="submit" href="/login">LOGIN</a>
            <a class="nav-item btn-dark border-0 px-4 py-2 ml-2" type="submit" href="/register">SIGN UP</a>
        <?php
        }
        ?>
    </div>
</nav>