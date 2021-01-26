<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/../includes/php/sql.php';
$imgPath = getImgDir();
?>

<header>
    <h1>You choose</h1>
</header>

<main>
    <div class="horizontal-cards">
        <div class="item">
            <h3>Basic</h3>
            <img src="<?= $imgPath ?>Basic2.png" alt="Dollar">
            <a class="button" href="#subscription1">More</a>
        </div>
        <div class="item">
            <h3>Premium</h3>
            <img src="<?= $imgPath ?>Premium2.png" alt="Dollar">
            <a class="button" href="#subscription2">More</a>
        </div>
        <div class="item">
            <h3>Pro</h3>
            <img src="<?= $imgPath ?>Premium2.png" alt="Dollar">
            <a class="button" href="#subscription3">More</a>
        </div>
    </div>

    <div id="subscription1" class="media-and-text media-reversed">
        <img src="<?= $imgPath ?>Basic2.png" alt="Bayb Yoda">
        <div class="text">
            <h3>Basic</h3>
            <p>Het Basic-streamingplan kost <strong class="red">$8,99</strong> per maand en heeft de meest beperkte functies.
                Je kunt het alleen op één scherm tegelijk gebruiken (wat prima is als je de enige gebruiker van het account bent),
                en de resolutie is beperkt tot standaarddefinitie (SD), wat gelijk is aan oude pre-HD-televisie.</p>

            <ul>
                <li>1 scherm tegelijkertijd</li>
                <li>SD streaming kwaliteit</li>
            </ul>
        </div>
    </div>

    <div id="subscription2" class="media-and-text">
        <img src="<?= $imgPath ?>Premium2.png" alt="Bayb Yoda">
        <div class="text">
            <h3>Premium</h3>
            <p>Het premium streamingplan kost <strong class="red">$12,99</strong> per maand en stelt je in staat om op twee schermen tegelijk in high definition (HD) te kijken.</p>

            <ul>
                <li>2 schermen</li>
                <li>HD streaming kwaliteit</li>
            </ul>
        </div>
    </div>

    <div id="subscription3" class="media-and-text media-reversed">
        <img src="<?= $imgPath ?>Premium2.png" alt="Bayb Yoda">
        <div class="text">
            <h3>Pro</h3>
            <p>Het Pro-streamingplan kost <strong class="red">$15,99</strong> per maand.
                Daarvoor kijk je op vier schermen tegelijk (ideaal voor een groot gezin), en kun je videoprogrammering in HD of 4K Ultra HD, indien beschikbaar.</p>
            <ul>
                <li>4 schermen</li>
                <li>UHD streaming kwaliteit (indien beschikbaar)</li>
            </ul>
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