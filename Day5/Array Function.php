<!-- Numerical array -->
<?php
 // count()
    $a = array('php','c', 'java', 'html');
    echo count($a);
        echo "<br>";

//array_count_values()
    $a = array('php','c', 'java','c', 'java', 'html' ); 
    $b = array_count_values($a);

    foreach ($b as $key => $value) {
    echo "<br>$key - <strong> $value</strong>" ;
    }
        echo "<br>";
        echo "<br>";

//array_sum()
    $c = array(8,1,4,0,1,6);
    echo  array_sum($c);
        echo "<br>";
        echo "<br>";

//array_product()
    $c = array(8,1,4,1,1,6);
    echo array_product($c);
        echo "<br>";
        echo "<br>";

//array_reverse()
    $a = array('php','c', 'java', 'html');
    $r =  array_reverse($a);
    print_r($r);
        echo "<br>";
        echo "<br>";

//in_array()
    $a = array('php','c', 'java', 'html');
    $t=in_array('html',$a);
    echo $t;
        echo "<br>";
        echo "<br>";

//array_random
    $a = array('php','c', 'java', 'html');  
    $i=array_rand($a);
    echo $a[$i];
        echo "<br>";
        echo "<br>";

//select multiple keys at random
    $a = array('php','c', 'java', 'html');
    $i = array_rand($a,2);
    foreach ($i as $key => $value) {
        echo "<br>$key - <strong>" . $a[$value]. "</strong>";
    }
        echo "<br>";
        echo "<br>";

//array unique()
    $a = array('php','c', 'java', 'html');
    print_r(array_unique($a));
        echo "<br>";
        echo "<br>";

//array_merge()
    $a = array('php','c', 'java', 'html');
    $d = array(8,1,4,0);
    $n = array_merge($a,$d);
    print_r($n);
        echo "<br>";
        echo "<br>";

//array_search()
    $m=array('php','c','html','java');
    $c = array_search('c',$m);
    echo $c;
        echo "<br>";
        echo "<br>";

//range()
    $a = range("12","22");
    foreach($a as $key => $value){
        echo "<br> $key => $value ";
    }
        echo "<br>";
        echo "<br>";

//sort()
    $a = array(8,1,4,0,1,6,3,7,0,8);
    sort($a);
    print_r($a);
        echo "<br>";
        echo "<br>";

//rsort()
    $a = array(8,1,4,0,1,6,3,7,0,8);
    rsort($a);
    print_r($a);
        echo "<br>";
        echo "<br>";

//asort()
    $a = array(8,1,4,0,1,6,3,7,0,8);
    asort($a);
    print_r($a);
        echo "<br>";
        echo "<br>";

//ksort()
    $s= array(
        "boy"=> "B",
        "man" => "M", 
        "girl"=> "G", 
        "woman"=> "W");
    ksort($s);
    foreach($s as $key => $value){
        echo "<br> $key - $value ";
    }
        echo "<br>";
        echo "<br>";

//krshort()
    $s= array(
        "boy"=> "B",
        "man" => "M", 
        "girl"=> "G", 
        "woman"=> "W");
    krsort($s);
    foreach($s as $key => $value){
        echo "<br> $key - $value ";
    }
        echo "<br>";
        echo "<br>";

//shuffle()
    $m = array("boy","girl","woman","man");
    shuffle($m);
    foreach($m as $key => $value){
        echo "<br> $value";
    }
        echo "<br>";
        echo "<br>";

//array_key_exists()
    $s= array(
        "boy"=> "B",
        "man" => "M", 
        "girl"=> "G", 
        "woman"=> "W");
        echo array_key_exists('boy',$s);
            echo "<br>";
            echo "<br>";

// array _change_key_case()
    $s= array(
        "boy"=> "B",
        "man" => "M", 
        "girl"=> "G", 
        "woman"=> "W");
    $uppercase = array_change_key_case($s,CASE_UPPER);
    print_r($uppercase);
        echo "<br>";
        echo "<br>";

//array_combine()
    $s= array("boy","man"); 
    $p = array("girl", "woman");
    $n = array_combine($s,$p);
    print_r($n);
        echo "<br>";
        echo "<br>";

//end()
    $m=array('php','c','html','java');
    echo end($m);
        echo "<br>";
        echo "<br>";

//compact()
    $p = "pink";
    $b = "black";
    $a=compact("p" , "b");
    print_r($a);
        echo "<br>";
        echo "<br>";

//array_flip()
    $a=array("p" => "pink","b"=> "black", "w"=>"white");
    $f=array_flip($a);
    print_r($f);
        echo "<br>";
        echo "<br>";

// array_diff()
    $a=array("p" => "pink", "black", "white");    
    $b= array("o"=>"orange","pink" ,"white",);
    $d = array_diff($a,$b);
    print_r($d);
        echo "<br>";
        echo "<br>";

//array _interest()
    $a=array("p" => "pink","b"=> "black", "w"=>"white");
    $b = array("w"=>"white" , "p"=> "pink" , "o"=>"orange");
    print_r(array_intersect($a,$b));
        echo "<br>";
        echo "<br>";

//array_values()
    $a = array("c"=>"i","c++"=> "am", "php"=>"sweta");
    $m=array_values($a);
    foreach($m as $key => $value){
        echo "<br>$key - $value";
    }
        echo "<br>";
        echo "<br>";

//array_push();
    $a= array("html","c","c++");
    array_push($a , "java", "css");
    print_r($a);
        echo "<br>";
        echo "<br>";

//array_pop()
    $a= array("java", "html","c","c++");
    array_pop($a);
    print_r($a);
    array_pop($a);
    print_r($a);
        echo "<br>";
        echo "<br>";



//implode()
    $a= array("i","love","php", "language" );
    $m=implode(" ",$a);
    echo $m;
    echo"<br>";
    echo"<br>";

    //explode()
    $m= "i love myself";
    $a = explode(" ",$m);
    print_r($a);
        echo"<br>";
        echo "<br";
?>
