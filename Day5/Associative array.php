<!-- /Associative array-->
<!-- key = value -->
<?php
$a=array(
    0=>10,
    "s" => "sun",
    2 => "three",
    10 =>10.45
);

// for print value of array
// for single value print 
echo "10 is ".$a['10']  ;

// for print full array use foreach loop
foreach($a as $value){
    echo "<br>value is $value";
}
foreach ($a as $key => $value) {
    echo "<br>key is <b>$key</b> and value is<b> $value </b>";
}
