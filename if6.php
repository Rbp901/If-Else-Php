<?php 
$nama1=$_POST["nama1"];
$nama2=$_POST["nama2"];
$nama3=$_POST["nama3"];
$nama4=$_POST["nama4"];
$kel1=$_POST["kel1"];
$kel2=$_POST["kel2"];   
$kel3=$_POST["kel3"];
$kel4=$_POST["kel4"];


if ($kel1==0) {
	echo "<font color=blue>$nama1</font><br>";
}else{
	echo "<font color=red>$nama1</font><br>";
}

if ($kel2==0) {
	echo "<font color=blue>$nama2</font><br>";
}else{
	echo "<font color=red>$nama2</font><br>";
}

if ($kel3==0) {
	echo "<font color=blue>$nama3</font><br>";
}else{
	echo "<font color=red>$nama3</font><br>";
}

if ($kel4==0) {
	echo "<font color=blue>$nama4</font><br>";
}else{
	echo "<font color=red>$nama4</font><br>";
}
?>
