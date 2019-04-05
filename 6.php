 <?php
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
$arrlength = count($numbers);
echo "Normal Sorting:";
echo "<br>";
for($x = 0; $x < $arrlength; $x++) {
    echo $numbers[$x];
    echo "<br>";
}
$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);
$clength = count($cars);
echo "Reverse Sorting:";
echo "<br>";
for($x = 0; $x < $clength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);
echo "aSort:";
echo "<br>";
foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);
echo "kSort:";
echo "<br>";
foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);
echo "arSort:";
echo "<br>";
foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);
echo "krSort:";
echo "<br>";
foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?> 
