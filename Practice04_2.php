<?php
$args = $argv[1];

if ($args % 2 == 0) {
    echo $args . "：偶数" . PHP_EOL;
} else{
    echo $args . "：奇数" . PHP_EOL;
}
?>