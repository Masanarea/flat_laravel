<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Common\MasterController;

use App\Http\Controllers\Clinic\indexController;
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

Route::get('/', function () {
    return view('welcome');
    // return [1];
});
Route::get('/about', function () {
    return 'About';
});
// Route::get('/test', function () {
//     return view('welcome');
// });
// Route::phase('/', 'indexController@getClinicList');
// Route::phase('/test2', 'indexController@getClinicList');

Route::get('prefectures', [MasterController::class, 'prefectures'])->name('common.prefectures');

Route::post('add/clinic', [indexController::class, 'addClinic']);
// オプションパラメータ
Route::post('clinic/list/{category_type?}', [indexController::class, 'getClinicList']);
