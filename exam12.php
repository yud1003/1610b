<?php 

/**
 *求1+2+3+...+n，要求不能使用乘除法、for、while、if、else、switch、case等关键字及条件判断语句（A?B:C）。（提示逻辑运算）
编写一个函数实现上述要求，函数原型为：
Sum_Solution($n)  
如：$str = 5
Sum_Solution($n) 返回 15
 *
 * 
 */

	function Sum_Solution($n){
		$n && ($n+= Sum_Solution($n-1));

		return $n;
	}

	echo Sum_Solution(3);





 ?>