<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>To DoList App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body style="background-color:rgba(117,50,249);opacity: 0.9">
    <h1 class="pt-4"style="color:white;">Welcome to To DoList</h1>
    <center><hr style="width:60%;color:white;font-weight: bold;"></center>
    <div class="container mt-4"style="min-height:300px;"id="a">
      <center>
      <div class="row">
        <div class="col-sm-6">
          <div class="img-fluid "style="background:white;width:90%;min-height:150px;margin-top:200px;border-radius:30px;">
          <form action="todo.php"method="post"style="padding:40px;">
              <input type="text" id="item" name="Title"  class="form-control" placeholder="Write something here..." >
              <input type="submit"value="Add"class="form-control mt-3 btn btn-primary">
          </form>
        </div>
        </div>
        <div class="col-sm-6">
          <div class="img-fluid mt-3"style="background:white;width:100%;min-height:500px;border-radius:30px;">
            <h1 style="color:#1767fa;font-weight: bold;"class="pt-4">My Task !</h1>
            <center><hr style="width:60%;color:red;font-weight: bold;"></center><br>

           <div class="container">
            
            <table class="table table-hover mt-3 text-center"style="padding:30px;">
              <thead>
    <tr>
      <th scope="col">S.no</th>
      <th scope="col">Task</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
    include 'db.php';
    $sql= "SELECT *FROM todos";
    $result=mysqli_query($conn,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $title=$row['Title'];
       
        ?>
        <tr>
            <td><?php echo $id ?></td>
            <td><?php echo $title ?></td>
            <td>
                <a href="delete.php?id=<?php echo $id;?>" class="btn btn-danger btn-sm">Delete</a>
 <?php   
}
}
    ?>
  </tbody>
              </table>
           </div>
          </div>
        </div>
      </div>
      </center>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>