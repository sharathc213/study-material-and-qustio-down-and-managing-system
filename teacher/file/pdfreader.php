<?php

$pdf=$_GET['pdf'];

    // Store the file name into variable

    $filepath = "./$pdf";
    // Header content type
    header("Content-type: application/pdf");
    // Send the file to the browser.
    readfile($filepath);

 