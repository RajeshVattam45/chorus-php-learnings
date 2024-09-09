<?php

// In PHP, an exception is an unexpected condition or error that occurs during the execution of a script.
// Exceptions are used to handle errors gracefully, allowing the script to continue executing or to terminate
// in a controlled way, rather than abruptly stopping.

// try Block: The block of code that you want to monitor for exceptions.
// throw Keyword: Used to throw an exception if a condition is met or an error is detected.
// catch Block: A block of code that handles the exception. It takes an Exception object as a parameter,
// which provides methods to get information about the exception.
// finally Block (Optional): A block that always executes, regardless of whether an exception was thrown or not. Useful for cleanup actions.

try {
    $number = 'hi';
    if (!is_int($number)) {
        throw new Exception('The provided value is not an integer.');
    }
    else {
        echo 'The value is a valid integer: ' . $number;
    }
}
catch (Exception $e) {
    echo 'An error occurred: ' . $e->getMessage();
}
