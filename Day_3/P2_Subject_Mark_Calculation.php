<?php

echo "<center>";

echo "<form method='post' action='P2_Subject_Mark_Calculation_Data_Display.php'>";

echo "<table style='width: 50%; border: 1px solid black; background-color: lightpink;'>";

echo "<tr><h1>Subject Mark Calculation Form</h1></tr>";

echo "<tr style='padding: 2px;'>";

echo "<td style='font-weight: bold; padding: 2px;'>";

echo "Science & Technology :";

echo "</td>";

echo "<td style='padding: 2px;'>";

echo "<input type='number' name='mark1' placeholder='Enter Mark...' required/>";

echo "</td>";

echo "</tr>";

echo "<tr style='padding: 2px;'>";

echo "<td style='font-weight: bold; padding: 2px;'>";

echo "Social Science :";

echo "</td>";

echo "<td style='padding: 2px;'>";

echo "<input type='number' name='mark2' placeholder='Enter Mark...' required/>";

echo "</td>";

echo "</tr>";

echo "<tr style='padding: 2px;'>";

echo "<td style='font-weight: bold; padding: 2px;'>";

echo "Mathematics :";

echo "</td>";

echo "<td style='padding: 2px;'>";

echo "<input type='number' name='mark3' placeholder='Enter Mark...' required/>";

echo "</td>";

echo "</tr>";

echo "<tr style='padding: 2px;'>";

echo "<td style='font-weight: bold; padding: 2px;'>";

echo "English :";

echo "</td>";

echo "<td style='padding: 2px;'>";

echo "<input type='number' name='mark4' placeholder='Enter Mark...' required/>";

echo "</td>";

echo "</tr>";

echo "<tr style='padding: 2px;'>";

echo "<td style='font-weight: bold; padding: 2px;'>";

echo "Gujarati :";

echo "</td>";

echo "<td style='padding: 2px;'>";

echo "<input type='number' name='mark5' placeholder='Enter Mark...' required/>";

echo "</td>";

echo "</tr>";

echo "</table>";

echo "<tr><input type='submit'/></tr>";

echo "<tr><input type='reset'/></tr>";

echo "</form>";

echo "</center>";

?>
