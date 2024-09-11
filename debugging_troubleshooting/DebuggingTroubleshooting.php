<?php

// It will throw an DB error because given unknown db, that was not alalible in the mysql.
$conn = new mysqli('localhost', 'root', '', 'db');
try {
    if($conn->connect_error){
        throw new Exception('Exception Error' . $conn->connect_error);
    } else {
        echo 'Connected Sucessfully';
    }
}
catch(Exception $e){
    // Provides error message for debugging.
    echo $e->getMessage();
}
