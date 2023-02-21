<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img class="logo" src="/images/logo.ico" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link" href="anime.php">Anime</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="film.php">Film</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="manga.php">Manga</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="manga2.php">Zatch Bell 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="personaggi.php">Personaggi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="curiosita.php">Curiosita'</a>
                </li>
            </ul>
            <form class="d-flex" role="search" action="ricerca.php" method="post">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="nome">
                <select class="form-control me-2" name="cerca">
                    <option value="tutto">Tutto</option>
                    <option value="episodi">Episodio</option>
                    <option value="film">Film</option>
                    <option value="mamodo">Personaggi</option>
                </select>
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>