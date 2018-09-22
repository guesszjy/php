<?php
/**
 * Created by PhpStorm.
 * User: Administration
 * Date: 2018/9/15
 * Time: 13:46
 */
//PHP可以潜入HTML js语法，html可以嵌入php  （js不能潜入php）
//PHP数据类型
//2种标量类型 int float string bool
//2种符合类型 array object
//echo print_r var dump
//$num $ for

//$num = 123;
//echo $num;

$arr = array(1,2,3,4,5);
echo "<pre>";
print_r($arr);
echo "</pre>";
echo "<script>alert('hello')</script>";