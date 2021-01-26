<?php

function editName($post){
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $firstname = filter_input(INPUT_POST, "newname", FILTER_SANITIZE_STRING);
    $dbh = getDatabaseHandler();
    $query = $dbh->prepare("UPDATE Customer SET [firstname] = :firstname WHERE customer_mail_address = :email");
    $query->bindParam(':email', $email);
    $query->bindParam(':firstname', $firstname);
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $query->execute();
    $_SESSION['name'] = $firstname;
    header('Location: index.php?p=profiel');
    }else{
        header('Location: index.php?p=nickname');
    }
}

function editEmail($post){
    $currentemail = filter_input(INPUT_POST, "currentemail", FILTER_VALIDATE_EMAIL);
    $newemail = filter_input(INPUT_POST, "newemail", FILTER_VALIDATE_EMAIL);
    $dbh = getDatabaseHandler();
    $query = $dbh->prepare("UPDATE Customer SET [customer_mail_address] = :newemail WHERE customer_mail_address = :currentemail");
    $query->bindParam(':currentemail', $currentemail);
    $query->bindParam(':newemail', $newemail);
    if (filter_var($currentemail, FILTER_VALIDATE_EMAIL) && filter_var($newemail, FILTER_VALIDATE_EMAIL)) {
    $query->execute();
    header('Location: index.php?p=profiel');
    }else{
        return "E-mail incorrect. Probeer opnieuw.";
    }
}

?>

