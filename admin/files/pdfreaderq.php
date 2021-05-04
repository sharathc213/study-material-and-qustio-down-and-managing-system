<?php

$q=$_GET['q'];

    // Store the file name into variable

    $filepath = "./qna/$q";
    // Header content type
    header("Content-type: application/pdf");
    // Send the file to the browser.
    readfile($filepath);

 