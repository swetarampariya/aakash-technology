<?php
echo "<h1>For loop Example</h1>";
echo "<table border = 2 >";

    for($i=1 ; $i<=20 ; $i++){
        echo "<tr>";
            if($i%2==0){
                echo "<td bgcolor = 'pink'>$i</td>";
            }else{
                echo "<td bgcolor = 'yellow'>$i</td>";
                  }   
        echo "</tr>";
    }

echo "</table>";
?>
