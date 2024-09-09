<?php

// w used to write the data, it will erase the existing data in the file, if file not exist it will create new file.
// In this example file doesn't exist it will create new file.
$text_file = fopen('ReadMe.txt', 'w');
$text = 'PHP is an server side scripting launguage';
fwrite($text_file, $text);

// After running this code it will erase the previous data and then insert this new data.
$add_text = fopen('ReadMe.txt', 'w');
$text_two = 'Adding Extra line';
fwrite($add_text, $text_two);

