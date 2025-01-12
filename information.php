<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
$con = new mysqli('localhost', 'root','','paulisco');
if($con){
  $sql="insert into `paul` (Name, Email, Messages) values('$name','$email','$message')";
  $result = mysqli_query($con,$sql);
  if($result){
    echo '<br><br><br><h1>You have successfully submit your informations</h1>';
  }
  else{
    die(mysqli_error($con));
  }
}
else{
    die(mysqli_error($con));
}
}
?>