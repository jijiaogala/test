<?php
/**
 * 常用函数
 */

//分割数组
$tmpArray = array(1,2,3,4,5);
$a = array_chunk($tmpArray, 2);
var_dump($a);

//一个数组当键值，一个数组当值
$b = array('a', 'b', 'c', 'd', 'e');
$c = array_combine($tmpArray, $b);
var_dump($c);