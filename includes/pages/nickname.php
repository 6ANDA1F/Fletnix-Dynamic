<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/../includes/php/sql.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/../includes/php/accounts/update.php';

if(isset($_POST['submit'])){
    editName($_POST);
}

?>


<header>
    <h1>Accountgegevens wijzigen</h1>
</header>
<main>
    <div class="profiel-info">
        <!-- <h3>Choose profile</h3> -->
        <form action="index.php?p=nickname" class="form-block" method="post">
            <!-- <label for="Profiel"></label>
            <select name="Profiel" id="Profiel" required>
                <option value="">Profiel 1</option>
                <option value="">Profiel 2</option>
                <option value="">Profiel 3</option>
            </select> -->
            <h3>New nickname</h3>
            <label>
                <input type="text" name="newname" placeholder="New Nickname" required>
            </label>
            <!-- <h3>Confirm Account</h3> -->
            <!-- <label>
                <input type="password" name="password" placeholder="Password" required>
            </label>
            <label>
                <input type="password" name="password_confirm" placeholder="Confirm Password" required>
            </label> -->
            <div class="button-wrapper">
                <button type="submit" class="button" value="submit" name="submit">Finish editing</button>
            </div>
        </form>
        <div class="button-wrapper">
            <a class="button" href="index.php?p=profiel">
                <strong>Go back</strong>
            </a>
        </div>
    </div>
</main>