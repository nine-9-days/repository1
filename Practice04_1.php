<?php
$str = "文字列";
$int_number = 4;
$arr = array(1,2,3,4);

echo $str . " " . gettype($str) . PHP_EOL;
echo $int_number . " " . gettype($int_number) . PHP_EOL;
echo implode(',',$arr) . " " . gettype($arr) . PHP_EOL;
?>