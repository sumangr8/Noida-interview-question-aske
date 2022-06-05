<?php 
// 2-D array
$ary=array(
	"0" => array("country"=>"india","language"=>"hindi"),
	"1" => array("country"=>"amerika","language"=>"english"),
	"2" => array("country"=>"france","language"=>"french"),
	"3" => array("country"=>"pakistan","language"=>"urdu"),
	"4" => array("country"=>"bangladesh","language"=>"bangla")
);



function multi_sort($a,$search)
{
	foreach ($a as $key => $v) 
	{
		$b[$key]=strtolower($v[$search]);
	}
	asort($b);
	foreach ($b as $key => $val) 
	{
		$c[]=$a[$key];
	}
	return $c;
}

echo "<pre>";
print_r($ary);   //without sort
echo "<hr>";
$ary2=multi_sort($ary,"country");
print_r($ary2);  //with sort


?>
