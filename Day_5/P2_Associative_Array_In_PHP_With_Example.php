<?php

    echo "<h1>Associative Array Method 1</h1>";
    
    echo "</br/><h2>Use Of For Each Loop</h2>";
    
    $a[0] = 10;
    $a['p'] = "PHP";
    $a[2] = 20.5;
    $a['h'] = "HTML";
    $a[30] = "Thirty";
    $a['c'] = "CSS";
    
    foreach($a as $value){

        echo "<br/>Value is $value";

    }

    foreach($a as $key => $value){

        echo "<br/>Key is <b>$key</b> and Value is <b>$value</b>";

    }

    echo "</br/><h1>Associative Array Method 2</h1>";

    echo "</br/><h2>Use Of For Each Loop</h2>";

    $b = array(
         
         0 => 10,
        "p" => "PHP",
         2 => 20.5,
        "h" => "HTML",
         30 => "Thirty",
        "c" => "CSS"

    );

    foreach($b as $value){

        echo "<br/>Value is $value";

    }

    foreach($b as $key => $value){

        echo "<br/>Key is <b>$key</b> and Value is <b>$value</b>";

    }

    echo "</br/><h1>Use Of print_r() Function</h1>";

    echo "<pre>";

    print_r($a);

    echo "</pre>";

?>