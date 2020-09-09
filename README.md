
### 網址Get變數內容做加密，避免使用者略過正常操作直接人工切換網址，取得不該被取得的資料

* 安裝hashids套件

    ```sh
    composer require hashids/hashids
    ```

* 加密範例

    ```php
    <?php
    // encode.php
    header('Content-Type: text/html; charset=utf-8');
    require __DIR__.'/vendor/autoload.php';

    use Hashids\Hashids;

    $hashids = new Hashids();

    $dataSn = "33";
    $id = $hashids->encode($dataSn);

    echo '<a href="decode.php?id='.$id.'">查詢</a>';
    ```

* 解密範例

    ```php
    <?php
    // decode.php
    header('Content-Type: text/html; charset=utf-8');
    require __DIR__.'/vendor/autoload.php';

    use Hashids\Hashids;
    use Carbon\Carbon;

    $hashids = new Hashids();

    $dataSn = $_GET['id'];;
    $id = $hashids->decode($dataSn);

    echo '接到的變數：'.$dataSn;
    echo '<hr>';
    echo '解密結果為：'.$id;
    ```

### 時區設定

* 在 `php.ini` 檔裡設定 `date.timezone` 參數。
* 在開始操作日期或時間之前可以呼叫 `date_default_time_zone()` 函式來設定。
* 在PHP7，若沒有設定時區預設值的話，PHP預設使用 `UTC` 時區。