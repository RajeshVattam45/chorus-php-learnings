<?php

// filter_var() checks if input matches the specified filter type.
$int = '1 0 *00';
if (!filter_var($int, FILTER_VALIDATE_INT)) {
    echo 'Invalid int';
} else {
    echo 'Valid int';
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

// Array of invalid data strings.
$strings = [
    'Hello php filters',
    'just_text',
    // Missing a domain extension like .com, .org, etc.
    'www.example',
    // Missing colon after "https".
    'https//missingcolon.com',
    // Invalid protocol format.
    'ftp:/example.com',
    // valid url.
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

// FILTER_NULL_ON_FAILURE returns null for non-boolean values, allowing validation.
if (filter_var($bool, FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE) === null) {
    echo 'Invalid bool';
} else {
    echo 'Valid';
}
