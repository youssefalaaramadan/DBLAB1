<?php
//echo nl2br("heelloo\n newline");
//$stfunc = str_repeat("this will be repeated n times <br>", 3);
//echo $stfunc;
//$text = "red, blue, white, grey, green";
//$textcolumn = explode(",",$text);
//print_r($textcolumn);
//$arrayone = array(1,2,3,4,5);
//$arraytwo = array('A', 'B', 'C', 'D', 'E');
//$together = array_merge($arrayone,$arraytwo);
//print_r($together);
//$toshow = print_r($_SERVER);
//echo "<br> $toshow[' ']";
//foreach( $_SERVER as $value ){
//echo " $value <br>";
//}
//$math = array(12, 45, 10, 25);
//echo array_sum($math);
//echo array_sum($math)/count($math);
//rsort($math);
//$arrlength=count($math);
//for($x=0;$x<$arrlength;$x++)
  //{
  //echo $math[$x];
  //echo "<br>";
  //}
  //$five = array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40);
  //asort($five);
//foreach ($five as $key => $val) {
    //echo "$key = $val\n";
//}
//$five = array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40);
   //sort($five);
//foreach ($five as $key => $val) {
    //echo "$key = $val\n";
//}
//$five = array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40);
  //rsort($five);
//foreach ($five as $key => $val) {
    //echo "$key = $val\n";
//}
$five = array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40);
  arsort($five);
foreach ($five as $key => $val) {
    echo "$key = $val\n";
}
?>