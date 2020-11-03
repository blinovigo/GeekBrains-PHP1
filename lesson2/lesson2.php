<?php

// Задание 1:

  $a = rand(-20,20);
  $b = rand(-20,20);
  
  echo "$a $b<br>";
  echo operation($a,$b);

  function operation ($x1 = 0,$x2 = 0) {
	if ($x1 >= 0 && $x2 >= 0) {
	  return $x1 - $x2;
	}
	else {
	  return ($x1 >= 0 xor $x2 >= 0) ? $x1 + $x2 : $x1 * $x2;
	}
	 
  }


// Задание 2: 

echo $a  = rand(0,15)."<br>";

  switch ($a) {
	case 15:
		echo "15 ";
	case 14:
		echo "14 ";
	case 13:
		echo "13 ";
	case 12:
		echo "12 ";
	case 11:
		echo "11 ";
	case 10:
		echo "10 ";
	case 9:
		echo "9 ";
	case 8:
		echo "8 ";
	case 7:
		echo "7 ";
	case 6:
		echo "6 ";
	case 5:
		echo "5 ";
	case 4:
		echo "4 ";
	case 3:
		echo "3 ";
	case 2:
		echo "2 ";
	case 1:
		echo "1 ";
  }

// Задание 3: 

function sum($a = 0, $b = 0) {
	return $a + $b;
}
function sub($a = 0, $b = 0) {
	return $a - $b;
}
function div($a = 0, $b = 1) {
	return ($b != 0) ? $a / $b : "Делить на ноль нельзя";
}
function mult($a = 0, $b = 1) {
	return $a * $b;
}

// Задание 4: 

function mathOperation($arg1, $arg2, $operation){
	switch ($operation){
		case sum :
			return $a + $b;
		case sub :
			return $a - $b;
		case div :
			return ($b != 0) ? $a / $b : "Делить на ноль нельзя";
		case mult :
			return $a * $b;
	}
}

// Задание 5: 
// Выполнил в файле index.php

?>