<?php

use App\Http\Controllers\QrCodeController;
use Illuminate\Support\Facades\Route;

Route::get('/qr-code/read', [QrCodeController::class, 'index']);
