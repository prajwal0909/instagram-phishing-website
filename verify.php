<?php
// Define the file path
$file = 'usernames.txt';

// Check if the file already exists
if (file_exists($file)) {
    // If the file exists, open it in append mode ('a') and write "Hello"
    $handle = fopen($file, 'a');
    fwrite($handle, "Hello\n");
    fclose($handle);
} else {
    // If the file doesn't exist, create it and write "Hello"
    $handle = fopen($file, 'w');
    fwrite($handle, "Hello\n");
    fclose($handle);
}

echo "Operation completed.";
?>
