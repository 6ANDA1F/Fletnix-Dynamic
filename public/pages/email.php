<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/normalize.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c4753c6a87.js" crossorigin="anonymous"></script>
    <title>Profiel</title>
</head>
<body>

<div class="layout-container">
    <nav>
        <a href="../index.html"><img src="../img/logo.png" alt="Logo"></a>
        <div class="menu">
            <a href="over-ons.php">Over ons</a>
            <a href="film-overzicht.php">Filmoverzicht</a>
            <a href="abonnement.php">Abonnement</a>
            <a class="actief" href="profiel.php"><span class="fas fa-user-circle"></span>Inloggen</a>
<!--            <a href="./profiel.pages"><span class="fas fa-user-circle"></span>Owen</a>-->
            <a href="../index.html">Home</a>
        </div>
    </nav>
    <header>
        <h1>Accountgegevens wijzigen</h1>
    </header>
    <main>
        <div class="profiel-info">
            <h3>Choose profile</h3>
            <form action="#" class="form-block">
                <label for="Profiel"></label>
                <select name="Profiel" id="Profiel" required>
                    <option value="">Profiel 1</option>
                    <option value="">Profiel 2</option>
                    <option value="">Profiel 3</option>
                </select>
                <h3>New email</h3>
            <label>
                <input type="text" name="email_current" placeholder="Current email" required>
            </label>
            <label>
                <input type="text" name="email" placeholder="New email" required>
            </label>
            <label>
                <input type="text" name="email_cofirm" placeholder="Confirm new email" required>
            </label>
                <h3>Confirm Account</h3>
                <label>
                    <input type="text" name="username" placeholder="Username" required>
                </label>
                <label>
                    <input type="password" name="password" placeholder="Password" required>
                </label>
                <label>
                    <input type="password" name="password_confirm" placeholder="Confirm Password" required>
                </label>
                <input type="submit" class="button" value="Finish Editing">
            </form>
            <div class="button-wrapper">
                <a class="button" href="profiel.php">
                    <strong>Go back</strong>
                </a>
            </div>
            </div>
    </main>
    <footer>
        <div class="copyright">
            &copy; 2020 Berkan Akdeniz, 637791, Klas 1B
        </div>
    </footer>
</div>
</body>
</html>