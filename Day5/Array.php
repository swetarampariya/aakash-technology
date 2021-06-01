<!-- numerical array -->
<?php
$a[0] = 10;
$a[1] = 10.5;
$a[2] = "sweta";

$a = array(10,10.5,"sweta");
// print any specific value
echo $a[2] ; 
// print whole array value
for($i=0 ;$i <count($a) ; $i++){
    echo "<br>".$a[$i];
} 
// 3 inbuilt function to debug the array
echo"<pre>";
print_r($a);
echo"<pre>";

echo"<pre>";
var_dump($a);
echo "<pre>";



?>