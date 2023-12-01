<?php
//error_reporting(E_ALL);
//ini_set("display_errors", 1);
$servername = "db";
$user = "root";
$password = "test123";
$dbName = 'testdb';

$conn = mysqli_connect($servername, $user, $password, $dbName);


$sql = "SELECT idx,user_name,user_pwd FROM user;";
$res = mysqli_query($conn,$sql);

$i=0;
while($list[$i] = mysqli_fetch_array($res)) {
    $i++;
 }
array_pop($list);

echo json_encode($list);

?>