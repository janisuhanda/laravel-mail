<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
use App\Http\Controllers\MailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// menggunakan class SendEmail (php artisan make:mail SendEmail) tanpa controller
Route::get('/send-email',function(){
    $data = [
        'name' => 'janisuhanda',
        'body' => 'Testing Kirim Email euy'
    ];

    Mail::to('jajavanjava@gmail.com')
        ->send(new SendEmail($data));

    dd("Email Berhasil dikirim.");
});

// menggunakan controller
Route::get('sendbasicemail',[MailController::class,'basic_email']);
Route::get('sendhtmlemail',[MailController::class,'html_email']);
Route::get('sendattachmentemail',[MailController::class,'attachment_email']);


