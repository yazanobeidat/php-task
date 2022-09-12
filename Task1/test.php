
<!-- 1 -->

<?php

$str = "hello";
echo strtoupper($str);

?>

<br>

<?php
$str = "HELLO";
echo strtolower($str);
?>

<br>

<?php
$str = "color";
echo ucfirst($str);
?>
<br>
<?php
$str = "hi ahmad how are you";
echo ucwords($str);
?>

<br>
<!-- 2 -->
<?php
$str= "085119"; 
echo substr(chunk_split($str, 2, ':'), 0, -1);
?>

<br>
<!-- 3 -->
<?php
$str = "I am a full stack developer at orange coding acadimy";
if (strpos($str,"orange") !== false) 
{
echo "Word found";
}
else
{
echo "The specific word is not present";
}
?>

<br>
<!-- 4 -->
<?php
$path = "www.orange.com/index.php";
$file_name = substr(strrchr($path, "/"), 1);
echo $file_name; 
?>

<br>
<!-- 5 -->
<?php
$mailid  = "info@orange.com";
$user = strstr($mailid, "@", true);
echo $user;
?>

<br>
<!-- 6 -->
<?php
$str = "info@orange.com";
echo substr($str, -3);
?>

<br>
<!-- 7 -->
<?php
function password_generate($chars) 
{
$data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
return substr(str_shuffle($data), 0, $chars);
}
echo password_generate(7);
?>

<br>
<!-- 8 -->
<?php
$str = "That new trainee is so genius";
echo preg_replace('/That/', 'Our', $str, 1); 
?>

<br>
<!-- 9 -->
<?php
$str1 = 'dragonball';
$str2 = 'dragonboll';
$str_pos = strspn($str1 ^ $str2, "\0");
printf('First difference between two strings at position %d: "%s" vs "%s"',
$str_pos, $str1[$str_pos], $str2[$str_pos]);
?>


<!-- 10 -->






<br>

<!-- 11 -->

<?php
$cha = 'a';
$next_cha = ++$cha; 
//The following if condition prevent you to go beyond 'z' or 'Z' and will reset to 'a' or 'A'
if (strlen($next_cha) > 1) 
{
$next_cha = $next_cha[0];
}
echo $next_cha;
?>

<br>
<!-- 12 -->

<?php
$original_string = 'The brown fox';
$string_to_insert ='quick';
$insert_pos = 4;
$new_string = substr_replace($original_string, $string_to_insert.' ', $insert_pos, 0);
echo $new_string;
?>

<br>


<?php
$s = 'The quick brown fox';
$arr1 = explode(' ',trim($s));
echo $arr1[0];
?>

<br>

<!-- 13 -->
<?php
$x = '000065722.24';
$str1 = ltrim($x, '0');
echo $str1;
?>

<br>

<!-- 14 -->
<?php
$my_str = 'The quick brown fox jumps over the lazy dog';
echo str_replace("fox", " ", $my_str);
?>

<br>

<!-- 15 -->
<?php
$my_str = 'The quick brown fox jumps over the lazy dog---';
echo rtrim($my_str, '-');
?>

<br>

<!-- 16 -->
<?php
$my_str = '\"\1+2/3*2:2-3/4*3';
echo str_replace(str_split('\\/:*?"<>|+-'), '', $my_str);
?>

<br>

<!-- 17 -->

<?php
$my_string = 'The quick brown fox jumps over the lazy dog';
echo implode(' ', array_slice(explode(' ', $my_string), 0, 5));
?>

<br>
<!-- 18 -->

<?php
$str = "2,543.12";
$x = str_replace( ',', '', $str);
echo $x;
?>

<br>

<!-- 19 -->

<?php
for ($x = ord('a'); $x <= ord('z'); $x++)
echo chr($x);
?>

<!-- ------------------------------------------------------------------------------------------------------------------------------------- -->
<!-- PHP Functions - Returning values -->
<br>

<?php 
function sum(int $x, int $y) {
$z = $x + $y;
return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);
?>


<br>

<!-- PHP Functions -->
<?php
function writeMsg() {
  echo "Hello world!";
}

writeMsg(); // call the function
?>


<br>

<!-- Generic Functions -->



<?php

class Foo
{
    public function printItem($string)
    {
        echo 'Foo: ' . $string . PHP_EOL;
    }
    
    public function printPHP()
    {
        echo 'PHP is great.' . PHP_EOL;
    }
}

class Bar extends Foo
{
    public function printItem($string)
    {
        echo 'Bar: ' . $string . PHP_EOL;
    }
}

$foo = new Foo();
$bar = new Bar();
$foo->printItem('baz'); // Output: 'Foo: baz'
$foo->printPHP();       // Output: 'PHP is great' 
$bar->printItem('baz'); // Output: 'Bar: baz'
$bar->printPHP();       // Output: 'PHP is great'

?>

<br>

<!-- Dump Fun parameter sctions -->


<?php

$e = array(32, "Hello world!", 32.5, array("red", "green", "blue"));
echo var_dump($e) . "<br>";

?>