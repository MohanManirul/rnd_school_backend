<?php

    //payment

use App\Http\Controllers\InvoiceController;
use Illuminate\Support\Facades\Route;

    Route::post("/PaymentSuccess",[InvoiceController::class,'PaymentSuccess']);
    Route::post("/PaymentCancel",[InvoiceController::class,'PaymentCancel']);
    Route::post("/PaymentFail",[InvoiceController::class,'PaymentFail']);
    Route::post("/PaymentIPN",[InvoiceController::class,'PaymentIPN']);

