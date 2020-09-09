<?php
require __DIR__.'/vendor/autoload.php';

use Hashids\Hashids;
use Carbon\Carbon;

// 系統代碼
$systemId = "D05";
// 今日日期
$systemDate = Carbon::now()->timezone('Asia/Taipei')->toDateString();

// 加入亂數因子，每天每個系統加密因子不同
$hashSalt = $systemId.$systemDate;
// 固定碼數
$miniLength = 6;
// 字元特徵碼
$patternChar = 'abcdefghijklmnopqrstuvwxyz';
// 開始初始化 Hashids 機制
$hashids = new Hashids($hashSalt, $miniLength, $patternChar);