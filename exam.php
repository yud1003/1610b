<?php 


	function arrayPx($arr){
		$ji = $ou = [];
		foreach ($arr as $key => $v) {
			if($v%2==1){
				$ji[]=$v;
			}else{
				$ou[]=$v;
			}
		}
		return array_merge($ji,$ou);
	}

	print_r(arrayPx([1,2,3,4,5,6,7,8,9]));




 ?>