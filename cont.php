<?php 

$name = $_POST['cname'];
$subject = $_POST['csubject'];
$message = $_POST['cmessage'];

//database connection
$conn = new mysqli('localhost','root','','reg_user');
if($conn->connect_error)
{
  die('connection Failed : '.$conn->connect_error);
}else{
  $stmt = $conn->prepare("insert into customer_query(name,subject,message) values(?,?,?)");
  $stmt->bind_param("sss",$name,$subject,$message);
  $stmt->execute();
  echo '<script>alert("message sent successfully ")</script>';
  $stmt->close();
  $conn->close();
}
?>
