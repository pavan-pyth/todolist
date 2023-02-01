<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$con = mysqli_connect($servername,$username,$password,$dbname);
if(!$con){
    die('connection failed');
}
if(isset($_POST['save']))
{
  $task = $_POST['task'];
  $date = $_POST['date'];
  $userid = $_POST['user'];
  $status = $_POST['status'];  

  $mysql_query = "INSERT INTO user_task (user_id,Task,date,Status) 
  VALUES('$userid','$task','$date','$status')";
  $result = mysqli_query($con, $mysql_query);
  if($result)
  {
      echo "<script> alert('Registration Successful')</script>";
  }
  else{
     echo
     "<script> alert('password does not match')</script>";
}
}
?>