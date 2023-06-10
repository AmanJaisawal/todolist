
<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "todo");

if (mysqli_connect_errno()) {
    // Throw error message based on ajax or not
    echo "Failed to connect to MySQL! Please contact the admin.";
    return;
}

$title=$_POST['Title'];

//header("db.php");
 
$sql = "INSERT INTO `todos` (`id`, `Title`) VALUES (NULL, '$title')";
$result = mysqli_query($conn, $sql);

if (!$result) {
    $response = array("success" => false, "message" => "Something went wrong!");
    echo json_encode($response);
     return;
}
//$result=mysqli_query($conn,$sql)or die("query unsuccessful");//do table ko join kiya gya hai

//}

$response = array("success" => true, "message" => "Your account has been created successfully!");
echo json_encode($response);
header("Location: http://localhost/TODO/todo list/index.php");//form ka data redirect hokar hamare home page pr aa jayega

mysqli_close($conn);

?>