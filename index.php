Barcode
<?php
var_dump(extension_loaded('gd'));
if ($_GET['text']) {

    include('Code128Barcode.php');
    ob_start();
    // Output the image to browser 
    header('Content-Type: image/png'); 
    imagepng(Code128Barcode::generate($_GET['text']));
    
    //imagedestroy($png);

} ?>
