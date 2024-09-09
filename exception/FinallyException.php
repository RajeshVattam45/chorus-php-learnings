<?php

// finally Block (Optional): A block that always executes, regardless of whether an exception was thrown or not.
// Useful for cleanup actions.
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
    finally {
        // Check if the file was opened.
        if($open_file) {
            // Close the file.
            fclose($open_file);
            echo "File Closed";
        }
    }
}
processFile('text.txt');
