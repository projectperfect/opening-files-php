<?php

$file = "example.txt";

if ($handle = fopen($file, 'r')) {

    echo $content = fread($handle, 22); // Each bite equals a character you can also use 'filesize($file)' instead of the '21' bytes to read the whole file

    fclose($handle);
} else {
    echo "The application was not able to write to the file.";
}
