<?php
$connection = mysqli_connect("localhost","root","","db_internship");

if($_POST){
    $name = $_POST['txt1'];
    $gender =$_POST['txt2'];
    $dob = $_POST['txt3'];
    $email = $_POST['txt4'];
    $mobile = $_POST['txt5'];
    $address = $_POST['txt6'];
    $password = $_POST['txt7'];
    $area = $_POST['txt8'];
    $bloodgroup = $_POST['txt9'];

    $q=mysqli_query($connection,"insert into tbl_student(st_name,st_gender,st_dob,st_email,st_mobile,st_address,st_password,st_area,st_bloodgrood) values( '{$name}','{$gender}','{$dob}','{$email}','{$mobile}','{$address}','{$password}','{$area}','{$bloodgroup}')") or die(mysqli_error($connection));
    
    if($q){
        echo "<script>alert('record added');</script>";
    }
    echo "<a href='database3.php'>display data</a>";
}

?>

<html>
    <body>
        <form method = "post"> 
        <div style="background-image:url('pic1.jpg');"><br><br>
            Name : <input type = "text" required name = "txt1"/><br><br>
            Gender : <select name = "txt2"> 
                <option> Male</option>
                <option> Female</option>
                </select><br><br>
            DOB : <input type = "date" name = "txt3"/><br><br>
            Email : <input type = "text" name = "txt4"/><br><br>
            Mobile : <input type = "number" name = "txt5"/><br><br>
            address : <input type = "textarea" name = "txt6"/><br><br>
            Password : <input type = "number " name = "txt7"/><br><br>
            Area :<input type = "text" name = "txt8"/><br><br>
            Bloodgroop : <input type = "text" name = "txt9"/><br><br>
            <input type = "submit"/><br><br><br><br><br><br><br><br>

        </form>
        
    </body>
    </html>
    
