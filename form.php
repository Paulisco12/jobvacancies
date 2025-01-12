<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $email = $_POST['email'];
    
$con = new mysqli('localhost', 'root','','paulisco');
if($con){
  $sql="insert into `oladejo` (name) values('$email')";
  $result = mysqli_query($con,$sql);
  if($result){
    echo '<br><br><br><h1>You have successfully subscribe to our channel</h1>';
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