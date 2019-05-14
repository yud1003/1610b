<?php 
	
	/**
	 *  1  1
	 *  2  1+1   2
	 *  3  1+1+1 1+2  2+1
	 *  4  1+1+1+1  1+1+2 1+2+1 2+1+1 2+2 
	 *  1  2  3  5
	 */
	
	


	function calSteps($n){
		if($n>=3){
			return calSteps($n-1)+calSteps($n-2);
		}
		if($n==1){
			return $n;
		}
		if($n==2){
			return $n;
		}
	}


echo calSteps(5);

 ?>