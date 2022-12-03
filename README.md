# Laravel 9 檢測和解碼行動條碼

引入 khanamiryan 的 qrcode-detector-decoder 套件來擴增檢測和解碼行動條碼，行動條碼除了能表示文字、圖形、聲音等資訊，還有容量大、可靠性高、資料保密防偽、修改資料簡便等優點。這種矩陣式的行動條碼，不但可儲存達數百個數位或中文字，甚至還包含圖片、聲音等，印刷也不局限在白紙或任何材質上，更具容錯力，即使部分汙損也還能完整讀取資訊。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/qr-code/read` 來進行解碼行動條碼。

----

## 畫面截圖
![](https://i.imgur.com/xayvlTu.png)
> 解析出行動條碼內的內容