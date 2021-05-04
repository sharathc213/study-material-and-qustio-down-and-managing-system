<?php

$a=$_GET['a'];

    // Store the file name into variable

    $filepath = "./qna/$a";
    // Header content type
    header("Content-type: application/pdf");
    // Send the file to the browser.
    readfile($filepath);

 