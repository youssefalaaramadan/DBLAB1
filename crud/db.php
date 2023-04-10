<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname ='reg';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(! $conn ) {
   die('Could not connect: ' . mysqli_error($conn));
}
echo 'Connected successfully<br>';



//create table
//$sql = "INSERT INTO `clients`(`name`, `email`, `gender`, `mail_status`) VALUES ('['name']','['email']','['email']','['checked']')";

//select
//mysqli_select_db( $conn, $sql);

?>