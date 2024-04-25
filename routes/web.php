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

Route::get('/about', function () {

    $nama = "Desi";
    $jenis_kelamin = "Perempuan";


    return view('data_diri', compact('nama','jenis_kelamin'));
});


Route::get('/me', function () {

    $nama = "Raden Ajeng Kartini Djojo Adhiningrat";
    $tempat_tanggal_lahir = "Jepara, 21 April 1879";
    $jenis_kelamin = "Perempuan";
    $alamat = "Jepara, Jawa Tengah";
    $agama = "Islam";
    $no = "081223364157";

    return view('biodata', compact('nama','tempat_tanggal_lahir','jenis_kelamin','alamat','agama','no'));
});


// parameter
Route::get('/about2/{nama}/{jenis_kelamin}/{pendidikan_terakhir}/{pekerjaan}/{alamat}', function (Request $request, $nama, $jenis_kelamin, $pendidikan_terakhir, $pekerjaan, $alamat) {
    $nama2 = $nama;
    $jenis_kelamin2 = $jenis_kelamin;
    $pendidikan_terakhir2 = $pendidikan_terakhir;
    $pekerjaan2 = $pekerjaan;
    $alamat2 = $alamat;
    return view('biodata2',compact('nama2','jenis_kelamin2','pendidikan_terakhir2','pekerjaan2','alamat2'));
});

