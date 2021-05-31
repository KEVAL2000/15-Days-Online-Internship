<?php

    echo "<h1>Numerical Array Method 1</h1>";
    
    echo "</br/><h2>Use Of For Loop</h2>";
    
    $a[0] = 10;
    $a[1] = "PHP";
    $a[2] = 20.5;
    $a[3] = "HTML";
    $a[4] = 30;
    $a[5] = "CSS";
    
    for($i=0;$i<6;$i++){

        echo "<br/>".$a[$i];

    }

    echo "</br/><h1>Numerical Array Method 2</h1>";

    echo "</br/><h2>Use Of For Loop</h2>";

    $b = array(10,"PHP",20.5,"HTML",30,"CSS");

    for($i=0;$i<6;$i++){

        echo "<br/>".$b[$i];

    }

    echo "</br/><h1>Use Of print_r() Function</h1>";

    echo "<pre>";

    print_r($a);

    echo "</pre>";

?>