<?php

$fname = $_POST['fname'];

$mname = $_POST['mname'];

$lname = $_POST['lname'];

$age = $_POST['age'];

$mobilenumber = $_POST['mobilenumber'];

$email = $_POST['email'];

echo "<center>";

echo "<table style='width: 50%; border: 1px solid black; background-color: lightpink;'>";

echo "<tr><h1>Registration Form Data</h1></tr>";

echo "<tr style='padding: 2px;'>";

echo "<td style='font-weight: bold; padding: 2px;'>";

echo "First Name :";

echo "</td>";

echo "<td style='padding: 2px;'>";

echo "$fname";

echo "</td>";

echo "</tr>";

echo "<tr style='padding: 2px;'>";

echo "<td style='font-weight: bold; padding: 2px;'>";

echo "Middle Name :";

echo "</td>";

echo "<td style='padding: 2px;'>";

echo "$mname";

echo "</td>";

echo "</tr>";

echo "<tr style='padding: 2px;'>";

echo "<td style='font-weight: bold; padding: 2px;'>";

echo "Last Name :";

echo "</td>";

echo "<td style='padding: 2px;'>";

echo "$lname";

echo "</td>";

echo "</tr>";

echo "<tr style='padding: 2px;'>";

echo "<td style='font-weight: bold; padding: 2px;'>";

echo "Age :";

echo "</td>";

echo "<td style='padding: 2px;'>";

echo "$age";

echo "</td>";

echo "</tr>";

echo "<tr style='padding: 2px;'>";

echo "<td style='font-weight: bold; padding: 2px;'>";

echo "Mobile Number :";

echo "</td>";

echo "<td style='padding: 2px;'>";

echo "$mobilenumber";

echo "</td>";

echo "</tr>";

echo "<tr style='padding: 2px;'>";

echo "<td style='font-weight: bold; padding: 2px;'>";

echo "Email ID :";

echo "</td>";

echo "<td style='padding: 2px;'>";

echo "$email";

echo "</td>";

echo "</tr>";

echo "</table>";

echo "</center>";

?>
