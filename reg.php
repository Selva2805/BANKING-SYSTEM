<?php include "netbank.html";
 $username       =  $_POST['username'];
$password  =   $_POST['password'];
$email     =   $_POST['email']; 

//database connection
$conn = new mysqli('localhost','root','','reg_user');
if($conn->connect_error)
{
  die('connection Failed : '.$conn->connect_error);
}else{
  $stmt = $conn->prepare("insert into registration(username,password,email) values(?,?,?)");
  $stmt->bind_param("sis",$username,$password,$email);
  $stmt->execute();
  echo '<script>alert("Account created successfully ")</script>';
  header('Location: localhost/netbank.html',true);
  $stmt->close();
  $conn->close();
}
?>
