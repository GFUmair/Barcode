<?php
if ($_GET['text']) {

    include('Code128Barcode.php');
    ob_start();
    // Output the image to browser 
    header('Content-Type: image/png'); 
    imagepng(Code128Barcode::generate(strtoupper($_GET['text'])));
    
} ?>
