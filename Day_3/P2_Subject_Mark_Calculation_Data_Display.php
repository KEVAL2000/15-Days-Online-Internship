<?php

$mark1 = $_POST['mark1'];

$mark2 = $_POST['mark2'];

$mark3 = $_POST['mark3'];

$mark4 = $_POST['mark4'];

$mark5 = $_POST['mark5'];

$total = $mark1+$mark2+$mark3+$mark4+$mark5;

$percentage = $total*(1/500)*100;

echo "<center>";

echo "<table style='width: 75%; border: 1px solid black; background-color: lightpink;'>";

echo "<tr><h1>Subject Mark Calculation Result</h1></tr>";

echo "<tr style='padding: 2px;'>";

echo "<td style='font-weight: bold; padding: 2px;'>";

echo "Science & Technology :";

echo "</td>";

echo "<td style='padding: 2px;'>";

echo "$mark1";

echo "</td>";

echo "</tr>";

echo "<tr style='padding: 2px;'>";

echo "<td style='font-weight: bold; padding: 2px;'>";

echo "Social Science :";

echo "</td>";

echo "<td style='padding: 2px;'>";

echo "$mark2";

echo "</td>";

echo "</tr>";

echo "<tr style='padding: 2px;'>";

echo "<td style='font-weight: bold; padding: 2px;'>";

echo "Maths :";

echo "</td>";

echo "<td style='padding: 2px;'>";

echo "$mark3";

echo "</td>";

echo "</tr>";

echo "<tr style='padding: 2px;'>";

echo "<td style='font-weight: bold; padding: 2px;'>";

echo "English :";

echo "</td>";

echo "<td style='padding: 2px;'>";

echo "$mark4";

echo "</td>";

echo "</tr>";

echo "<tr style='padding: 2px;'>";

echo "<td style='font-weight: bold; padding: 2px;'>";

echo "Gujarati :";

echo "</td>";

echo "<td style='padding: 2px;'>";

echo "$mark5";

echo "</td>";

echo "</tr>";

echo "<tr style='padding: 2px;'>";

echo "<td style='font-weight: bold; padding: 2px;'>";

echo "Total :";

echo "</td>";

echo "<td style='padding: 2px;'>";

echo "$total";

echo "</td>";

echo "</tr>";

echo "<tr style='padding: 2px;'>";

echo "<td style='font-weight: bold; padding: 2px;'>";

echo "Percentage :";

echo "</td>";

echo "<td style='padding: 2px;'>";

echo "$percentage%";

echo "</td>";

echo "</tr>";

if($percentage >= 80){
    
    echo "<tr style='padding: 2px;'>";

    echo "<td style='font-weight: bold; padding: 2px;'>";

    echo "Status :";
    
    echo "</td>";

    echo "<td style='font-weight: bold; padding: 2px; color: green;'>";

    echo "Congretulation! You are Pass with First Class.";

    echo "</td>";

    echo "</tr>";

}elseif($percentage <80 && $percentage >=70){
    
    echo "<tr style='padding: 2px;'>";

    echo "<td style='font-weight: bold; padding: 2px;'>";

    echo "Status :";
    
    echo "</td>";

    echo "<td style='font-weight: bold; padding: 2px; color: green;'>";

    echo "Congretulation! You are Pass with Second Class.";

    echo "</td>";

    echo "</tr>";

}elseif($percentage <70 && $percentage >=50){
    
    echo "<tr style='padding: 2px;'>";

    echo "<td style='font-weight: bold; padding: 2px;'>";

    echo "Status :";
    
    echo "</td>";

    echo "<td style='font-weight: bold; padding: 2px; color: green;'>";

    echo "Congretulation! You are Pass with Third Class.";

    echo "</td>";

    echo "</tr>";

}elseif($percentage <50 && $percentage >=35){
    
    echo "<tr style='padding: 2px;'>";

    echo "<td style='font-weight: bold; padding: 2px;'>";

    echo "Status :";
    
    echo "</td>";

    echo "<td style='font-weight: bold; padding: 2px; color: green;'>";

    echo "Congretulation! You are Pass.";

    echo "</td>";

    echo "</tr>";

}else{
    
    echo "<tr style='padding: 2px;'>";

    echo "<td style='font-weight: bold; padding: 2px;'>";

    echo "Status :";
    
    echo "</td>";

    echo "<td style='font-weight: bold; padding: 2px; color: red;'>";

    echo "You are Fail.";
    
    echo "</td>";

    echo "</tr>";

}

echo "</table>";

echo "</center>";

?>
