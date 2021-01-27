<?php

function editName($post){
    $email = $_SESSION['email'];
    $nieuwenaam = $post['newname'];
    $dbh = getDatabaseHandler();
    $query = $dbh->prepare("UPDATE Customer SET user_name = :newname WHERE customer_mail_address = :email");
    $query->bindParam(':newname', $nieuwenaam);
    $query->bindParam(':email', $email);
    $query->execute();
    $_SESSION['name'] = $nieuwenaam;
    header('Location: index.php?p=profiel');
}

function editEmail($post){
    $email = $_SESSION['email'];
    $newemail = filter_input(INPUT_POST, "newemail", FILTER_VALIDATE_EMAIL);
    $dbh = getDatabaseHandler();
    $query = $dbh->prepare("UPDATE Customer SET customer_mail_address = :newemail WHERE customer_mail_address = :oldemail");
    $query->bindParam(':newemail', $newemail);
    $query->bindParam(':oldemail', $email);
    if (filter_var($newemail, FILTER_VALIDATE_EMAIL)) {
    $query->execute();
    $_SESSION['email'] = $newemail;
    header('Location: index.php?p=profiel');
    }else{
        return "E-mail incorrect. Probeer opnieuw.";
    }
}

?>

