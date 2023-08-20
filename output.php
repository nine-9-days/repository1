<?php
include('input.php');
$list = make(100);
foreach ($list as $value){
    if ($value % 15 == 0){
        $result = "FizzBuzz";
    } elseif ($value % 5 ==0){
        $result = "Buzz";
    } elseif($value % 3 == 0){
        $result = "Fizz";
    } else{
        $result = $value;
    }
    echo $result . PHP_EOL;
}
?>