<?php

// Json stands for javascript object notation, json is used to store the data.
// JSON is a lightweight data interchange format that is easy for humans to read and write
// and easy for machines to parse and generate.
// It is often used for transmitting data between a server and a web application.

// Retrieving the JSON data from animals.json file.
$json_file = 'animals.json';

// Checking if the file exists or not.
if (file_exists($json_file)) {
    // Retrieving the content from the JSON file.
    $retrieve_json_data = file_get_contents($json_file);
    // echo 'Before decode JSON string data:<br><br>' . $retrieve_json_data;
    // echo '<br><br>';

    // json_decode function converts the JSON string into a PHP array.
    $decode_json = json_decode($retrieve_json_data, true);
    // echo 'After decoding converting string into PHP array:<br><br>';
    // print_r($decode_json);

    // Now extracting/retrieving the data from the array.
    // JSON_ERROR_NONE used if no errors occurred
    echo '<h1>Displaying JSON Data</h1>';
    // Loop to iterate the JSON array.

    // Access the 'animals' array within the decoded JSON
    foreach ($decode_json['animals'] as $animal) {
        // Ensure that 'name', 'weight', and 'color' keys exist
        if (isset($animal['name']) && isset($animal['weight']) && isset($animal['color'])) {
            echo 'Animal Name: ' . $animal['name'] . '<br>';
            echo 'Weight: ' . $animal['weight'] . '<br>';
            echo 'Color: ' . $animal['color'] . '<br>';
            echo '<br>';
        } else {
            echo 'Error: Expected keys are missing in the JSON structure.<br>' . json_last_error_msg();
        }
    }
} else {
    echo 'File not found.';
}
?>
