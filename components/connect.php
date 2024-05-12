<?php
$db_name = 'mysql:host=localhost;dbname=u466866141_babapizzaservi';
$user_name = 'u466866141_babapizzaservi';
$user_password = 'Greasypizza20'; // Set the correct password here if applicable

try {
    $conn = new PDO($db_name, $user_name, $user_password);
    // Additional configuration options for PDO can be set here if needed
} catch (PDOException $e) {
    // Connection failed, handle the error
    echo 'Connection failed: ' . $e->getMessage();
}
?>
