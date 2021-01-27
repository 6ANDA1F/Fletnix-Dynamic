<?php
if(isset($_GET['p'])) {
    $page = $_GET['p'];
} else {
    $page = 'home';
}

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c4753c6a87.js" crossorigin="anonymous"></script>
    <title>Homepage</title>
</head>
<body>

<!-- TODO: Add responsive media queries for menu and possible other elements -->

<div class="layout-container">
    <?php
    include_once '../includes/html/menu.php';

    if (!@include('../includes/pages/'.$page.'.php')) {
        header('location: index.php?p=404');
    }

    ?>

    <footer>
        <div class="copyright">
            &copy; 2020 Berkan Akdeniz, 637791, Owen Roberts, 653580, Klas 1B
        </div>
    </footer>
</div>
</body>
</html>
