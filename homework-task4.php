<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Task_4</title>
</head>
<body>
	
</body>
</html>

<?php

$kw = rand(0, 500);

$pay1=$kw*0.1;
$pay2=($kw-50)*0.15;
$pay3=($kw-150)*0.25;
$pay4=($kw-250)*0.35;


echo ' Консумирана електроенергия = ' . $kw . ' kWh';



if($kw <= 50) {
	echo '<p> Сметката ви за ток е ' .$pay1*1.2.' лв.</p>';
} elseif ($kw <= 150) {
	echo '<p> Сметката ви за ток е ' .($pay2+5)*1.2.' лв.</p>';
} elseif ($kw <= 250) {
	echo '<p> Сметката ви за ток е ' .($pay3+20)*1.2.' лв.</p>';
} else  {
	echo '<p> Сметката ви за ток е ' .($pay4+45)*1.2.' лв.</p>';
}