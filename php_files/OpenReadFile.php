<?php

// PHP can read files we have several function to open, read, get, update, delete files.

// readfile function is used to open the file and read the content & dispaly the data.
// EX: i have text.txt file now using readfile() method i will open, read and display the content.

echo readfile('text.txt');

echo '<br>';

// fopen() method used to open the file and it will take 2 arguments one is file path and another one is 
// allows to do an particulat action like read, write, append.

// Here is the mode.
// 'r' for read
// $text_file = fopen('text.txt', 'r');

// 'r+' for read and write.
// $text_file = fopen('text.txt', 'r+');

// 'w' Open file for write, here it will Erases the existing content, if file doesn't exist it will create new file.
// $text_file = fopen('text.txt', 'w');

// 'w+' Open file for read and write, here it will Erases the existing content, if file doesn't exist it will create new file.
// $text_file = fopen('text.txt', 'w+');

// 'a' open a file for wrire, it will preserve the existing data and create if the file doesn't exist
// $text_file = fopen('text.txt', 'a');

// 'a+' open a file for read and write, it will preserve the existing data and create if the file doesn't exist
// $text_file = fopen('text.txt', 'r');

$text_file = fopen('text.txt', 'r');

if($text_file) {
    $content = fread($text_file, filesize('text.txt'));
    print_r($content);
    fclose($text_file);
} else {
    echo 'Error';
}


echo '<br>';
echo 'Read the single line from the file <br>';

$text_file_data = fopen('text.txt', 'r');
// Read the single line in file.
echo fgets($text_file_data);
echo '<br>';

// The feof() function checks if the "end-of-file" has been reached.
// The feof() function is useful for looping through data of unknown length.

// $content = fopen('text.txt', 'r');
// // Output one line until end-of-file
// while(!feof($content)) {
//     echo fgets($content) . "<br>";
//   }
// fclose($content);
// echo '<br>';

// using file() method reading the entire file and then we can use foreach.
// this file method read the data into PHP array.
$file = file('text.txt');
foreach ($file as $value) {
    echo $value . '<br>';
}
