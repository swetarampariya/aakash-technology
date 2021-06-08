<!DOCTYPE html>
<html lang="en">
<head>
  <title>view user SR</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<br>
<div class="container">
  <h2>view user</h2>

 <!-- delete code -->
  <?php
    $conn = mysqli_connect('localhost','root','','crud');
    if(isset($_GET['del'])) {
     $del_id = $_GET['del'];
     $delete = "delete from user where user_id='$del_id'";
     $run_delete=mysqli_query($conn,$delete);
     if($run_delete == true){
         echo "done";
     }else{
         echo "fail";
     }
    }

  ?>
  <!-- delete code finish     -->
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>id</th>
        <th>Name</th>
        <th> email</th>
        <th>password</th>
        <th>image</th>
        <th>details</th>
        <th>delete</th>
        <th>edit</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $conn = mysqli_connect('localhost','root','','crud');

    $select = "select * from user";
    $run = mysqli_query($conn,$select);
    
    while($row_user = mysqli_fetch_array($run)){
    $user_id = $row_user['user_id'];
    $user_name = $row_user['user_name'];
    $user_email = $row_user['user_email'];
    $user_pw = $row_user['user_pw'];
    $user_image = $row_user['user_image'];
    $user_details = $row_user['user_details'];

    ?>

      <tr>
        <td><?php echo $user_id;?> </td>
        <td><?php echo $user_name;?> </td>
        <td><?php echo $user_email;?> </td>
        <td><?php echo $user_pw;?> </td>
        <td><img src = "upload/<?php echo $user_image; ?>" height = "70px"> </td>
        <td><?php echo $user_details;?> </td>
        <td><a class="btn btn-danger " href ="view_user.php?del=<?php echo $user_id;?>">Delete</a></td>
        <td><a class="btn btn-success " href ="edit_user.php?edit=<?php echo $user_id;?>">update</a></td>
        
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>
