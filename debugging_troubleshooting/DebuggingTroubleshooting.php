<?php

// It will throw an DB error because given unknown db, that was not alalible in the mysql.
$conn = new mysqli('localhost', 'root', '', 'db');
try {
    if($conn->connect_error){
        throw new Exception('Exception Error' . $conn->connect_error);
    }
    else {
        echo 'Connected Sucessfully';
    }
}
catch(Exception $e){
    // Provides error message for debugging.
    echo $e->getMessage();
}

// Check if the File Exists Before Performing Any Operations:
// Use file_exists() with the file path ('text.txt').
// Only proceed to open the file or read its contents if it exists.
// Open the File Safely: Use fopen() correctly with error handling.
