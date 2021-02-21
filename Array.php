Find the smallest number in an array without using any function

<?php
    $array = array(2,7,10,25,35,65);
    $count = count($array);
    $min = $array[0];
    for ($i=0; $i < $count; $i++) { 
        if($array[$i] < $min)
        {
            $min = $array[$i];
        }
    }
    echo "minmum value $min";
    //output 2
?>
---------------------------
Find the largest number in an array without using any function
<?php
    $array = array(2,7,10,25,35,65,80);
    $count = count($array);
    $max = $array[0];
    for ($i=0; $i < $count; $i++) { 
        if($array[$i] > $max)
        {
            $max = $array[$i];
        }
    }
    echo "maximum value $max";
    //output 80
?>
----------------------------
Remove Duplicate Value

$ary=[89,74,89,2,5,2,2];
$ary1=array();
foreach($ary as $v)
{
	foreach($ary1 as $v1)
	{
		if($v==$v1)
		{
			continue 2;
		}
	}
	$ary1[]=$v;
}
echo "<pre>";
print_r($ary1);

or

$ary=[89,74,89,2,5,2,2];
$ary1=array();
foreach($ary as $value)
{
	$ary1[$value]=$value;
}
echo "<pre>";
print_r($ary1);
?>
----------------------
show only duplicate values from an array without built-in function PHP.

<?php
$arr = array(8,9,10,3,4,8,7,9,11,3);
foreach($arr as $key => $val)
{
  unset($arr[$key]); 
  if (in_array($val,$arr))
  {
    echo $val . ",";
  }
}
 // ouput 8,9,3
?>

How to string count without function:-
<?php
$str="hello";
$i=0;
while(@$str[$i]!="")
{
	$i++;
}
echo $i;
?>
------------------------
Array some with specific value
<?php
function subArraySum($arr, $n, $sum) 
{ 
for($i=0;$i<=$n;$i++)
{
	$cur_sum=$arr[$i];
	for($j=$i+1;$j<=$n;$j++)
	{
		if($cur_sum==$sum)
		{
			echo $i," ",$j-1;
			return 1;
		}
		if($cur_sum > $sum || $j==$n)
			break;
		$cur_sum=$cur_sum+$arr[$j];
	}
}
  
echo "No subarray found"; 
return 0; 
} 

$arr= array(15, 2, 4, 8, 9, 5, 10, 23); 
$n = count($arr); 
$sum = 23; 
subArraySum($arr, $n, $sum); 
return 0;
?>
-----------------------
json_encode:-

array ko json me convert karta hai
$arr=["a"=>"ram","b"=>"tej","c"=>"jay"];
echo json_encode($arr);
output:-
{"a":"ram","b":"tej","c":"jay"}




json_decode:-

json ko array me convert karta hai
$json_string=my.json;
$jsondata=file_get_contents($json_string);
$ary=json_decode($jsondata);
---------------------
how to Delete a element in array
<?php
$ary=["ram","jay","tej"];
unset($ary[1]);
echo "<pre>";
print_r($ary);
?>
---------------------
ount:-
<?php
$ary=[
	[78,74,89],
	[44,55,66],
	[88,99,11]
];
 echo $count=count($ary,1);
?>
OutPut :-12
------------------


Array Sum :
$array=array(9,5,8,2,6);
$sum=0;
foreach($array as $x)
{
	$sum=$x+$sum;
}
echo $sum;
------------------------
Array Reverse : -
$array = array(1, 2, 3, 4);
$count = count($array);

for($i=$count-1; $i>=0; $i--)
{
  echo $array[$i];
}
-----------------------
String Reverse : -
$word = "Test"; 
$size = strlen($word);
for($i=$size-1;$i>=0;$i--)
{
    echo $word[$i];
}
-----------------------
//Array Short Without function
$array=array(9,3,8,2,5,7,1,4);
$count=count($array);
for($i=0;$i<$count;$i++)
{
	for($j=$i+1;$j<$count;$j++)
	{
		if($array[$i]<$array[$j])
		{
			$temp=$array[$i];
			$array[$i]=$array[$j];
			$array[$j]=$temp;
		}
	}
}
echo "<pre>";
print_r($array);
-------------------------
Impload:-
Array ko String Me convert Karta hai
$record=array("one","two","three","four");
$str=implode(",",$record);
echo $str;
OutPut:- one,two,three,four

