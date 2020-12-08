<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/normalize.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c4753c6a87.js" crossorigin="anonymous"></script>
    <title>Film Overzicht</title>
</head>
<body>

<div class="layout-container">
    <nav>
        <a href="../index.html"><img src="../img/logo.png" alt="Logo"></a>
        <div class="menu">
            <a href="over-ons.php">Over ons</a>
            <a class="actief" href="">Filmoverzicht</a>
            <a href="abonnement.php">Abonnement</a>
            <a href="profiel.php"><span class="fas fa-user-circle"></span>Inloggen</a>
            <!--            <a href="./profiel.pages"><span class="fas fa-user-circle"></span>Owen</a>-->
            <a href="../index.html">Home</a>
        </div>
    </nav>

    <header>
        <h1>Top films</h1>
    </header>

    <main>

        <form class="filter-form" action="#">
            <label for="zoeken">Zoek: </label>
            <input type="search" id="zoeken" name="zoeken" placeholder="Film, Regisseur">

            <label for="year">Zoek: </label>
            <input name="year" type="number" id="year" placeholder="Jaartal" min="1940" max="2020">

            <label for="filter">Filter op: </label>
            <select name="filter" id="filter">
                <option value="Naam">Naam</option>
                <option value="Naam">Jaar</option>
                <option value="Naam">Datum</option>
                <option value="Naam">Populariteit</option>
            </select>

            <label for="genre">Filter op: </label>
            <select name="genre" id="genre">
                <option value="Naam">Horror</option>
                <option value="Naam">Comedy</option>
                <option value="Naam">Actie</option>
                <option value="Naam">Romantiek</option>
            </select>
        </form>

        <div class="tile-grid">

            <div class="item">
                <a href="film-detail.php">
                    <h3>The Lord of the Rings: The Fellowship of the Ring (2001)</h3>
                    <img src="../img/LOTR.jpg" alt="Dune bannner">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <h3>he Lord of the Rings: The Return of the King (2003)</h3>
                    <img src="../img/LOTR.jpg" alt="Dune bannner">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <h3>The Lord of the Rings: The Two Towers (2002)</h3>
                    <img src="../img/LOTR.jpg" alt="Dune bannner">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <h3>The Hobbit: An Unexpected Journey (2012)</h3>
                    <img src="../img/LOTR.jpg" alt="Dune bannner">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <h3>The Hobbit: The Desolation of Smaug (2013)</h3>
                    <img src="../img/LOTR.jpg" alt="Dune bannner">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <h3>The Battle of the Five Armies (2014)</h3>
                    <img src="../img/LOTR.jpg" alt="Dune bannner">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <h3>Harry Potter and the Philosopher's Stone (2001)</h3>
                    <img src="../img/LOTR.jpg" alt="Dune bannner">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <h3>Harry Potter and the Chamber of Secrets (2002)</h3>
                    <img src="../img/LOTR.jpg" alt="Dune bannner">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <h3>Harry Potter and the Prisoner of Azkaban (2004)</h3>
                    <img src="../img/LOTR.jpg" alt="Dune bannner">
                </a>
            </div>


        </div>
    </main>

    <footer>
        <div class="copyright">
            &copy; 2020 Owen Roberts, 653580, Klas 1B
        </div>
    </footer>
</div>
</body>
</html>