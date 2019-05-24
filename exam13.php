<?php 

/**
 *写一个函数，求两个整数之和，要求在函数体内不得使用+、-、*、/四则运算符号。
 *
 *
 *
 * 
 */

	function Add($num1, $num2) {
		for($i=$num1;$i>0;$i--){
			$num2++;
		}
		return $num2;
	}

	echo Add(100,100);
 ?>