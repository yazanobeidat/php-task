
<!-- 1 -->
<?php
function IsPrime($n)
{
for($x=2; $x<$n; $x++)
{
    if($n %$x ==0)
	{
		return 0;
	}
    }
return 1;
}
$a = IsPrime(3);
if ($a==0)
echo 'This is not a Prime Number.....'."\n";
else
echo '3 is a prime number'."\n";
?>

<br>

<!-- 2 -->
<?php
function Reverse($str){
    return strrev($str);
}

$str = "remove";
echo Reverse($str)
?>

<!-- 3 -->

<br>

<?php
function is_str_lowercase($str1)
{
    for ($i = 0; $i < strlen($str1); $i++) {
        if (ord($str1[$i]) >= ord('A') &&
        ord($str1[$i]) <= ord('Z')) {
    echo "your string is ok";
        }
        }
    echo"your string is ok";
    }
is_str_lowercase('abc def ghi');

?>

<!-- 4 -->

<br>

<?php
function swap($x, $y) {
  echo "Before Swap.\n";
  echo "x = $x \n";
  echo "y = $y \n";

 
  $x = $x ^ $y;
  $y = $x ^ $y;
  $x = $x ^ $y;

  echo "After Swap.\n";
  echo "x = $x \n";
  echo "y = $y \n";
}

echo swap(10, 25);
?>

<br>

<!-- 6 -->
<?php  
$num=407;  
$total=0;  
$x=$num;  
while($x!=0)  
{  
$rem=$x%10;  
$total=$total+$rem*$rem*$rem;  
$x=$x/10;  
}  
if($num==$total)  
{  
echo "407 is Armstrong number";  
}  
else  
{  
echo "No it is not an armstrong number";  
}  
?>  

<!-- 7 -->

<br>

<?php
function Palindrome($number){ 
    $temp = $number; 
    $new = 0; 
    while (floor($temp)) { 
        $d = $temp % 10; 
        $new = $new * 10 + $d; 
        $temp = $temp/10; 
    } 
    if ($new == $number){ 
        return 1; 
    }
    else{
        return 0;
    }
} 

$original = 1441;
if (Palindrome($original)){ 
    echo " Yes it is a Palindrome"; 
}
else { 
echo "Not a Palindrome"; 
}

?> 

<!-- 8 -->

<br>

<?php
function remove_duplicates($list1) {
$nums_unique = array_values(array_unique($list1));
return $nums_unique ;
}
$nums = array(2,4,7,4,8);
print_r(remove_duplicates($nums));
?>

<!-- logical -->
<br>

<!-- 1 -->

<?php  
$year = 2013;  

if((0 == $year % 4) & (0 != $year % 100) | (0 == $year % 400))
{
echo "$year is a Leap Year.";    
}

else  
{  
echo "$year is not a Leap Year.";    
}
?> 

<!-- 2 -->

<br>

<?php
$temp = 27;

if ($temp > "20") {
    echo "It is summertime!";
  }
  ?>

<!-- 3 -->
<br>

<?php
function test($x, $y) 
{
    return $x == $y ? ($x + $y)*3 : $x + $y;
}

echo test(2 , 2)."\n";
echo "its summer time"   
?>

<!-- 4 -->


<?php

function test3($f, $sc) 
{
    return $f + $sc ==30 ? ($f + $sc) :  false;
}
echo test3(10, 10);
?>


<br>
<!-- 5 -->

<?php
function titg($num) 
{
   return $num % 3 == 0 || $num % 7 == 0;
}

var_dump(titg(20));
?>

<br>

<!-- 6 -->

<?php
function test2($x, $y) 
{
   return ($x <= 20 || $y >= 50) || ($y <= 20 || $x >= 50);
}

var_dump(test2(10, 40));
var_dump(test2(20, 50));
?>


<!-- 7 -->

<br>
<?php
function largest($x, $y, $z) {
  $max = $x;

  if ($x >= $y && $x >= $z)
    $max = $x;
  if ($y >= $x && $y >= $z)
    $max = $y;
  if ($z >= $x && $z >= $y)
    $max = $z;
  
	echo "Largest number is: $max\n";
}

largest(1, 5,9);
?>


<!-- 8 -->




<!-- 9 -->
<br>
<?php
class MyCalculator {
private $_fval, $_sval;
public function __construct( $fval, $sval ) {
$this->_fval = $fval;
$this->_sval = $sval;
}
public function add() {
return $this->_fval + $this->_sval;
}
public function subtract() {
return $this->_fval - $this->_sval;
}
public function multiply() {
return $this->_fval * $this->_sval;
}
public function divide() {
return $this->_fval / $this->_sval;
}
}
$mycalc = new MyCalculator(12, 6); 
echo $mycalc-> add()."\n"; // Displays 18 
echo $mycalc-> multiply()."\n"; // Displays 72
echo $mycalc-> subtract()."\n"; // Displays 6
echo $mycalc-> divide()."\n"; // Displays 2
?>

<!-- 10 -->
<br>

<?php
function check_vote() 
{
    $age = 15;
    if ($age >= 18) {
        echo  " you Are Eligible For Vote";
    } else {
        echo  " you are not eligible for vote. ";
    }
}
check_vote(); 

?>

<!-- 11 -->

<br>

<?php
$number = -60; // enter any number of your choice here
if ($number > 0) // condition for positive numbers
{
    echo $number . " is a positive number";
} else if ($number < 0) // condition for negative number
{
    echo $number . " is a negative number ";
} else if ($number == 0) // condition for zero
{
    echo "You have entered zero";
} else {
    echo " please enter a numeric value";
}
?>

<!-- 12 -->

<br>

<?php

// These are the marks of nine subjects
$sub_1 = 60;
$sub_2 = 86;
$sub_3 = 95;
$sub_4 = 63;
$sub_5 = 55;
$sub_6 = 74;
$sub_7 = 79;
$sub_8 = 62;
$sub_9 = 50;


$total = NULL;
$average = NULL;
$grade = NULL;

$total = $sub_1 + $sub_2 + $sub_3 + $sub_4 + $sub_5 + $sub_6 + $sub_7 + $sub_8 + $sub_9;
$average = $total / 9.0;

if ($average >= 90)
    $grade = "A";
else if ($average >= 80 && $average < 90)
    $grade = "B";
else if ($average >= 70 && $average < 80)
    $grade = "C";
else if ($average >= 60 && $average < 70)
    $grade = "D";
else
    $grade = "E";

// It will print the final output
echo "The Grade= '" . $grade . "'\n";

?>
