<?php
// connection to database file
require_once 'db/connection.php';


$statement = $connection->prepare('INSERT INTO contactstb ( names, digital_address, email, telephone_number, message)
    VALUES ( :names, :digital_address, :email, :telephone_number, :message)');

$statement->execute([
    'names' => $_POST['fullname'],
    'digital_address' => $_POST['digital_address'],
    'email' => $_POST['email'],
    'telephone_number' => $_POST['telephone_number'],
    'message' => $_POST['message'],
]);


if ($statement) {
    return $message = ['status' => 'Thank you for contacting us'];
} else {
    echo "Something went wrong!!";
}