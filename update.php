<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
</head>
<body>
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "test";
  $con = mysqli_connect($servername,$username,$password,$dbname);
  if(isset($_POST['save'])){
    $status = $_POST['status'];
    $task_id = $_POST['taskid'];
    $Taskname = $_POST['Task'];

    $sql1 = "UPDATE user_task SET Status='$status',Task='$Taskname'WHERE task_id= $task_id";
  $result = mysqli_query($con,$sql1);
  
  if($result){
    // header("Location:user_task_page.php");
    
  }
  else{
    echo "fail";
  }

}
 ?>

<form  id="form" method="post">
  <div class="container" style="width: 50%;margin: 0 auto;">
    <h1>Update</h1>
     <label for="taskname"><b>task_id</b></label>
    <input type="Text"  name="taskid" id="taskid" value="">

    <label for="taskname"><b>Task Name</b></label>
    <input type="Text"  name="Task" id="taskname" value="">

    <!-- <label for="date"><b>Due Date</b></label>
    <input type="datetime-local"  name="date" id="psw">  -->

    <label for="User"><b>User </b></label> 
    <input type="Text"  name="user" id="user" value="">
  <label for="cars"><b>Status</b></label> 
  <select name="status">
    <option value="1" name="status1">Completed</option>
    <option value="2">Processing</option>
  </select>
  <input type="hidden"  name="id" id="id" value="">
    <hr>
    <button type="save" name="save" class="registerbtn" >Update</button>
  </div>
</form>
 
 
</body>
<style>
    * {box-sizing: border-box}

/* Add padding to containers */
.container {
  padding: 16px;
  width: 50%;
  margin: 0 auto;
}

/* Full-width input fields */
input[type=text], input[type=datetime-local], select{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

</style>

</html>