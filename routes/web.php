<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

//コンタクトフォーム画面を表示するルート
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.show');

//送信内容確認を表示するルート
Route::post('/contact/confirm', [ContactController::class, 'confirm'])->name('contact.confirm');

//送信ボタンが押された時の処理のルート
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');


//サンクスページ
Route::get('/thanks', function(){
    return view('thanks');
})->name('contact.thanks');

