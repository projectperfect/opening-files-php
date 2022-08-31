<?php 
    // File you want to open. If it doesn't exist, you will create it
    $file = "example.txt";

    // Function to open a file
    $handle = fopen($file, 'w');

    // Function to close a file
    fclose($handle);
