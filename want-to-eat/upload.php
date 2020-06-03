<?php
header('Content-Type: application/json; charset=UTF-8'); //設定資料類型為 json，編碼 utf-8

echo @$_POST["name"];


// 追加寫入使用者名稱下檔案
$json_string = file_get_contents("store.json");// 從檔案中讀取資料到PHP變數
$data = json_decode($json_string, true);// 把JSON字串轉成PHP陣列
//$data[] = $_POST["name"];

print_r($data);
//寫入
$json_strings = json_encode($data, JSON_UNESCAPED_UNICODE);
print $json_strings;
file_put_contents("store.json", $json_strings);//寫入






////修改
//$json_string = file_get_contents("text.json");// 從檔案中讀取資料到PHP變數
//$data = json_decode($json_string, true);// 把JSON字串轉成PHP陣列
//$data["001"]["a"] = "aas";
//$json_strings = json_encode($data);
//file_put_contents("text.json", $json_strings);//寫入