<?php

namespace App\Http\Controllers;

use Zxing\QrReader;

class QrCodeController extends Controller
{
    public function index()
    {
        $qrcode = new QrReader(storage_path('images/qr-code.png'));
        $text = $qrcode->text();
        echo __('QR Code content:') . $text . PHP_EOL;
    }
}
