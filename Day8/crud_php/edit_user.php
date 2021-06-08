<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit User</title>
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
  <h2>Edit User</h2>

  <?php
    $conn = mysqli_connect('localhost','root','','crud');
    if(isset($_GET['edit'])) {
     $edit_id = $_GET['edit'];

     $select = "select * from user where user_id='$edit_id'";
    $run = mysqli_query($conn,$select);
    
    $row_user = mysqli_fetch_array($run);
    
     $user_name = $row_user['user_name'];
     $user_email = $row_user['user_email'];
     $user_pw = $row_user['user_pw'];
     $user_image = $row_user['user_image'];
     $user_details = $row_user['user_details'];
    }

  ?>

  <form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
      <label >Name</label>
      <input type="text" class="form-control" value = "<?php echo $user_name;?>" id="email" placeholder="Enter name" name="user_name">
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" value = "<?php echo $user_email;?>"  id="email" placeholder="Enter email" name="user_email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" value = "<?php echo $user_pw;?>"  id="pwd" placeholder="Enter password" name="user_pw">
    </div>
    <div class="form-group">
      <label > Image</label>
      <input type="file" class="form-control"   id="email" placeholder="Enter name" name="user_image">
    </div>

    <div class="form-group">
      <label >Details</label>
      <textarea class = "form-control" value = "<?php echo $user_details;?>"  name = "user_details"></textarea> 
    </div>

    
    <input type="submit" name = "insert-btn" class="btn btn-primary">
  </form>
<!-- edit code -->
<?php
$conn = mysqli_connect('localhost','root','','crud');


    if(isset($_POST['insert-btn'])){

     $euser_name = $_POST['user_name'];
      $euser_email = $_POST['user_email'];
      $euser_pw = $_POST['user_pw'];
      $euser_image = $_FILES['user_image']['name'];
      $euser_tmp_image = $_FILES['user_image']['tmp_name'];
      $euser_details = $_POST['user_details'];

      if(empty($euser_image)){
        $euser_image = $user_image;
      }

      $update = "update user set user_name='$euser_name',user_email='$euser_email',user_pw='$euser_pw',user_image='$euser_image',user_details='$euser_details'  where user_id ='$edit_id'";
    
      $run_update = mysqli_query($conn,$update);
      if($run_update ){
          echo "data updated";
          move_uploaded_file($euser_tmp_image,"upload/$euser_image");
      }else{
            echo "failed";
      
      }
}
      
?>
<br>
<a class="btn btn-primary" href = "view_user.php"> view user </a>



</div>

</body>
</html>
