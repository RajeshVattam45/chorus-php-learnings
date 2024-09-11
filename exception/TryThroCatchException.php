<?php

// Variable to store int.
$number = 'hello';

// try Block: The block of code that you want to monitor for exceptions.
try {
    if (!is_int($number)) {
        // throw Keyword throw an exception if a condition is met or an error is detected.
        throw new Exception('It is not an integer');
    }
}
// catch is A block of code that handles the exception, It takes an Exception object 
// as a parameter which provides methods to get information about the exception.
catch (Exception  $e) {
    echo "Caugh Exception " . $e->getMessage();
}
echo '<br>';
