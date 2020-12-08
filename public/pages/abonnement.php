<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/normalize.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c4753c6a87.js" crossorigin="anonymous"></script>
    <title>Abonnement</title>
</head>
<body>
<div class="layout-container">

    <nav>
        <a href="../index.html"><img src="../img/logo.png" alt="Logo"></a>
        <div class="menu">
            <a href="over-ons.php">Over ons</a>
            <a href="film-overzicht.php">Filmoverzicht</a>
            <a class="actief" href="">Abonnement</a>
            <a href="profiel.php"><span class="fas fa-user-circle"></span>Inloggen</a>
<!--            <a href="./profiel.pages"><span class="fas fa-user-circle"></span>Owen</a>-->
            <a href="../index.html">Home</a>
        </div>
    </nav>

    <header>
        <h1>You choose</h1>
    </header>

    <main>
        <div class="horizontal-cards">
            <div class="item">
                <h3>Subscription 1</h3>
                <img src="../img/Basic2.png" alt="Dollar">
                <a class="button" href="#subscription1">More</a>
            </div>
            <div class="item">
                <h3>Subscription 2</h3>
                <img src="../img/standard.png" alt="Dollar">
                <a class="button" href="#subscription2">More</a>
            </div>
            <div class="item">
                <h3>Subscription 3</h3>
                <img src="../img/Premium2.png" alt="Dollar">
                <a class="button" href="#subscription3">More</a>
            </div>
        </div>

        <div id="subscription1" class="media-and-text media-reversed">
            <img src="../img/Basic2.png" alt="Bayb Yoda">
            <div class="text">
                <h3>Basic</h3>
                <p>Het Basic-streamingplan kost $ 8,99 per maand en heeft de meest beperkte functies.
                    Je kunt het alleen op één scherm tegelijk gebruiken (wat prima is als je de enige gebruiker van het account bent),
                    en de resolutie is beperkt tot standaarddefinitie (SD), wat gelijk is aan oude pre-HD-televisie.</p>
            </div>
        </div>

        <div id="subscription2" class="media-and-text">
            <img src="../img/standard.png" alt="Bayb Yoda">
            <div class="text">
                <h3>Standaard</h3>
                <p>Het standaard streamingplan kost $ 12,99 per maand en stelt je in staat om op twee schermen tegelijk in high definition (HD) te kijken.</p>
            </div>
        </div>

        <div id="subscription3" class="media-and-text media-reversed">
            <img src="../img/Premium2.png" alt="Bayb Yoda">
            <div class="text">
                <h3>Premium</h3>
                <p>Het Premium-streamingplan kost $ 15,99 per maand.
                    Daarvoor kijk je op vier schermen tegelijk (ideaal voor een groot gezin), en kun je videoprogrammering in HD of 4K Ultra HD, indien beschikbaar.</p>
            </div>
        </div>


        <h2>Join the party!</h2>

        <form action="#" class="form-block">
            <label for="subscription"></label>
            <select name="subscription" id="subscription" required>
                <option value="">Subscription 1</option>
                <option value="">Subscription 2</option>
                <option value="">Subscription 3</option>
            </select>
            <label>
                <input type="text" name="first_name" placeholder="Name" required>
            </label>
            <label>
                <input type="text" name="sur_name" placeholder="Surname" required>
            </label>
            <label>
                <input type="text" name="country" placeholder="Country" required>
            </label>
            <label>
                <input type="date" name="birthdate" required>
            </label>
            <label>
                <input type="text" name="banknumber" placeholder="Bank IBAN" required>
            </label>
            <label>
                <input type="text" name="username" placeholder="Username" required>
            </label>
            <label>
                <input type="password" name="password" placeholder="Password" required>
            </label>
            <label>
                <input type="password" name="password_confirm" placeholder="Confirm Password" required>
            </label>
            <input type="submit" class="button" value="Join">
        </form>

    </main>

    <footer>
        <div class="copyright">
            &copy; 2020 Owen Roberts, 653580, Klas 1B
        </div>
    </footer>
</div>
</body>
</html>