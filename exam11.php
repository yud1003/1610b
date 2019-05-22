<?php 

$str = "student. a am I";
 function	ReverseSentence($str){

 	$newStr = explode(" ",$str);

 	$arr = array_reverse($newStr);

 	$newStrs = implode(" ", $arr);

 	print_r($newStrs);
 }


ReverseSentence($str);


 ?>