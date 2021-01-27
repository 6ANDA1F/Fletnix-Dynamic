<?php


function editEmail($post){
    $huidigeusername = $_SESSION['name'];
    $newemail = filter_input(INPUT_POST, "newemail", FILTER_VALIDATE_EMAIL);
    $dbh = getDatabaseHandler();
    $query = $dbh->prepare("UPDATE Customer SET [customer_mail_address] = :newemail WHERE user_name = :user_name");
    $query->bindParam(':newemail', $newemail);
    $query->bindParam(':user_name', $huidigeusername);
    if (filter_var($newemail, FILTER_VALIDATE_EMAIL)) {
    $query->execute();
    $_SESSION['email'] = $newemail;
    header('Location: index.php?p=profiel');
    }else{
        return "E-mail incorrect. Probeer opnieuw.";
    }
}

function editPassword($post){
    $huidigeusername = $_SESSION['name'];
    $nieuwepassword = $_POST['newpassword'];
    $dbh = getDatabaseHandler();
    $passwordHashed = password_hash($nieuwepassword, PASSWORD_DEFAULT);
    $query = $dbh->prepare("UPDATE Customer SET [password] = :passwordHashed WHERE user_name = :user_name");
    $query->bindParam(':passwordHashed', $passwordHashed);
    $query->bindParam(':user_name', $huidigeusername);
    $query->execute();
    header('Location: index.php?p=profiel');
}

function editUsername($post){
    $huidigeusername = $_SESSION['name'];
    $nieuweusername = $_POST['newusername'];
    $dbh = getDatabaseHandler();
    $query = $dbh->prepare("UPDATE Customer SET [user_name] = :new_username WHERE user_name = :current_username");
    $query->bindParam(':current_username', $huidigeusername);
    $query->bindParam(':new_username', $nieuweusername);
    $query->execute();
    $_SESSION['name'] = $nieuweusername;
    header('Location: index.php?p=profiel');
}

?>

