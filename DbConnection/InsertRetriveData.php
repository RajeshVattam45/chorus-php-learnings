<?php

// connect to DB.
include_once 'ConnectToDb.php';

// Query to insert the data.
$query = "INSERT INTO users_table(id, name, launguage)
VALUES (1, 'rajesh', 'PHP'),
(2, 'Lokesh', 'Drupal'),
(3, 'Murali', 'Java'),
(4, 'Sai', 'Drupal10');";

$insert = $conn->query($query);

if($insert === true ) {
    echo "Data Inserted Scucessfullt";
}
else {
    echo "Error";
}

// Query to retrive the data from table.
$retrivr_query = 'SELECT * FROM users_table';
$retrive_data = $conn->query($retrivr_query);

// if($retrive_data === true) {
//     echo 'Data fetching Sucessfully';
// }
// else {
//     echo 'Error';
// }

if($retrive_data->num_rows > 0) {
    while($data = $retrive_data->fetch_assoc()) {
        print_r($data);
    }
}
