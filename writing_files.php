<?php

$file = "example.txt";

if ($handle = fopen($file, 'w')) {

    fwrite($handle, 'I love to code in PHP!');

    fclose($handle);
} else {
    echo "The application was not able to write to the file.";
}
