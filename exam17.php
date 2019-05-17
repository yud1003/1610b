<?php
/**
 * Created by PhpStorm.
 * User: 69571
 * Date: 2019/5/17
 * Time: 8:43
 * 求丑数
 *  要求 ：设待推断整数位M，M循环除以2直到不能整除。此时接着循环除以3直到不能整除。接着循环除以5直到商为1或者不能整除为止。
 */

    function c_num($num){
        $index=null;
        if($num%2==0){
            $index = $num/2;
            if($index%2==0){
                $index = $num/2;
            }else if($index%3==0){
                $index = $num/3;
            }else{
                if($num%5==0){
                    $index=$num/5;
                    echo "是丑数";
                }
            }
        }else{
            $index =$num;
            echo "不是丑数";
        }
        //return $index;
    }

echo c_num(14);