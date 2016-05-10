<?php
/**
 * php变量
 * User: admi
 * Date: 2016/5/10
 * Time: 11:11
 */

header('Content-Type: text/html; charset=UTF-8');
error_reporting(0);

$x = 1; // 在函数外定义的变量都拥有全局作用域，存储在$GLOBALS[index]数组中
$y = 2;
$z = 3;

/**
 * php变量有四种
 * local 局部变量 $i
 * global 全局变量 $x, $y, $z
 * static 静态变量 $i
 * parameter 参数 $param
 */
function myTest($param)
{
    echo '参数$param的值为' . $param . "<br>";

    global $y; // 定义为global后，在函数内部就能访问全局变量了

    static $i = 0; // 定义为static后，当函数执行完后不会被删除，下次再次调用该函数，该变量会保留上一次执行的值

    echo '在函数中输出全局变量$x,值为空' . $x . "<br>";

    echo '在函数中输出通过global定义的全局变量$y，值为' . $y . "<br>";

    $i++;

    echo '局部变量$i，定义为static后的值为' . $i . '；$i还是为局部变量' . "<br>";

}

myTest(1);
echo '----------第二次调用myTest函数-------------------' . "<br>";
myTest(1); //第二次调用后，$i的值为2