Explode:-
String Ki array Me convert karta hai 
$record=array("one","two","three","four");
$str=implode(",",$record);
//Now Again Convert in Array
$ecp=ecplode(",",$str);
echo $ecp;
OutPut:-
---------------------------

Multidimensional or Nested Array:-
<?php
$emp=[
    array(1,"ram",20),
    array(2,"raj",23),
    array(1,"yes",10),
    array(1,"tej",30)
];

for($i=0;$i<3;$i++)
{
  for($j=0;$j<3;$j++)
  {
      echo $emp[$i][$j];
  }
  echo "<br>";
}
?>
---------------------------
Second method of multidimensional array print :-
<?php
$emp=[
   array(1,"ram",20),
   array(2,"raj",23),
   array(3,"yes",10),
   array(4,"tej",30)
];
foreach($emp as $v1)
{
  foreach($v1 as $row)
  {
      echo $row." ";
  }
  echo "<br>";
}
?>
--------------------------
Multidimensional array in  Associative array
<?php
$marks=[
   "ram"=>["phy"=>85,"che"=>90],
   "raj"=>["phy"=>80,"che"=>40],
   "yes"=>["phy"=>70,"che"=>60],
   "tej"=>["phy"=>75,"che"=>95]
];
foreach($marks as $key => $v1)
{
  echo $key;
  foreach($v1 as $v2)
  {
      echo $v2;
  }
  echo "<br>";
}
?> 
OutPut:-
Ram 85 90
raj 80 40
yes 70 60
tej 75 95
-------------------------
Write a program to make a chess


<?php
for ($rows=1; $rows < 8 ; $rows++) { 
    echo '<tr>';
    for ($colum=1; $colum < 8; $colum++) { 
        $total = $rows + $colum;
        if($total % 2 ==0)
        {
            echo "<td width='40' height='40' bgcolor='#FFFFF'></td>";
        }
        else
        {
            echo "<td width='40' height='40' bgcolor='#00000'></td>";
        }
    }
    echo '</tr>';
 } 
?>
----------------------------------









What is array
PHP Array is a special type of variable that stores multiple values in a single variable. There are 3 types of array available in PHP they are

1 Indexed arrays
2 Associative arrays
3 Multidimensional arrays

----------------------------
How to get number of elements in array

Count
----------------------------
How to create an array from string

Explode()
----------------------------
How to delete element from array

Unset()
----------------------------
PHP functions for Sorting Arrays are

sort(): Used for sorting arrays in ascending order.

rsort(): used for sorting arrays in descending order

asort(): used to sort associative arrays in ascending order, by value

ksort(): used to sort associative arrays in ascending order, by key

arsort(): used to sort associative arrays in descending order, by value

krsort(): used sort associative arrays in descending order, by key
------------------------------

How to convert json string to array

Json_encode()
------------------------------
Array_rand

array_rand() function is used to get random value from PHP array
-------------------------------
How do you remove duplicates from an array?

Array_unique()
-------------------------------
array_pop()

It is used to delete or remove the last element of an array
------------------------------
array_push()

It is used to Insert one or more elements to the end of an array
------------------------------
What is the use of array_count_values() in php?

It is used to count all the values inside an array
------------------------------
How to get total number of elements used in array?

We can use the count() or sizeof()
-------------------------------
How to get specific key value from array in php

array_key_exists()
--------------------------------
How to insert an new array element in array?

$ary1= array( 'ram', 'sita', 'luxman', 'hanuman', 'ravan' );

$ary2 = array( 'kansh' );

array_splice( $ary1, 3, 0, $ary2);

