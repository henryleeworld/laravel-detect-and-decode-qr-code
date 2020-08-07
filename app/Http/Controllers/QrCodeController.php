<?php

namespace App\Http\Controllers;

use Zxing\QrReader;

class QrCodeController extends Controller
{
    public function index()
    {
        $qrcode = new QrReader(public_path('images/qr-code.png'));
        $text = $qrcode->text();
        echo '行動條碼內容：' . $text . PHP_EOL;
    }
}
