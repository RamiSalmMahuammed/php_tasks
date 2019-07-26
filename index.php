// PHP tasks
// Task1
 j
sol:-
<?php
$num1 = 7;
$num2 = 8;
echo$num1+=$num2;  // 7+8=15
---------------------------------------------------------------------
// Task 2 
//الاجابة على الاسئلة التالية 

for ( $j = 0;  $j <  5; $j++ ){
  echo $j . " ";
}//ماهو ناتج الطباعة
a) 0 1 2 3 4 5
b) 0 1 2 3 4  <--
c) 0 1 2 3 4 5
d) j j j j j
ans:-b
//
for ( $j = 5;  $j > -5; $j-- )
  echo $j . " " ;
//ماهو ناتج الطباعة
a) -5 -4 -3 -2 -1 0
b) 5 4 3 2 1 0
c) 5 4 3 2 1 0 -1 -2 -3 -4 -5
d) 5 4 3 2 1 0 -1 -2 -3 -4
ans:-d
-------------------------------------------------------------------
// Task 3
sol:-
<?php
$arr = array(12,26,34,28,19,37,9);
$max_arr=max($arr);
$min_arr=min($arr);
echo$max_arr;
echo"<br>";
echo$min_arr;
echo"<br>";
$sum=max($arr)+min($arr);
echo$sum;
?>

// Task 4
sol:-
<?php
$arr = array("php","java","html","css","python","json");
echo$arr[2];
echo"<br>";
echo$arr[3];
?>
------------------------------------------------ 
sol:-
<?php
$str = "compare betwen php and another lang java";
echo$str."<br>";
$str2=str_replace("php","java",$sre);
echo$str2;
?>
