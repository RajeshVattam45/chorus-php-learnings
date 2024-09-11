<?php

// connect to DB.
include_once 'ConnectToDb.php';

// Deleting the data from the 'users_table' table.
$delete_query = "DELETE FROM users_table WHERE id='2'";
$execuite_query = $conn->query($delete_query);

if($execuite_query === true) {
    print_r('Deleted data ' . $execuite_query . ' Sucessfully');
}
else {
    echo 'Error' . $conn->error;
}

// Query to Delete DB.
$drop_db = "DROP DATABASE demo";
$execuite_query_drop_db = $conn->query($drop_db);

if($execuite_query_drop_db ===  true) {
    echo 'DB deleted';
}
else {
    echo 'Error' . $conn->error;
}


// Update Query - Updating the data.
$update_query = "UPDATE users_table SET name='Vattam Rajesh' WHERE id='1'";

if($conn->query($update_query) === true) {
    echo 'Data updated sucessfully';
}
else {
    echo 'Error' . $conn->error;
}
