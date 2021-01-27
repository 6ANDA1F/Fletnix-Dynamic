<?php

function registerUser($post)
{
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $firstname = filter_input(INPUT_POST, "first_name", FILTER_SANITIZE_STRING);
    $surname = filter_input(INPUT_POST, "sur_name", FILTER_SANITIZE_STRING);
    $password = password_hash($post['password'], PASSWORD_DEFAULT);
    $passwordconfirm = $_POST['passwordconfirm'];
    $paymentmethod = "mastercard";
    $paymentcardnumber = $_POST['banknumber'];
    $contracttype = $_POST['subscription'];
    $subscriptionstart = date("Y/m/d");
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $countryname = "Netherlands";

    $dbh = getDatabaseHandler();
    $query = $dbh->prepare("SELECT * FROM Customer WHERE user_name = :username");
    $query->bindParam(':username', $username);
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    $query = $dbh->prepare("SELECT * FROM Customer WHERE customer_mail_address = :email");
    $query->bindParam(':email', $email);
    $query->execute();
    $result2 = $query->fetchAll(PDO::FETCH_ASSOC);

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

    if (filter_var($email, FILTER_VALIDATE_EMAIL) && empty($result) && empty($result2) && password_verify($passwordconfirm, $password)) {
        $query->execute();
        session_regenerate_id();
        $_SESSION['name'] = $firstname;
        $_SESSION['email'] = $email;
        header("Location: index.php?p=profiel");
    } else if (!empty($result)) {
        return "Username bestaat al. Probeer opnieuw";
    } else if (!empty($result2)) {
        return "E-mail bestaat al. Probeer opnieuw";
    } else if (!password_verify($passwordconfirm, $password)) {
        return "Wachtwoorden komen niet overeen. Probeer opnieuw";
    } else {
        return "Foute e-mail. Probeer opnieuw.";
    }

}

?>