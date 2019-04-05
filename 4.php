<?php
$salaries=array("James"=>1000,"Vergis"=>5000,"Joe"=>4300);
echo "Salary of Vergis is:".$salaries["Vergis"];
$salaries["sachin"]=25000;
echo "</br>";
foreach($salaries as $x=>$x_value){
echo "Name :".$x.",Salary :".$x_value;
echo "</br>";
}
?>
