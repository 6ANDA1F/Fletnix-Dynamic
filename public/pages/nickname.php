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
            <h3>New nickname</h3>
            <label>
                <input type="text" name="first_name" placeholder="Nickname" required>
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