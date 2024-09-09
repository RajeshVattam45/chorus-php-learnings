<?php

// Filters are used to filter the external input it can be
// cookie, foem input, server data, database query input.

// filter_var() funtion used to filetr the input data, for this function require 2 perameters
// one is inuput data variable and another one is what type of check you want.

// Using php filters we can filyter input data such as:
// User input from a form
// Cookies
// Web services data
// Server variables
// Database query results


// FILTER_VALIDATE methods in PHP are used to validate user input to ensure it conforms to a specific type
// or format. These methods help you verify if the input data matches the expected structure, such as 
// checking whether a value is a valid integer, email address, URL, IP address, etc.
$int =  '1 0 *00';

if(!filter_var($int, FILTER_VALIDATE_INT)){
    echo 'Invalid int';
} else {
    echo 'valid int';
}
echo '<br>';

// Validate email.
$email =  'raje@sh@gmail.com';
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo 'Invalid Emial' . $email;
}
else {
    echo 'Valid mail ' . $email;
}
echo '<br>';

$strings = [
    'Hello php filters',
    'just_text',
    // Missing a domain extension like .com, .org, etc.
    'www.example',
    // Missing colon after "https".
    'https//missingcolon.com',
    // Invalid protocol format.
    'ftp:/example.com',
    // valid url
    'http://localhost/php_chrous_learnings/php_filters/Filter.php'
];

foreach ($strings as $string) {
    if (!filter_var($string, FILTER_VALIDATE_URL)) {
        echo 'Invalid URL: ' . $string . "<br>";
    } else {
        echo 'Valid URL: ' . $string . "<br>";
    }
}
echo '<br>';

$bool = 'hello';

// FILTER_NULL_ON_FAILURE is used to Adding the FILTER_NULL_ON_FAILURE flag ensures that the filter returns null for values that are not 
// recognized as boolean equivalents, allowing you to differentiate between false values and invalid inputs
if (filter_var($bool, FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE) === null) {
    echo 'Invalid bool';
} else {
    echo 'Valid';
}
