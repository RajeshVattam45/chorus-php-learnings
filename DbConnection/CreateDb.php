<?php

// connecting to DB.
include_once 'Connect.php';

// Qyuert to inser a new DB.
$query = 'CREATE DATABASE users_database';

$result = $conn->query($query);

if($result === true) {
    echo 'DB created sucessfully';
} else {
    echo 'Failed to create DB';
}
