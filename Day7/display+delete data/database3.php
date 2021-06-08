<?php
$connection = mysqli_connect("localhost","root","","db_internship");

    $q=mysqli_query($connection,"select * from tbl_student where is_delete = 0") or die(mysqli_error($connection));
    
    echo"<table border='1'>";
    echo "<tr>";
    echo "<th> Name </td>";
    echo "<th> Gender </td>";
    echo "<th> DOB </td>";
    echo "<th> Email </td>";
    echo "<th> MObile </td>";
    echo "<th> Address </td>";
    echo "<th> Password </td>";
    echo "<th> Area </td>";
    echo "<th> Bloodgroup </td>";
    echo "</tr>";
    $i=0;
    while($row = mysqli_fetch_array($q)){
        $i++;
        echo "<tr>";
        echo "<td>{$row['st_name']}</td>";
        echo "<td>{$row['st_gender']}</td>";
        echo "<td>{$row['st_dob']}</td>";
        echo "<td>{$row['st_email']}</td>";
        echo "<td>{$row['st_mobile']}</td>";
        echo "<td>{$row['st_address']}</td>";
        echo "<td>{$row['st_password']}</td>";
        echo "<td>{$row['st_area']}</td>";
        echo "<td>{$row['st_bloodgrood']}</td>";
        echo "<td><a href = 'delete.php?deleteid={$row['st_id']}'>delete</a></td>";
        echo "</tr>";
    }
    echo "</table>";

    echo "<a href = 'index.php'>add record </a>";


    

?>

<!-- <html>
    <body align-items="center">
        
        <form method = "post"> 
        
        
            Name : <input type = "text"  name = "txt1" placeholder = "enter    your name"/><br><br>
            Gender : <select name = "txt2"> 
                <option> Male</option>
                <option> Female</option>
                </select><br><br>
            DOB : <input type = "date" name = "txt3" /><br><br>
            Email : <input type = "text" name = "txt4" placeholder = "enter your email" /><br><br>
            Mobile : <input type = "number" name = "txt5" placeholder = "enter your mobile number"/><br><br>
            address : <input type = "textarea" name = "txt6"/><br><br>
            Password : <input type = "number " name = "txt7"/><br><br>
            Area :<input type = "text" name = "txt8"/><br><br>
            Bloodgroop : <input type = "text" name = "txt9"/><br><br>
            <input type = "submit"/><br><br>
        
        </form>
    </body>
    </html> -->