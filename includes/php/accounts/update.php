<?php

function editName($post){
    $huidigeusername = $_SESSION['name'];
    $nieuwenaam = $_POST['newname'];
    $dbh = getDatabaseHandler();
    $query = $dbh->prepare("UPDATE Customer SET [firstname] = '$nieuwenaam' WHERE user_name = '$huidigeusername'");
    $query->execute();
    header('Location: index.php?p=profiel');
}

function editEmail($post){
    $huidigeusername = $_SESSION['name'];
    $newemail = filter_input(INPUT_POST, "newemail", FILTER_VALIDATE_EMAIL);
    $dbh = getDatabaseHandler();
    $query = $dbh->prepare("UPDATE Customer SET [customer_mail_address] = :newemail WHERE user_name = '$huidigeusername'");
    $query->bindParam(':newemail', $newemail);
    if (filter_var($newemail, FILTER_VALIDATE_EMAIL)) {
    $query->execute();
    header('Location: index.php?p=profiel');
    }else{
        return "E-mail incorrect. Probeer opnieuw.";
    }
}

?>

