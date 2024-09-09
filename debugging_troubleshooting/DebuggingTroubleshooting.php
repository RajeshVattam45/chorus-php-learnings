<?php

// Debugging and troubleshooting are processes used to identify, analyze, and resolve problems or errors in a system, application, or code.

// Debugging typically refers to finding and fixing errors or bugs in software code.
// Troubleshooting is a broader term that involves identifying and solving problems in various contexts, such as hardware, software, network issues, or configuration problems.
// Key Steps in Debugging and Troubleshooting:
// Identify the Problem: Recognize the symptoms or error messages that indicate something is wrong.
// Reproduce the Issue: Try to recreate the problem in a controlled environment to understand when and how it occurs.
// Analyze the Cause: Use debugging tools, logs, and error messages to determine the root cause of the issue.
// Implement a Solution: Apply a fix or make changes to resolve the issue.
// Test the Solution: Verify that the solution works and does not introduce new issues.
// Document the Fix: Document the problem, the solution, and any changes made for future reference.


// Fixing a Database Connection Error.
// It will throw an error because given unknown db, that was not alalible in the mysql.
// $conn = new mysqli('localhost', 'root', '', 'db');
// try {
//     if($conn->connect_error){
//         throw new Exception('Exception Error' . $conn->connect_error);
//     } else {
//         echo 'Connected Sucessfully';
//     }
// }
// catch(Exception $e){
//         // Provides error message for debugging.
//         echo $e->getMessage();
// }

// Troubleshooting Process:
// Check the database server status to ensure it is running.
// Verify the connection credentials (username, password, database name) in the application code.
// Test connectivity from the server using a command-line tool like ping or telnet.
// Review logs for any additional error details.


// Define the file path
$file_path = 'text.txt';

// Check if the file exists before performing any operations
if (file_exists($file_path)) {
    // Open the file for reading
    $open_read_file = fopen($file_path, 'r');

    if ($open_read_file) {
        // Successfully opened the file, now you can read or process it
        echo "File opened successfully.";

        // Example: Read and display the file contents
        while (($line = fgets($open_read_file)) !== false) {
            echo $line . "<br>";
        }

        // Close the file after reading
        fclose($open_read_file);
    }
    else {
        echo "Failed to open the file.";
    }
}
else {
    echo "File not found.";
}

// Check if the File Exists Before Performing Any Operations:
// Use file_exists() with the file path ('text.txt').
// Only proceed to open the file or read its contents if it exists.
// Open the File Safely: Use fopen() correctly with error handling.