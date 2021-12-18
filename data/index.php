<h1>Products</h1>

<?php
include ('readProducts.php');
$delimiter = ","; 
$content   = file('products.txt'); 

echo "<table>\n"; 
foreach ($content as $row) { 
	echo "\t<tr>\n"; 
	$cells = explode($delimiter, $row); 
	foreach ($cells as $cell) { 
		echo sprintf("\t\t<td>%s</td>\n", $cell); 
	} 
	echo "\t</tr>\n"; 
}
echo "</table>\n";
?>