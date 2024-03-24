<?php 
// connect db server
$server_name = 'localhost';
$server_user = 'root';
$server_password = '';
// establish connection
$connect = mysqli_connect($server_name, $server_user, $server_password);
if($connect){
  echo "Connection successful";
} else {
  die(mysqli_connect_error());
}
//create a database
$sql = "Create database tbladmin";
$result = mysqli_query($connect, $sql);
if ($result){
  echo "Database created successfully";
} else {
  die(mysqli_error($connect));
}



?>