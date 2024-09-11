<?php

// In this example file doesn't exist it will create new file using 'w',
// if file exists erase the existing data.
$text_file = fopen('ReadMe.txt', 'w');
$text = 'PHP is an server side scripting launguage';
fwrite($text_file, $text);

// Erase the previous data and then insert this new data.
$add_text = fopen('ReadMe.txt', 'w');
$text_two = 'Adding Extra line';
fwrite($add_text, $text_two);
