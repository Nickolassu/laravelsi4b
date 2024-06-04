<?php

use App\Http\Controllers\FakultasController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
use App\Models\Fakultas;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('about', function(){
    return "halaman about";
});

route::get('profil', function () {
    return view("profil");
});

// router dengan parameter
route::get('welcome/{salam}', function($salam){
    // return 'Selamat '. $salam;
    return view('salam')->with('viewsalam',$salam);
});

// router tanpa parameter
// terdapat array $list
route::get('listdata',function(){
    $list = ["sistem informasi","informatika","manajemen"];
    $listmhs = [
        ["npm" => 001, "nama" => "ahmad"],
        ["npm" => 002, "nama" => "budi"]
    ];
    return view('listprodi')
        ->with('viewlist',$list)
        ->with('viewmhs',$listmhs);
});

route:: resource('fakultas', FakultasController::class);

route::resource('prodi', ProdiController::class);

route::resource('mahasiswa', MahasiswaController::class);
