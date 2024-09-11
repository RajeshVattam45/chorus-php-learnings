<?php

// Function the to handle the text file.
function processFile($file) {
    $open_file = fopen($file, 'w');
    $text = 'Hell php, creating new if the file doesn\'t exist';
    $execuite_file = fwrite($open_file, $text);
    try {
        if(!$execuite_file) {
            throw new Exception('File doesn\'t exists');
        }
    } 
    catch(Exception $e) {
        echo "Caught exception: " . $e->getMessage();
    }
    // finally Block that always executes, regardless of whether an exception was thrown or not,
    // Useful for cleanup actions.
    finally {
        if($open_file) {
            fclose($open_file);
            echo "File Closed";
        }
    }
}
processFile('text.txt');
