<?php

use App\Http\Controllers\API\AuthApiController;
use App\Http\Controllers\API\JadwalApiController;
use App\Http\Controllers\API\JawabanApiController;
use App\Http\Controllers\API\JurusanApiController;
use App\Http\Controllers\API\KelasApiController;
use App\Http\Controllers\API\MapelApiController;
use App\Http\Controllers\API\MateriApiController;
use App\Http\Controllers\API\TugasApiController;
use App\Models\Jadwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::POST('/register-siswa', [AuthApiController::class, "registerSiswa"]);
Route::POST('/register-guru', [AuthApiController::class, "registerGuru"]);
Route::POST('/login', [AuthApiController::class, "login"]);


// route api jadwal
Route::GET('/jadwal', [JadwalApiController::class, "getAll"]);
Route::GET('/jadwal/{id}', [JadwalApiController::class, "getById"]);
Route::POST('/jadwal', [JadwalApiController::class, "create"]);
Route::PUT('/jadwal/{id}', [JadwalApiController::class, "update"]);
Route::DELETE('/jadwal/{id}', [JadwalApiController::class, "delete"]);
// route api mapel
Route::GET('/mapel', [MapelApiController::class, "getAll"]);
Route::GET('/mapel/{id}', [MapelApiController::class, "getById"]);
Route::POST('/mapel', [MapelApiController::class, "create"]);
Route::PUT('/mapel/{id}', [MapelApiController::class, "update"]);
Route::DELETE('/mapel/{id}', [MapelApiController::class, "delete"]);
// route api jurusan
Route::GET('/jurusan', [JurusanApiController::class, "getAll"]);
Route::GET('/jurusan/{id}', [JurusanApiController::class, "getById"]);
Route::POST('/jurusan', [JurusanApiController::class, "create"]);
Route::PUT('/jurusan/{id}', [JurusanApiController::class, "update"]);
Route::DELETE('/jurusan/{id}', [JurusanApiController::class, "delete"]);


// route api jawaban
Route::GET('/jawaban', [JawabanApiController::class, "getAll"]);
Route::GET('/jawaban/{id}', [JawabanApiController::class, "getById"]);
Route::POST('/jawaban', [JawabanApiController::class, "create"]);
Route::PUT('/jawaban/{id}', [JawabanApiController::class, "update"]);
Route::DELETE('/jawaban/{id}', [JawabanApiController::class, "delete"]);

// route api kelas
Route::GET('/kelas', [KelasApiController::class, "getAll"]);
Route::GET('/kelas/{id}', [KelasApiController::class, "getById"]);
Route::POST('/kelas', [KelasApiController::class, "create"]);
Route::PUT('/kelas/{id}', [KelasApiController::class, "update"]);
Route::DELETE('/kelas/{id}', [KelasApiController::class, "delete"]);

// route api materi
Route::GET('/materi', [MateriApiController::class, "getAll"]);
Route::GET('/materi/{id}', [MateriApiController::class, "getById"]);
Route::POST('/materi', [MateriApiController::class, "create"]);
Route::PUT('/materi/{id}', [MateriApiController::class, "update"]);
Route::DELETE('/materi/{id}', [MateriApiController::class, "delete"]);
// route api tugas
Route::GET('/tugas', [TugasApiController::class, "getAll"]);
Route::GET('/tugas/{id}', [TugasApiController::class, "getById"]);
Route::POST('/tugas', [TugasApiController::class, "create"]);
Route::PUT('/tugas/{id}', [TugasApiController::class, "update"]);
Route::DELETE('/tugas/{id}', [TugasApiController::class, "delete"]);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::GET('/logout', [AuthApiController::class, "logout"]);
});
