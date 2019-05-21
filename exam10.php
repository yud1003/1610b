<?php 

	$array = [2,4,3,6,3,2,5,5];

	function FindNumsAppearOnce($array){
		$num = count($array);
		$ar = $array[0];
		$arr = [];
		$count = 0;
		for($i=0;$i<=$num;$i++){
			if($ar != $array[$i]){
				$ar=$array[$i];
			}else{
				$arr = $array[$i];
			}
		}
		return $arr;
	}

	print_r(FindNumsAppearOnce($array));


 ?>