// OUTPUT is ram sita luxman hanuman kansh ravan
----------------------------------
array_search()

array_search() is a inbuilt function of PHP which is used to search a particular value in an array and if the value is found then it returns its key.
-----------------------------------
How to check a variable is array or not in php?

We can check a variable with the help of is_array() function in PHP

$var = array('X','Y','Z');

if (is_array($var))

echo 'It is an array.';

else

echo 'It is not an array.'
--------------------------
How to get second last element of array in php?

$array = array(5,6,70,10,36,2);

echo $array[count($array) -2]; 
// OUTPUT : 36
--------------------------
Foreach:-
<?php
$ary=array(10,20,30);
foreach($ary as $value)
{
        echo $value;
}
?>
OutPut:- 10 20 30
------------------------
Foreach loop in associative loop
<?php
$age=array("ram"=>20,"raj"=>25,"yes"=>10);
foreach($age as $key => $value)
{
    echo $key ."=>". $value."<br>";
}
?>
Output:-
ram=>20
raj=>25
yes=>10

------------------------
Count and sizeof :- 
Both same task perform
Count:-
$ary=["ram","raj","tej"];
echo $count=count($ary);

Multidimensional array count :-
<?php
$ary=[
  ["f1","f2","f3"],
  ["s1","s2","s3"]	
];
echo $count=count($ary);
//output:- 2
?>


<?php
$ary=[
  ["f1","f2","f3"],
  ["s1","s2","s3"]	
];
echo $count=count($ary,1);
//output:- 8
?>

<?php
$ary=[
  "ary1"=>["f1","f2","f3"],
  "ary2"=>["s1","s2","s3"]
];
echo $count=count($ary,1);
//output:-8
?>
-----------------------------

in_array :- 
Use for search element in array
Always return 1/0
<?php
$ary=["ram","raj","tej","yes"];
$b=in_array("tej",$ary);
echo $b;
//output:-1
?>

----------------------------
Array_search :- 
<?php
//always index value or key
$ary=["ram","raj","tej","yes"];
$b=array_search("tej",$ary);
echo $b;
//output:- 2
?>
----------------------
Array_pop:-
Remove last value
----------------------
Array_push:-
Add value in last position
----------------------
Array_shift:-
Remove first value
----------------------
Array_unshift:-
Add element in first position
----------------------
Array_slice:-
Array value ko nikalne ke liye
----------------------
Array_mearge:-
Array ko aapas me merge karta hai
----------------------
Array_combine:-
One array ko key or second array ko uska value banata hai
------------------------
Array_splice:-
Replace element in array in any position
Remove element in array in any position
//replace value
<?php
$ary=["ram","tej","raj","tom"];
$ary1=["jack","rain"];
$b=array_splice($ary,1,2,$ary1);
echo "<pre>";
print_r($b);
//output:- tej raj
?>

//value remove
<?php
$ary=["ram","tej","raj","tom"];
array_splice($ary,2);
//position 2 ke bad ke sare element ko delete kar dega
echo "<pre>";
print_r($ary);
//output:- ram tej
?>
--------------------------
Array_key :-
(1)	Array_keys()
(2)	Array_key_first
(3)	Array_key_last()
(4)	Array_key_exists
(5)	Key_exixts
//4 and 5 are same

---------------------
Array_intersect:-
Couman (Match)  value show karta hai
(1)	Array_intersect
//only value
(2)	Array_intersect_key
//only key
(3)	Array_intersect_assoc
//Both(Key and value)

-------------------------
Array_diff :-
//different value ko show karta hai
(1)	Array_diff
(2)	Array_diff_key
(3)	Array_diff_assoc

-------------------------
Array_unique:-
Show unique value in one array
-----------------------
Array_value
Array value show karta hai
-----------------------
Array_column:-
Support latest verson
<?php
//name ka total value show karega
$ary=[
 ["id"=>1,"name"=>"raj","age"=>29],	
 ["id"=>2,"name"=>"tej","age"=>39],	
 ["id"=>3,"name"=>"jon","age"=>20]	
];
$b=array_column($ary,'name');
print_r($b);
//output:- raj,tej,jon
?>
------------------------------

