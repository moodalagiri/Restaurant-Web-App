<?php
$file = fopen("test.txt",'r');
echo "<table border=1 width=30%><tr><th>Name </th><th>Email</th><th>Contact Number</th></tr>";
while (!feof($file))
{
    $line = trim(fgets($file));
    if ($line)
    {
    	$array = explode(";",$line);
    	echo "<tr>";
    	for($x = 0; $x <count($array) ; $x++){    	
        echo "<td>".$array[$x]."</td>";
        }
        echo "</tr>";
    }
}
echo "</table>";
fclose($file);
?>