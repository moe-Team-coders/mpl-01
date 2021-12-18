<?php 


$products = array(
	"1,Watch +1,15,1.jpg",
	"1,Phone A10,150,2.jpg",
	"3,Laptop 2021,750,3.jpg",
	"4,Stickers,10,4.jpg",
    "3,Bag 55,30,5.jpg",
    "3,Wirless Mouse,15,6.jpg",
	"3,T-shirt,22,7.jpg"
);

$f = fopen('./products.txt','r') or die("Failed to open file");
//$data = fread($f,filesize('./data/users.txt'));
// read file line by line
while(!feof($f))
{
	$line = fgets($f);
	echo "<p>".$line."</p>";
}
include ('ProductClass.php');
$pro = array(
	new Product(1,"Watch +1",15,"1.jpg"),
	new Product(1,"Phone A10",150,"2.jpg"),
	new Product(3,"Laptop 2021",750,"3.jpg"),
	new Product(4,"Stickers",10,"4.jpg"),
	new Product(3,"Bag 55",30,"5.jpg"),
	new Product(3,"Wirless Mouse",15,"6.jpg"),
	new Product(3,"T-shirt",22,"7.jpg"),

   );

// close
fclose($f);
?>
 
