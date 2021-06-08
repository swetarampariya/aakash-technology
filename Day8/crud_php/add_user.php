<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sweta Rampariya</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<div class="container">
  <h2>Add New User</h2>
  <form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
      <label >Name</label>
      <input type="text" class="form-control" id="email" placeholder="Enter name" name="user_name">
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="user_email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="user_pw">
    </div>
    <div class="form-group">
      <label > Image</label>
      <input type="file" class="form-control" id="email" placeholder="Enter name" name="user_image">
    </div>

    <div class="form-group">
      <label >Details</label>
      <textarea class = "form-control" name = "user_details"></textarea> 
    </div>

    
    <input type="submit" name = "insert-btn" class="btn btn-primary">
  </form>

<?php
$conn = mysqli_connect('localhost','root','','crud');


    if(isset($_POST['insert-btn'])){

     $user_name = $_POST['user_name'];
      $user_email = $_POST['user_email'];
      $user_pw = $_POST['user_pw'];
      $user_image = $_FILES['user_image']['name'];
      $user_tmp_image = $_FILES['user_image']['tmp_name'];
      $user_details = $_POST['user_details'];


      $insert ="insert into user(user_name,user_email,user_pw,user_image,user_details) values('$user_name','$user_email','$user_pw','$user_image ','$user_details')";
    
      $run_insert = mysqli_query($conn,$insert);
      if($run_insert ){
          echo "data inserted";
          move_uploaded_file($user_tmp_image,"upload/$user_image");
      }else{
            echo "failed";
      
      }
}
      
?>




</div>

</body>
</html>
