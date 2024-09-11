<?php

try {
    $number = 'hi';

    // Check if is int or not.
    if (!is_int($number)) {
        throw new Exception('The provided value is not an integer.');
    }
    else {
        echo 'The value is a valid integer: ' . $number;
    }
}
// Catch the exception message.
catch (Exception $e) {
    echo 'An error occurred: ' . $e->getMessage();
}
