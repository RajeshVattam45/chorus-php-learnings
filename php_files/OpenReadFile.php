<?php

// readfile function is open, and read the content & dispaly the data.
echo readfile('text.txt');
echo '<br>';

// Open & read the file.
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
// fgets method reads the single line in file.
echo fgets($text_file_data);
echo '<br>';

// The feof() function checks if the "end-of-file" has been reached.
// The feof() function is useful for looping through data of unknown length.

$content = fopen('text.txt', 'r');

// Output one line until end-of-file
while(!feof($content)) {
    echo fgets($content) . "<br>";
  }
fclose($content);
echo '<br>';

// this file method reading the entire file & read the data into PHP array.
$file = file('text.txt');
foreach ($file as $value) {
    echo $value . '<br>';
}
