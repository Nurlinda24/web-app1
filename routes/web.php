<?php

use Illuminate\Support\Facades\Route;

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
});

Route::get("/about-me", function () {
    return "Nama Saya <b>Nurlinda</b>";
});

Route::get("/testing-view", function () {
    return view('view-1');
});

/* router dan URL baru */
Route::get("/linda", function () {
    return "Tanggal dan Tanggal Lahir (Sinjai, 24 Juni 2001";
});

Route::get("/alamat", function () {
    return "Jln Ahmad Yani Juanda 8 Blimbing 6";
});

Route::get("/makan", function () {
    return "makanan kesukaan saya <i><b>Soto Ayam</i></b>";
});

Route::get("/kuliah", function () {
    return "Mahasiswa di <u>Universitas Muhammadiyah Kalimantan Timur</u>";
});

Route::get("/linda1", function () {
    return "Mahasiswa Semester 5";
});


use App\Http\Controllers\UtamaController;

Route::get("/utama/test", [UtamaController::class, "test"]);

/* Nurlinda 1 */

use App\Http\Controllers\LindaController1;

Route::get("/new/nur", [LindaController1::class, "nur"]);
Route::get("/new/linda", [LindaController1::class, "linda"]);
Route::get("/new/sari", [LindaController1::class, "sari"]);

/* Nurlinda 2 */

use App\Http\Controllers\LindaController;

Route::get("linda/kuy", [LindaController::class, "kuy"]);
Route::get("linda/mencoba", [LindaController::class, "mencoba"]);
Route::get("linda/halbaru", [LindaController::class, "halbaru"]);
