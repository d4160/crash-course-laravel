<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ContactUs2Controller;
use App\Http\Controllers\UploadImageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
//     // try {
//     //     DB::getPdo();
//     //     echo 'Yey, it works!';
//     // } catch(\Exception $e) {
//     //     die('Could not connect to the database: '.$e);
//     // }
// });
Route::get('/', [HomeController::class, 'index']);
Route::get('/page/{id}', [HomeController::class, 'page']);

Route::get('/contact', [ContactUsController::class, 'index']);
Route::post('/contact/sendMessage', [ContactUsController::class, 'sendMessage']);

Route::get('/contact2', [ContactUs2Controller::class, 'index']);
Route::post('/contact2/sendMessage', [ContactUs2Controller::class, 'sendMessage']);
Route::post('/contact2/sendMessage/ajax', [ContactUs2Controller::class, 'sendMessageAjax']);

Route::get('/livewire', function () {
    return view('livewire');
});

Route::get('/about_us/{id}', function ($id) {
    echo "Hi $id, this is the about page.";
});

//Route::get('/pages', 'App\Http\Controllers\PageController@get');

Route::get('/pages', [PageController::class, 'get']);
Route::get('/upload-image', [UploadImageController::class, 'index']);
Route::post('/upload-image/upload', [UploadImageController::class, 'upload']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
