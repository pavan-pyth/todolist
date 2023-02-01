<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$con = mysqli_connect($servername,$username,$password,$dbname);

$sql = "SELECT id FROM data";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)){
  $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
<body>
<form action="connection2.php" method="post">
  <div class="container" style="width: 50%;margin: 0 auto;">
    <h1>Task</h1>
    <hr>

    <label for="taskname"><b>Taskname</b></label>
    <input type="text"  name="task" id="task" required>

    <label for="date"><b>Due Date</b></label>
    <input type="datetime-local"  name="date" id="psw">

    <label for="User"><b>User Id</b></label>
    <!-- fetch from database -->
    <select name="user" type="user">
      <?php 
     foreach ($options as $option) {
     ?>
    <option value="<?php print $option['id']?>"><?php print $option['id']; ?></option>
    <?php 
    }
   ?> 
    </select>
  <label for="cars"><b>Status</b></label>
  <select name="status" id="status">
    <option value="1">Completed</option>
    <option value="2">Processing</option>
  </select>

    <hr>
    <button type="save" name="save" class="registerbtn">SaveData</button>
  </div>
</form>
</body>
</html>