<?php

// A callback function is a function which is passed as an argument into another function.
function displayName($name) {
    return "Hellow " . $name; 
}

function callFunction($call_back, $name) {
    echo $call_back($name);
}
callFunction('displayName', 'Rajesh');
echo '<br>';

// Define a simple callback function.
function square($number) {
    return 'Square Values ' . $number * $number;
}

// Create an array of numbers.
$numbers = [1, 2, 3, 4, 5];

// Use array_map with the callback function 'square'.
$squaredNumbers = array_map('square', $numbers);

print_r($squaredNumbers);
echo '<br>';

function cubes($number) {
    return 'Cube values ' . $number * $number * $number;
}
$cubes = array_map('cubes', $numbers);
print_r($cubes);
echo '<br>';

// Define a function that accepts a callback.
function performOperation($num1, $num2, $operation) {
    // Call the callback function with two numbers.
    return $operation($num1, $num2);
}

// Using an anonymous function as a callback.
$result = performOperation(5, 3, function($a, $b) {
    return $a + $b;
});
echo "Result: " . $result;
echo '<br>';

// Define a function that accepts an array of fruits and a callback function.
function displayFruits($fruits, $callback) {

    // Loop through each fruit in the array.
    foreach($fruits as $fruit) {
        // Call the callback function with the current fruit and echo the result.
        echo $callback($fruit);
    }
}

// Call the displayFruits function with an array of fruits and an anonymous callback function.
displayFruits(['Apple', 'Mango', 'Banana', 'Grapes'], function($fruit) {
    return 'Fruit: ' . $fruit . '<br>';
});
echo '<br>';

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];

$filter_array = array_filter($numbers, function($number){
    return $number % 2 === 0;
});
print_r($filter_array);
