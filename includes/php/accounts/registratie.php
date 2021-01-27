<?php
function registerUser($post)
{
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $firstname = filter_input(INPUT_POST, "first_name", FILTER_SANITIZE_STRING);
    $surname = filter_input(INPUT_POST, "sur_name", FILTER_SANITIZE_STRING);
    $password = password_hash($post['password'], PASSWORD_DEFAULT);
    $paymentmethod = "mastercard";
    $paymentcardnumber = $_POST['banknumber'];
    $contracttype = $_POST['subscription'];
    $subscriptionstart = date("Y/m/d");
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $countryname = "Netherlands";


    $dbh = getDatabaseHandler();
    $query = $dbh->prepare("INSERT INTO Customer (customer_mail_address, firstname, lastname, password, payment_method, payment_card_number, contract_type, subscription_start, user_name, country_name)
        VALUES (:email, :firstname, :surname, :password, :payment_method, :payment_card_number, :contract_type, :subscription_start, :user_name, :country_name)");

    $query->bindParam(':email', $email);
    $query->bindParam(':firstname', $firstname);
    $query->bindParam(':surname', $surname);
    $query->bindParam(':password', $password);
    $query->bindParam(':payment_method', $paymentmethod);
    $query->bindParam(':payment_card_number', $paymentcardnumber);
    $query->bindParam(':contract_type', $contracttype);
    $query->bindParam(':subscription_start', $subscriptionstart);
    $query->bindParam(':user_name', $username);
    $query->bindParam(':country_name', $countryname);
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $query->execute();
        session_regenerate_id();
        $_SESSION['name'] = $firstname;
        header("Location: index.php?p=profiel");
    } else {
        return "Foute e-mail. Probeer opnieuw.";
    }
}

?>