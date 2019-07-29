<?php

//task1
$num1 = 7;
$num2 = 8;
echo $num1 + $num2;
echo "<br>";

$num1 = 7;
$num2 = 8;
echo $num1 - $num2;
echo "<br>";


//task2 answer is b
for($j = 0 ; $j < 5; $j++){
  echo $j. "<br>";
}

b) 0 1 2 3 4

/////////////////////////////////



//task 3 answer is d

for($j = 5 ; $j > -5; $j--){
  echo $j. "<br>";
}

d) 5 4 3 2 1 0 -1 -2 -3 -4
<?php
// Task (3)
function getMax($array)
{
   $n = count($array);
   $max = $array[0];
   for ($i = 1; $i < $n; $i++)
       if ($max < $array[$i])
           $max = $array[$i];
    return $max;
}
echo "<br>";

function getMin($array)
{
   $n = count($array);
   $min = $array[0];
   for ($i = 1; $i < $n; $i++)
       if ($min > $array[$i])
           $min = $array[$i];
    return $min;

}

$array = array(12,26,34,28,19,37,9);
echo(getMax($array));
echo "<br>";
echo(getMin($array));
echo "<br>";
echo (getMax($array)) + (getMin($array));
echo "<br>","<br>","<br>";

// Task(4)
$str = array("php","java","html","CSS","python","json");
$arr = array (0,1,2,3,4,5);
echo $str[3];
echo "<br>","<br>","<br>";

// Task(5)
$str = "compare between php and another lang java";
echo $str."<br>";

$str2 = str_replace("php","java",$str);
echo $str2."<br>";

$str3 = str_replace("java","php",$str);
echo $str3;
