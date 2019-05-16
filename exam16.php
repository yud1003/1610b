<?php 
	/**
	 *$n表示区间的最小值，
	 *$m表示区间的最大值
	 * 
	 */
	function calFn($n,$m){
		$count=0;
		for ($i=$n; $i <=$m; $i++) {
			if($i%10==1 || floor($i/10==1)){
				$count++;
			}
		}
		return $count;
	}

	/**
	 * 1 10 11 12 13
	 */

	echo calFn(1,18);





 ?>