<?php


include 'db.php';
$id=$_GET['id'];

$sql1="DELETE FROM todos Where id={$id}";


$result=mysqli_query($conn,$sql1)or die("query unsuccessful");//do table ko join kiya gya hai


header("Location: http://localhost/TODO/todo list/index.php");//form ka data redirect hokar hamare home page pr aa jayega


mysqli_close($conn);

