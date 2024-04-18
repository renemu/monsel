<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Monsel;
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
    return view('monitoring');
});

Route::get('/bacategangan_total', [Monsel::class, 'bacategangan_total']);
Route::get('/bacaarusdischarge', [Monsel::class, 'bacaarusdischarge']);
Route::get('/bacaaruscharge', [Monsel::class, 'bacaaruscharge']);
Route::get('/bacastatustegangan', [Monsel::class, 'bacastatustegangan']);
Route::get('/bacastatuspenyeimbang', [Monsel::class, 'bacastatuspenyeimbang']);
Route::get('/simpan/{nilaitegangantotal}/{nilaiarusdischarge}/{nilaiaruscharge}/{statustegangan}/{statuspenyeimbang}', [Monsel::class, 'simpansensor']);
