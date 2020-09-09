<?php

// encode.php
header('Content-Type: text/html; charset=utf-8');
require_once __DIR__.'/conf.php';

try {

    // 原始資料
    // (通常是資料庫撈出來的候選鍵資料，被用來識別操作標的用)
    $dataSn = "33";
    // 雜湊加密後的字串
    $id = $hashids->encode($dataSn);

    echo '資料ID：'.$dataSn.'<br>';
    echo '原本網址：decode.php?id='.$dataSn.'<hr>';
    echo '加密後資料ID：'.$id.'<br>';
    echo '加密後網址：decode.php?id='.$id.'<hr>';

    // 將變化後的關鍵資訊放入網址參數值裡
    echo '<a href="decode.php?id='.$id.'">查詢</a>';

} catch (Exception $e) {
    
    echo $e->getMessage();

}
