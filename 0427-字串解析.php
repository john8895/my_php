<?php

//1.讀入檔案
$file = file_get_contents('fakedata.txt');

//2.解析字串，組成數組
$str = explode("\n", $file);

//"小貓瞇 | dsdasdas@dasd.com | 85 | 女"
foreach ($str as $k => $item) {
    $newStr[] = explode('|', $str[$k]);
//    $str[$k] = trim($str[$k]);
}
echo '<pre>';
print_r($newStr);
die();

//3.顯示
