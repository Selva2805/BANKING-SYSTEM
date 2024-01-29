<?php 

$lamt = $_POST['loanamt'];
$ltype = $_POST['loantype'];
//database connection
$conn = new mysqli('localhost','root','','reg_user');
if($conn->connect_error)
{
  die('connection Failed : '.$conn->connect_error);
}else{
  $stmt = $conn->prepare("insert into Loan(LAmount,LType) values(?,?)");
  $stmt->bind_param("is",$lamt,$ltype);
  $stmt->execute();
  echo '<script>alert("message sent successfully ")</script>';
  $stmt->close();
  $conn->close();
}
?>
