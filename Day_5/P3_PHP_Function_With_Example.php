<?php 
    
    echo "<center><h1><u>PHP Function With Example</u></h1></center>";

?>

<?php
   
    echo "<h1>1)Use Of count() Function</h1>";
    
    $a = array(10,"PHP",20,"HTML",30,"CSS");

    echo "<br/><h3>".count($a)."</h3>";
    
?>

<?php
   
    echo "<h1>2)Use Of array_count_values() Function</h1>";
    
    $b = array(10,"PHP",20,"HTML",30,"CSS",40,"PHP",50,"CSS");

    $c = array_count_values($b);
    	
    foreach($c as $key => $value){
    
        echo "<br/><b>$key</b> = <b>$value</b>";
    
    }
    
?>

<?php
    
    echo "<h1>3)Use Of array_sum() Function</h1>";
   
    $d = array(10,20.5,30,40.5,50);
    
    echo "<br/><h3>".array_sum($d)."</h3>";
    
?>

<?php
    
    echo "<h1>4)Use Of array_product() Function</h1>";
   
    $e = array(10,20,30,40,50);
    
    echo "<br/><h3>".array_product($e)."</h3>";
    
?>

<?php
   
    echo "<h1>5)Use Of array_reverse() Function</h1>";
    
    $f = array(10,"PHP",20,"HTML",30,"CSS");

    $g = array_reverse($f);
    
    echo "<pre>";
    
    print_r($g);
    
    echo "</pre>";
    
?>

<?php
   
    echo "<h1>6)Use Of in_array() Function</h1>";
    
    $h = array(10,"PHP",20,"HTML",30,"CSS");

    $i = in_array("PHP",$h);
    
    echo $i;
    
?>

<?php
   
    echo "<h1>7)Use Of array_rand() Function</h1>";
    
    $j = array(10,"PHP",20,"HTML",30,"CSS");

    $k = array_rand($j);
    
    echo $k;
    
?>

<?php
   
    echo "<h1>8)Use Of array_rand() Function For Multiple Keys Selection</h1>";
    
    $l = array(10,"PHP",20,"HTML",30,"CSS");

    $m = array_rand($l,2);
    
    foreach($m as $key => $value){
    
        echo "<br/><b>$key</b> = <b>$l[$value]</b>";
    
    }
    
?>

<?php
   
    echo "<h1>9)Use Of array_unique() Function For Multiple Keys Selection</h1>";
    
    $n = array(10,"PHP",20,"HTML",30,"CSS",40,"HTML",50);

    echo "<pre>";
    
    print_r(array_unique($n));
    
    echo "</pre>";
    
?>

<?php
   
    echo "<h1>10)Use Of array_merge() Function For Multiple Keys Selection</h1>";
    
    $o = array("PHP","HTML","CSS");
    
    $p = array(10,20,30);
    
    $q = array_merge($o,$p);

    echo "<pre>";
    
    print_r(array_unique($q));
    
    echo "</pre>";
    
?>

<?php
   
    echo "<h1>11)Use Of array_search() Function</h1>";
    
    $r = array(10,"PHP",20,"HTML",30,"CSS");

    $s = array_search("HTML",$r);
    
    echo $s;
    
?>

<?php
   
    echo "<h1>12)Use Of range() Function</h1>";
    
    $t = range ("a","d");
    
    foreach($t as $key => $value){
    
        echo "<br/><b>$key</b> = <b>$value</b>";
    
    }
    
?>

<?php
   
    echo "<h1>13)Use Of sort() Function</h1>";
    
    $u = array(200,135,225,75,10,25);
    
    sort($u);
    
    echo "<pre>";
    
    print_r($u);
    
    echo "</pre>";
    
?>

<?php
   
    echo "<h1>14)Use Of rsort() Function</h1>";
    
    $v = array(200,135,225,75,10,25);
    
    rsort($v);
    
    echo "<pre>";
    
    print_r($v);
    
    echo "</pre>";
    
?>

<?php
   
    echo "<h1>15)Use Of asort() Function</h1>";
    
    $w = array(200,135,225,75,10,25);
    
    asort($w);
    
    echo "<pre>";
    
    print_r($w);
    
    echo "</pre>";
    
?>

<?php
   
    echo "<h1>16)Use Of ksort() Function</h1>";
    
    $x = array(
       
        10 => "Ten",
        25 => "TwentyFive",
        5 => "Five",
        100 => "Hundred"
    
    );
    
    ksort($x);
    
    foreach($x as $key => $value){
    
        echo "<br/><b>$key</b> = <b>$value</b>";
    
    }
    
?>

<?php
   
    echo "<h1>17)Use Of krsort() Function</h1>";
    
    $y = array(
       
        10 => "Ten",
        25 => "TwentyFive",
        5 => "Five",
        100 => "Hundred"
    
    );
    
    krsort($y);
    
    foreach($y as $key => $value){
    
        echo "<br/><b>$key</b> = <b>$value</b>";
    
    }
    
