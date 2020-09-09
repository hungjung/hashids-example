<?php

// decode.php
header('Content-Type: text/html; charset=utf-8');
require_once __DIR__.'/conf.php';

try {

    // 取到的Get變數
    $dataSn = $_GET['id'];;
    // 將取得的資料做解密
    $result = $hashids->decode($dataSn);

    // 如無法解密出結果，丟例外
    if (count($result)<=0)
        throw new Exception("資料解密讀取失敗！", 1);        

    echo '接到的變數：'.$dataSn;
    echo '<hr>';
    echo '解密結果為：'.$result[0];

} catch (Exception $e) {
    
    echo $e->getMessage();

}
