<html> 

<head>
</head>
<body>
<?php 
echo "<table border=1>";
echo "<tr>";
$f=$_POST['txt0'];
$g=$_POST['txt6'];
$a=$_POST['txt1'];
$b=$_POST['txt2'];
$c=$_POST['txt3'];
$d=$_POST['txt4'];
$e=$_POST['txt5'];
echo "<b> NAME:- $f </b><br>";
echo "<b> ENROLLMENT NO :-: $g</b><br>";
echo "<table border=1>";
echo "<tr>";
echo "<th>SUBJECT</th>";
echo "<th>MARKS</th>";
echo "</tr>";

echo "<tr>";
echo "<td>maths</td>";
echo "<td> $a </td>";
echo "</tr>";

echo "<tr>";
echo "<td>Science</td>";
echo "<td> $b </td>";
echo "</tr>";

echo "<tr>";
echo "<td>Social Science</td>";
echo "<td> $c </td>";
echo "</tr>";

echo "<tr>";
echo "<td>Computer</td>";
echo "<td> $d </td>";
echo "</tr>";

echo "<tr>";
echo "<td>PHP</td>";
echo "<td> $e </td>";
echo "</tr>";

echo "</table>";
$z=$a+$b+$c+$d+$e;

echo "<br><b><div style='color:purple'>TOTAL:$z</div></b>";

$x=$z*100/250;
echo "<br><b>percentage: $x %</b>"; 

$v = $x; //v is for percentage

if($v>35){
    echo "<br><b><h2><div style='color:green'> CONGRATULATIONS!! : pass</div></h2></b>";
}else if($v>50 && $v<=70){
    echo "<br><b><div style='color:blue'>CONGRATULATIONS!! : second class</div></b>";
}else if($v>70 && $v<=90){
    echo "<br><div style='color:violet'CONGRATULATIONS!! : >first class</div></br>";
}else if($v>90 && $v<=100){
    echo "<br><div style='color:yellow'>CONGRATULATIONS!! : distinction</div></br>";
}else if($v>0 && $v<=35){
    echo "<br><div style='color:red'>SORRY Better Luck Next Time</div></br>";
}else{
    echo "<br><div style='color:red'SORRY : >not valid</br>";
}


?>
</body>
</html>