<?php 

/*
	 输入一个正整数，输出该数二进制表示中1的个数。
	 编写一个函数实现上述要求，函数原型为：
	 NumberOf1($n) $n为任意一个正整数 
	 如： $n = 10
     NumberOf1($n) 返回 2 (表示10的二进制表示中包含2个1)
	 提示： 10 的二进制表示为 1010  得到结果1的个数是 2
	 10/2 =5..0
	 5/2 = 2..1
	 2/2 = 1..0
	 1/2 = 0..1
*/
	 function NumberOf1($n){
	 		$str= '';

	 		$str = $n%2;
	 		$n = $n/2;
	 		$str.=$n%2;
	 		$n = $n/2;
	 		$str.=$n%2;
	 		$n = $n/2;
	 		$str.=$n%2;
	 		return $str;
	 }

	 $num =  NumberOf1(10);
	 $len = strlen($num);
	 $nums=0;
	 for ($i=0; $i <$len ; $i++) { 
	 	if($num[$i]==1){
	 		$nums++;
	 	}
	 }
	 echo $nums;

	 

 ?>