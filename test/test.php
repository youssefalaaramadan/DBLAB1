<?php
//phpinfo();

//define("WEBSITE_LOCATION", "/localhost/test/test.php");
//echo WEBSITE_LOCATION;
//echo __FILE__;
//echo __LINE__;
//print_r( $_SERVER['SERVER_NAME'] );
//print_r( $_SERVER['HTTP_HOST'] );
//print_r( $_SERVER['SERVER_ADDR'] );
//print_r( $_SERVER['MIBDIRS'] );
$numberofyear = 3;
$numberofgrade = ($numberofyear - 6);
switch($numberofyear) {
 case $numberofyear >= 1 && $numberofyear <5:
            echo "stay at home!";
            break;
 case $numberofyear == 5:
            echo "Go to kindergarden!";
            break;
 case $numberofyear >=6 && $numberofyear <=12:
            echo "go to grade : {$numberofgrade}";
            break;
 default: 
            echo "Enter Age";
            break;
 }
?>