Array_chunk:-
Array value ko pair me show karta hai
$a=["f1","f2","f3","f4","f5"];
$b=array_chunk($a, 2);
print_r($b);
------------------------------
Array_flip:-
Key and value ko aapas me swap karta hai
--------------------------------
Array_fill
<?php
$a=array_fill(2, 3, "test");
print_r($a);
?>
//output:-
Array([2]=>test[3]=>test [4]=>test)
---------------------------------
Array_fill_keys:-
<?php
$a=["a","b","c"];
$b=array_fill_keys($a, "test");
print_r($b);
?>
Output:-
Array ([a]=>test[b]=>test[c]=>test)
---------------------------------
Array_rand:-
Random index show karta hai.
<?php
$a=["a","b","c"];
$b=array_rand($a);
print_r($b);
?>
---------------------------------
Shuffle :-
Array ka value hamesa shuffle hota hai
<?php
$a=["a","b","c"];
shuffle($a);
print_r($a);
?>
----------------------------------
Array sort:-
(1)	Sort :-
Index array sort by  value Asc form
(2)	Rsort :- 
Index array sort by value in Desc form
(3)	Asort 
//associative array sort by value asc form
(4)	Arsort
//associative array sort by value DESC form
(5)	Ksort  
(6)	Krsort
(7)	Natsort:-
$a=[“img4”,”img1”,”img5”];
Natsort($a);
(8)	Array_multisort
Two array ko ek sath sort karta hai but one condition , dono array ka length same hona chahiye
<?php
$a=["a","b"];
$b=["f1","f2"];
echo "<pre>";
array_multisort($a,$b);
print_r($a);
print_r($b);
?>
(9)	Array_reverse
//array ko last se start karta hai
---------------------------------

Traversing function :-
(1)	Next
(2)	Prev
(3)	End :- last value
(4)	Each :-
(5)	Pos :- first value
(6)	Current :- first value
(7)	Key :- first index
(8)	reset
------------------------------
extract :- 
<?php
//key ko variable me convert karta hai
$ary=["a"=>"f1","b"=>"f2"];
extract($ary);
echo $a;//f1
echo $b;//f2
?>
---------------------------------
compact :- 
<?php
//variable ko associatiave array me convert karta hai
$a="f1";
$b="f2";
$c="f3";
$ary=compact("a","b","c");
print_r($ary);
//output:-
// Array ( [a] => f1 [b] => f2 [c] => f3 )
?>
------------------------------------
Foreach loop with list :-
Multidimensional array ko print karne ke liye ek hi loop ka use karna parta hai isme.
Latest version support
<?php
$ary=[
  [10,20],
  [30,40],
  [50,60]
];
foreach($ary as list($a,$b))
{
  echo $a.$b;
}
?>



list
list always work on index array or associative array with numeric key
<?php
$ary=["f1","f2","f3"];
//old style
$a=$ary[0];
$a=$ary[1];
$a=$ary[2];

//with list
list($a,$b,$c)=$ary;
echo $a;
echo $b;
echo $c;
?>
--------------------------------
Array some with specific value
<?php
function subArraySum($arr, $n, $sum) 
{ 
for($i=0;$i<=$n;$i++)
{
	$cur_sum=$arr[$i];
	for($j=$i+1;$j<=$n;$j++)
	{
		if($cur_sum==$sum)
		{
			echo $i," ",$j-1;
			return 1;
		}
		if($cur_sum > $sum || $j==$n)
			break;
		$cur_sum=$cur_sum+$arr[$j];
	}
}
  
echo "No subarray found"; 
return 0; 
} 

$arr= array(15, 2, 4, 8, 9, 5, 10, 23); 
$n = count($arr); 
$sum = 23; 
subArraySum($arr, $n, $sum); 
return 0;
?>
