<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnquiryController;

Route::post('/send-enquiry', [EnquiryController::class, 'store'])->name('enquiry.store');

Route::get('/', function () {
    return view('welcome');
});

