<?php

// In PHP, an exception is an unexpected condition or error that occurs during the execution of a script.
// Exceptions are used to handle errors gracefully, allowing the script to continue executing or to terminate
// in a controlled way, rather than abruptly stopping.

// Exception Handling: PHP uses exception handling to manage errors. When an error occurs, PHP will "throw" an exception. 
// You can "catch" this exception and handle it in a controlled manner.

$number = 'hello';

// try Block: The block of code that you want to monitor for exceptions.
try {
    if (!is_int($number)) {
        // throw Keyword: Used to throw an exception if a condition is met or an error is detected.
        throw new Exception('It is not an integer');
    }
}
// catch Block: A block of code that handles the exception. It takes an Exception object as a parameter,
// which provides methods to get information about the exception.
catch (Exception  $e) {
    echo "Caugh Exception " . $e->getMessage();
}
echo '<br>';
