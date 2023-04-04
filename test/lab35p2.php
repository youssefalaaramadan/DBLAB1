<?php


$students = [
    ['name' => 'Alaa', 'email' => 'ahmed@test.com', 'status' => 'CMS'],
    ['name' => 'Shamy', 'email' => 'ali@test.com', 'status' => 'OS'],
    ['name' => 'Youssef', 'email' => 'basem@test.com', 'status' => 'OS'],
    ['name' => 'Waleid', 'email' => 'farouk@test.com', 'status' => 'CMS'],
    ['name' => 'Rahma', 'email' => 'hany@test.com', 'status' => 'OS'],
];
echo '<table>';
echo '<h1>Application name: PHP class registration</h1>';
echo '<tr>';
echo '<td><h3>Name</h3></td>';
echo '<td><h3>Email</h3></td>';
echo '<td><h3>Status</h3></td>';
echo '</tr>';

foreach($students as $info){
    echo '<tr>';
    foreach($info as $val){
  if($students['status'] = "CMS")  {
echo '<td style="color: red;">' . $val . '</td>';
  }
else
{
    echo '<td >' . $val . '</td>';
}
    }
    echo '</tr>';
}
echo '</table>';
?>