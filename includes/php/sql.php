<?php

//TODO: make a function for this
$imgPath = $_SERVER['DOCUMENT_ROOT'] . '/img/';


//TODO: add .env file to inject the sql config with

// Naam van server
$hostname = 'host.docker.internal';
// Naam van database
$dbname = 'FLETNIX_DOCENT'; // <--- add your own
// Hier je eigen gebruikersnaam
$username = 'fletnix'; // <--- add your own
// Hier je eigen password.
// Zet het wachtwoord in het echt nooit letterlijk in de broncode.
$pw = 'Cjetses007'; // <--- add your own

// Connectie met de database ofwel de Database Handler (dbh).
$dbh = new PDO("sqlsrv:Server=$hostname;Database=$dbname;ConnectionPooling=0", $username, $pw);
// Tijdens het ontwikkelen is het handig om meteen ook de foutmeldingen vanuit de database te kunnen lezen.
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


////Test to see if the connection works
//echo '<pre style="color: white !important;">';
//print_r(PDO::getAvailableDrivers());
//echo '</pre>';
//
////Expected output:
////Array
////(
////    [0] => sqlite
////    [1] => sqlsrv <---- This one proves the successful connection
////)


