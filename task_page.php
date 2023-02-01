<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
</head>
<html>

<style>
    .table,.table td,.table th{
        border: 1px solid black;
        border-collapse: collapse;
        padding: 6px;
    }
    .table th{
        background-color: cornflowerblue;
    }
    /* .table tr:nth-child(even){
        background-color: azure;
    } */

 </style> 
<?php
include_once 'update.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$con = mysqli_connect($servername,$username,$password,$dbname);
// , SELECT Task AND date FROM task_details
// SELECT user FROM user
$sql = "SELECT data.user,user_task.task_id,user_task.user_id,user_task.Task,user_task.date,user_task.Status FROM user_task INNER JOIN dataON user.id=user_task.user_id";
$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result)){
    echo '<table class="table">';
    echo '<tr>';
    echo '<th>task_id</th>';
    echo '<th>Username</th>';
    echo '<th>Task Name</th>';
    echo '<th>Date</th>';
    echo '<th>Status</th>';
    echo '<th></th>';
    echo '</tr>';
    while($row=mysqli_fetch_assoc($result)){
        //table align used
        echo '<tr>';
        echo '<td>' .$row['task_id']. '</td>';
        echo '<td>' .$row['user']. '</td>';
        echo '<td>' .$row['Task']. '</td>';
        echo '<td>' .$row['date']. '</td>';
        echo '<td>' .$row['Status']. '</td>';
        echo "<td><button type='button'class='update' data_id='{$row["task_id"]}'>update</td>";
        echo '</tr>';
    }
    echo '</table>';
}

?> 
<script>
   $(document).ready(function() {
   
    $(".update").click(function(e) {
        e.preventDefault();
        var row= $(this);
        var id = $(this).attr("data_id");
        $("#id").val(id);
        var taskid= row.closest("tr").find("td:eq(0)").text();
        $("#taskid").val(taskid);
        var task= row.closest("tr").find("td:eq(2)").text();
        $("#taskname").val(task);
        var user= row.closest("tr").find("td:eq(1)").text();
        $("#user").val(user);
        var task= row.closest("tr").find("td:eq(4)").text();
        $("#status1").val(task);

        console.log(id);

        // console.log("update", $(this).attr("data_id"));

        $.ajax({
            url:"update.php",
            type:"post",
            data:$("#form").serialize(),
            success:function(data){
                // console.log(data);
                $("#form").submit( function(){
                      alert ("submitted")
                });
            }
        });
    });
    

     
  });
</script>
</html>