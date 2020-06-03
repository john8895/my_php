<?php
$file = file_get_contents('fakedata.txt');

$row = explode("\n", $file);

$data=array();

foreach ($row as $item) {
    if(!$item) continue;
    $cols = explode('|', $item);
    $data[] = $cols;
}
//foreach ($data as $value){
//    print_r($value);
//}

echo '<pre>';
print_r($data);
