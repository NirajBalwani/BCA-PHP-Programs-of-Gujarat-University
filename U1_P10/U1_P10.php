<?php
//program 10
//count how much number appear in array..

$a1=array(1,3,4,6,'2',1,'2',10,'2','2');
$len=count($a1);

$len1=count(array_keys($a1,2));
echo "Original Array :- ";
for($i=0;$i<$len;$i++)
{
	echo $a1[$i]." ";
}
echo "<br><br>"."2 is appearing $len1 times..";
echo "<br><br><br>";

?>

<?php

	$a2 = array(2,2,4,5,8,5,9,8,2,4,6,7,'2','4','5',"9");

	$value= "5";
	$count = 0;

	echo "Original Array :- ";
	foreach ($a2 as $item){
		echo $item." ";
		if ($value == $item){
			$count++;
		}
	}

	echo "<br><br> The value $value appears $count times in the array.";

?>