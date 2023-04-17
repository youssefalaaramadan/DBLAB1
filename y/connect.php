<?php
$user = $_POST['user'];
$pass = $_POST['pass'];

$conn = new mysqli('localhost','root','','login2');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into users(username, password, name) values(?, ?, ?)");
    $stmt->bind_param("sss",$user,$pass,$user);
    $stmt->execute();
    echo "Successfully registered";
    $stmt->close();
    $conn->close();
}
?>
<?php
header('location: index.php');
    exit();
?>