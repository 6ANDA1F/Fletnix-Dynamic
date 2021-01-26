<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/../includes/php/sql.php';


function checkLogin($post){
    $uname = $post['email'];
    $password = $post['password'];
    $dbh = getDatabaseHandler();
    $query = $dbh->prepare("SELECT password, firstname FROM Customer WHERE customer_mail_address = :uname");
    $query->bindParam(':uname', $uname);
    $query->execute();

    if ($result = $query->fetch(PDO::FETCH_ASSOC)){
        if(password_verify($password, $result['password'])){
            session_regenerate_id();
            // $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $result['firstname'];
            header('Location: index.php?p=profiel');
        } else{
            return "Foute e-mail/wachtwoord. Probeer opnieuw.";
        }
    }else {
        return "Foute e-mail/wachtwoord. Probeer opnieuw.";
    }
    exit();
}

?>