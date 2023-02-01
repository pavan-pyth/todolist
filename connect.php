<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$con = mysqli_connect($servername,$username,$password,$dbname);
if(!$con){
    die('connection failed');

}

if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password =password_hash ($_POST['password'] ,PASSWORD_DEFAULT);
    $confirmpassword =password_hash($_POST['cofirmpassword'],PASSWORD_DEFAULT);

    $mysql_query = "INSERT INTO data(username,email,password,confirmpassword)
    VALUES('$username','$email','$password','$confirmpassword')";
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