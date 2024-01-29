<?php

 $suser  =  $_POST['user'];
$samount  =   $_POST['amount'];

//database connection
$conn = new mysqli('localhost','root','','reg_user');
if($conn->connect_error)
{
  die('connection Failed : '.$conn->connect_error);
}else{
  $stmt = $conn->prepare("insert into transaction(receivername,amount) values(?,?)");
  $stmt->bind_param("si",$suser,$samount);
  $stmt->execute();
  echo '<script>alert("Account created successfully ")</script>';
  $stmt->close();
  $conn->close();
}
?>
