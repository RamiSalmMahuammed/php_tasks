// PHP tasks
// Task 1
<?php
$num1=7;
$num2=8;

echo" num1"."="."$num1" ." ". "<br>"."num2"."="."$num2";
echo "<br>". "<br>";
echo "num1+num2"."=";


echo "$num1+$num2"."=";

echo $num1+$num2;

echo "<br>". "<br>";
echo "num1-num2"."=";

echo "$num1-$num2"."=";

echo $num1-$num2;
echo "<br>". "<br>";
echo "num1*num2"."=";

echo "$num1*$num2"."=";

echo $num1*$num2;
// Task 2 
//الاجابة على الاسئلة التالية 

for ( $j = 0;  $j <  5; $j++ ){
  echo $j . " ";
}//ماهو ناتج الطباعة
a) 0 1 2 3 4 5
b) 0 1 2 3 4  <--
c) 0 1 2 3 4 5
d) j j j j j

ans\\a
/////////////////////////////////
for ( $j = 5;  $j > -5; $j-- )
  echo $j . " " ;
//ماهو ناتج الطباعة
a) -5 -4 -3 -2 -1 0
b) 5 4 3 2 1 0
c) 5 4 3 2 1 0 -1 -2 -3 -4 -5
d) 5 4 3 2 1 0 -1 -2 -3 -4

ans\\d
-------------------------------------------------------------------
// Task 3
قم بجمع اصغر واكبر رقم في المصفوفة arrayبأستخدام ما تعلمته حول موضوع ال
$arr = array(12,26,34,28,19,37,9);
<?php 
$arr = array(12,26,34,28,19,37,9);

     
     
     $E=(max(array(12,26,34,28,19,37,9))) ;
$f=(min(array(12,26,34,28,19,37,9)));
$h= $E+$f;
echo $h."<br>";
?>
// Task 4
قم بطباعة القيم الموجودة في منتصف المصفوفة arrayبأستخدام ما تعلمته حول موضوع ال
$arr = array("php","java","html","css","python","json");
echo $arr[2]."<br>";
echo $arr[3]."<br>";
-------------------------------------------------------------------
مع بعضهما "php" & "java"قم بتغير اماكن  الكلمات Stringبأستخدام ما تعلمته حول موضوع ال
$str = "compare betwen php and another lang java";
$str2=str_replace("php","java",$str);
echo $str2;