?>

<?php
   
    echo "<h1>18)Use Of shuffle() Function</h1>";
    
    $z = array("HTML","CSS","PHP","JAVASCRIPT");
    
    shuffle($z);
    
    foreach($z as $key => $value){
    
        echo "<br/><b>$key</b> = <b>$value</b>";
    
    }
    
?>

<?php
   
    echo "<h1>19)Use Of array_key_exists() Function</h1>";
    
    $a = array(
    
       "h" => "HTML",
       "c" => "CSS",
       "p" => "PHP",
       "j" => "JAVASCRIPT"
    
    );
    
    echo "<h3>".array_key_exists("p",$a)."</h3>";
    
?>

<?php
   
    echo "<h1>20)Use Of array_change_key_case() Function</h1>";
    
    $b = array(
    
        "html" => "1",
        "css" => "2",
        "php" => "3",
        "javascript" => "4"
    
    );
 
    $c = array_change_key_case($b,CASE_UPPER);
    
    echo "<pre>";
    
    print_r($c);
    
    echo "</pre>";
    
?>

<?php
   
    echo "<h1>21)Use Of array_combine() Function</h1>";
    
    $d = array("html","css","php");
    
    $e = array(10,20,30);
 
    $f = array_combine($d,$e);
    
    echo "<pre>";
    
    print_r($f);
    
    echo "</pre>";
    
?>

<?php
   
    echo "<h1>22)Use Of end() Function</h1>";
    
    $g = array("html","css","php");
 
    echo "<h3>".end($g)."</h3>";
    
?>

<?php
   
    echo "<h1>23)Use Of compact() Function</h1>";
    
    $subject = "Maths";
    
    $mark = 100;
    
    $h = compact("subject","mark");
    
    echo "<pre>";
    
    print_r($h);
    
    echo "</pre>";
    
?>

<?php
   
    echo "<h1>24)Use Of array_flip() Function</h1>";
    
    $i = array(
    
        "html" => "1",
        "css" => "2",
        "php" => "3",
        "javascript" => "4"
    
    );
 
    $j = array_flip($i);
    
    echo "<pre>";
    
    print_r($j);
    
    echo "</pre>";
    
?>

<?php
   
    echo "<h1>25)Use Of array_diff() Function</h1>";
    
    $k = array("html","css","javascript","php","bootstrap");
    
    $l = array("html","css","php");
 
    $m = array_diff($k,$l);
    
    echo "<pre>";
    
    print_r($m);
    
    echo "</pre>";
    
?>

<?php
   
    echo "<h1>26)Use Of array_intersect() Function</h1>";
    
    $n = array(
    
        "0" => "html",
        "1" => "css",
        "2" => "php"
    
    );
    
    $o = array(
    
        "3" => "css",
        "4" => "php",
        "5" => "javascript"
    
    );
 
    $p = array_intersect($n,$o);
    
    echo "<pre>";
    
    print_r($p);
    
    echo "</pre>";
    
?>

<?php
   
    echo "<h1>27)Use Of array_values() Function</h1>";
    
    $q = array(
    
        "html" => "HTML",
        "css" => "CSS",
        "php" => "PHP",
        "javascript" => "JAVASCRIPT"
    
    );
 
    $r = array_values($q);
    
    foreach($r as $key => $value){
    
        echo "<br/><b>$key</b> = <b>$value</b>";
    
    }
    
?>

<?php
   
    echo "<h1>28)Use Of array_push() Function</h1>";
    
    $s = array("html","css");
    
    array_push($s,"php","javascript","bootstrap");
    
    echo "<pre>";
    
    print_r($s);
    
    echo "</pre>";
    
?>

<?php
   
    echo "<h1>29)Use Of array_pop() Function</h1>";
    
    $t = array("html","css","javascript","php","bootstrap");
 
    echo "<h6>Before POP</h6>";
    
    echo "<pre>";
    
    print_r($t);
    
    echo "</pre>";
    
    array_pop($t);
    
    echo "<h6>After POP</h6>";
    
    echo "<pre>";
    
    print_r($t);
    
    echo "</pre>";
    
?>

<?php
   
    echo "<h1>30)Use Of explode() Function</h1>";
    
    $u = "I am Learning HTML CSS PHP For Web Development";
 
    echo "<br/><h6>String : $u</h6>";
    
    $v = explode(" ",$u);
    
    echo "<pre>";
    
    print_r($v);
    
    echo "</pre>";
    
?>

<?php 
    
    echo "<h1>31)Use Of implode() Function</h1>";
    
    $w = array("I","am","Learning","HTML","CSS","PHP","For","Web","Development");
    
    echo "<pre>";
    
    print_r($w);
    
    echo "</pre>";
    
    $x = implode(" ",$w);
    
    echo "<h5>".$x."</h5>";
    
?>











