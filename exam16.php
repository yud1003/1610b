<?php 

/*
*
*Find($target, $array)  $target为要查找的整数，$array为满足要求的数组
如： $target = 7 
     $array=[[1,2,8,9],[2,4,9,12],[4,7,10,13],[6,8,11,15]]
Find($target,$array) 返回 true
*
*
*
**/
	$target = 1;

	$array=[[1,2,8,9],[2,4,9,12],[4,7,10,13],[6,8,11,15]];

		 function  Find($target,$array){
		 	$res='';
			foreach ($array as $key => $value) {
				foreach ($value as $key => $v) {
					if($v==$target){
						 $res='true';
						 return $res;
					}else{
						$res='false';
						return $res;
					}
				}
			}
		
		}

	echo Find($target,$array)

 ?>