<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/../includes/php/sql.php';


function checkLogin($post){
    $uname = $post['username'];
    $password = $post['password'];
    $dbh = getDatabaseHandler();
    $query = $dbh->prepare("SELECT password, user_name, customer_mail_address FROM Customer WHERE user_name = :uname");
    $query->bindParam(':uname', $uname);
    $query->execute();

    if ($result = $query->fetch(PDO::FETCH_ASSOC)){
        if(password_verify($password, $result['password'])){
            session_regenerate_id();
            $_SESSION['name'] = $result['user_name'];
            $_SESSION['email'] = $result['customer_mail_address'];
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