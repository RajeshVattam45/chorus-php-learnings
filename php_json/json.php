<?php

// Retrieving the JSON data from animals.json file.
$json_file = 'animals.json';

// Checking if the file exists or not.
if (file_exists($json_file)) {
    // Retrieving the content from the JSON file.
    $retrieve_json_data = file_get_contents($json_file);

    // Converts the JSON string into a PHP array.
    $decode_json = json_decode($retrieve_json_data, true);
    echo '<h1>Displaying JSON Data</h1>';

    // Loop to iterate the JSON array.
    foreach ($decode_json['animals'] as $animal) {
        if (isset($animal['name']) && isset($animal['weight']) && isset($animal['color'])) {
            echo 'Animal Name: ' . $animal['name'] . '<br>';
            echo 'Weight: ' . $animal['weight'] . '<br>';
            echo 'Color: ' . $animal['color'] . '<br>';
            echo '<br>';
        }
        else {
            echo 'Error: Expected keys are missing in the JSON structure.<br>' . json_last_error_msg();
        }
    }
}
else {
    echo 'File not found.';
}
?>
