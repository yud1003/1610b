<?php 

	/**
			根据已知有序数组，实现二分查找算法（折半查找），
			输入任意数字，返回该数字在数组中的下标位置。

	*/

			/*
				非递归调用
			*/
				$arr=[1,2,3,4,5,6,7,8,9,10,11,12,13,14];
					$str = '';
					function FindNum($arr,$num){
						foreach ($arr as $key => $v) {
								if($v== $num){
									echo $key;
									return false;
							}
						}
					}

					echo FindNum($arr,10);



 ?>