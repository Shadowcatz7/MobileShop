<?php
ob_start();
// include header.php file
include('func/header.php');

if(($_COOKIE['user_type']==0)) {
            header("Location: index.php");
        }
?>

<?php

/*  include manage product */
include('libs/_manage-product.php')
/*  include manage product */

?>

<?php
// include footer.php file
include('func/footer.php');
?>