<?php

// The FILTER_SANITIZE functions in PHP are used to sanitize user input by removing or 
// encoding unwanted or potentially harmful characters.

// FILTER_SANITIZE_NUMBER_INT removes all non-numeric characters except the + and - signs.
$input = "Phone No: +123-456-7890";
$sanitized = filter_var($input, FILTER_SANITIZE_NUMBER_INT);
echo $sanitized;
echo '<br>';

$input = "john.doe@@example.com";
if (!filter_var($input, FILTER_VALIDATE_EMAIL)) {
    echo 'Invalid email: ' . $input;
} else {
    echo 'Valid email: ' . $input;
}
echo '<br>';

// FILTER_SANITIZE_URL removes all characters except letters, digits, and $-_.+!*'(),{}|\\^~[]<>#%";/?:@.
$input = "https://example.com/test?name=<script>";
$sanitized = filter_var($input, FILTER_SANITIZE_URL);
echo $sanitized;
echo '<br>';

// Filter the int in the string.
$str = 'hellow23 php 2 this11 is5 rajesh99';
$number = filter_var($str, FILTER_SANITIZE_NUMBER_INT);
echo ($number);
echo '<br>';

// FILTER_SANITIZE_ENCODED URL-encodes all characters that require encoding.
$input = "Hello World!";
$sanitized = filter_var($input, FILTER_SANITIZE_ENCODED);
echo $sanitized;
