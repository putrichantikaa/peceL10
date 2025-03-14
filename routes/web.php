<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/cth', function () {
//     return view('contoh');
// });

// Route::fallback(function () {
//     return view('notfound');
// });



// Route::get('mahasiswa/{nama}', function ($nama) {
//     echo "Ini Halaman Mahasiswa dengan Nama $nama";
// });

// Route::get('/hello/hello2/hellolagi', function () {
//     echo "Hello World";
// });

// Route::get('/mahasiswa', function () {
//     $kelas = "IS62";
//     $data = ["Putri Chantika","Raihan Ramadhani","Nabiilah Aula Safda","Cut Putri Efrina","Sri Maharani","Penti Anggraini","Kania Nabila Muntaz"];

//     // return view('mahasiswa.index')->with('mhs',$data)->with('kls',$kelas);
//     return view('mahasiswa.index',compact('kelas','data'));
// });

// Route::get('/mahasiswa', function () {
//     $nama = "Putri Chantika";
//     $nilai = 90;

//     $nilai2 = [40,70,36,99,100];

//     return view('mahasiswa',compact('nama','nilai','nilai2'));
// });

Route::get('/mahasiswa', function () {
    $data_mhs = ["Putri Chantika","Raihan Ramadhani","Nabiilah Aula Safda","Sri Maharani","Cut Putri Efrina"];
    return view('data.mahasiswa',compact('data_mhs'));
});

Route::get('/dosen', function () {
    $data_dos = ["Ismanuddin","Mustofa Lutfi","Rita Warni","Ridha Ansari","Dzulgunar M Nasir"];
    return view('data.dosen',compact('data_dos'));
});

Route::get('/galeri', function () {
    return view('data.galeri');
});



