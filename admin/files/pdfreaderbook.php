<?php

$book=$_GET['book'];

    // Store the file name into variable

    $filepath = "./books/$book";
    // Header content type
    header("Content-type: application/pdf");
    // Send the file to the browser.
    readfile($filepath);

 