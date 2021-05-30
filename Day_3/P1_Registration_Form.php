<?php

echo "<center>";

echo "<form method='post' action='P1_Registration_Form_Data_Display.php'>";

echo "<table style='width: 50%; border: 1px solid black; background-color: lightpink;'>";

echo "<tr><h1>Registration Form</h1></tr>";

echo "<tr style='padding: 2px;'>";

echo "<td style='font-weight: bold; padding: 2px;'>";

echo "First Name :";

echo "</td>";

echo "<td style='padding: 2px;'>";

echo "<input type='text' name='fname' placeholder='Enter First Name...' required/>";

echo "</td>";

echo "</tr>";

echo "<tr style='padding: 2px;'>";

echo "<td style='font-weight: bold; padding: 2px;'>";

echo "Middle Name :";

echo "</td>";

echo "<td style='padding: 2px;'>";

echo "<input type='text' name='mname' placeholder='Enter Middle Name...' required/>";

echo "</td>";

echo "</tr>";

echo "<tr style='padding: 2px;'>";

echo "<td style='font-weight: bold; padding: 2px;'>";

echo "Last Name :";

echo "</td>";

echo "<td style='padding: 2px;'>";

echo "<input type='text' name='lname' placeholder='Enter Last Name...' required/>";

echo "</td>";

echo "</tr>";

echo "<tr style='padding: 2px;'>";

echo "<td style='font-weight: bold; padding: 2px;'>";

echo "Age :";

echo "</td>";

echo "<td style='padding: 2px;'>";

echo "<input type='number' name='age' placeholder='Enter Age...' required/>";

echo "</td>";

echo "</tr>";

echo "<tr style='padding: 2px;'>";

echo "<td style='font-weight: bold; padding: 2px;'>";

echo "Mobile Number :";

echo "</td>";

echo "<td style='padding: 2px;'>";

echo "<input type='number' name='mobilenumber' placeholder='Enter Mobile Number...' required/>";

echo "</td>";

echo "</tr>";

echo "<tr style='padding: 2px;'>";

echo "<td style='font-weight: bold; padding: 2px;'>";

echo "Email ID :";

echo "</td>";

echo "<td style='padding: 2px;'>";

echo "<input type='email' name='email' placeholder='Enter Email ID...' required/>";

echo "</td>";

echo "</tr>";

echo "</table>";

echo "<tr><input type='submit'/></tr>";

echo "<tr><input type='reset'/></tr>";

echo "</form>";

echo "</center>";

?>
