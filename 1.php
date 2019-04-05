<?php
$d=date("D");
$m=date("M");
$y=date("Y");
echo $d,$m,$y;
if($d=="Wed"){
	echo "Today is Wednesday!";
} elseif ($d=="Sun"){
	echo "Have a nice Sunday!";
} else {
	echo "Have a nice day!";
}
?>
