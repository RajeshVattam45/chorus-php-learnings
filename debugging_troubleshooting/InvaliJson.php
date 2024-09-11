<?php

// Invalid JSON string Given extra comma in json causes an error.
$json_string = '{"name": "Rajesh", "age": 22,}';

// Decoding the JSON
$data = json_decode($json_string, true);
if (json_last_error() !== JSON_ERROR_NONE) {
    echo "JSON Error: " . json_last_error_msg();
}
