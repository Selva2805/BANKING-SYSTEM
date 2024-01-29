<?php 
$lname = $_POST['loname'];
$lpin = $_POST['lopin'];

//database connection
$conn = new mysqli('localhost','root','','reg_user');
if($conn->connect_error)
{
  die('connection Failed : '.$conn->connect_error);
}else
{
  $stmt = $conn->prepare("insert into login(uname,upin) values(?,?)");
  $stmt->bind_param("si",$lname,$lpin);
  $stmt->execute();
  echo '<script>alert("message sent successfully ")</script>';
  $stmt->close();
  $conn->close();
}
?>
