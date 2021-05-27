<?php
echo "<h1> swap number</h1>";
    $a = 10;
    $b = 20;
    $c = $a;
        echo "before swap value of a is:-".$a."<br>before swap value of b is:-".$b ;
    $a = $b;
    $b = $c;
    $c = $a;
        echo "<br>after swap value of a is:-".$a."<br>after swap value of b is:-".$b ;
    ?>