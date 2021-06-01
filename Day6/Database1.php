<?php
$host= "localhost";
$username = "root";
$passwd = "";
$dbname = "db_internship";
// connection function
$connection = mysqli_connect($host , $username , $passwd , $dbname);

$q = mysqli_query($connection,
"insert into tbl_student(st_id,st_name,st_gender,st_dob,st_email,st_mobile,st_address,st_password,st_area,st_bloodgrood) values('5','raj','male','21/04/1998','raj@gmail.com','1234567','bsdiuewgdug','3456','abad','b positive')" )or die("error".mysqli_error($connection));

if($q)
{
    echo "<script>alert('Record added');</script>";
}