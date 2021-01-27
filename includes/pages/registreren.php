<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/../includes/php/sql.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/../includes/php/accounts/registratie.php';
$imgPath = getImgDir();

?>

<header>
    <h1>Registreren</h1>
</header>

<main>
<form action="index.php?p=registreren" class="form-block" method="post">
        <label for="subscription"></label>
        <select name="subscription" name="subscription" required>
            <option value="">Selecteer abonnement...</option>
            <option value="Basic">Basic</option>
            <option value="Pro">Pro</option>
            <option value="Premium">Premium</option>
        </select>
        <label>
            <input type="text" name="email" placeholder="E-mail" required>
        </label>
        <label>
            <input type="text" name="username" placeholder="Username" required>
        </label>
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
            <input type="password" name="password" placeholder="Password" required>
        </label>
        <input type="submit" name="submit" class="button" value="Join">
        <?php if(isset($_POST['submit'])){
         $error = registerUser($_POST);
         echo "<h3 class='error'>$error</h3>";
        }
        ?>
    </form>
</main>