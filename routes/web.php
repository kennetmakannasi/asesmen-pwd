<?php

use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PesananController;
use App\Models\Menu;

use function Pest\Laravel\get;

Route::middleware('auth')->group(function () {

    Route::middleware('admin')->group(function(){
        Route::get('menu/addmenu',[MenuController::class,'addmenu'])->name('menu.addmenu');
        Route::post('menu/addmenu',[MenuController::class,'storemenu'])->name('menu.storemenu');
        Route::get('menu/datamenu',[MenuController::class, 'datamenu'])->name('menu.datamenu');
        Route::delete('menu/deletemenu/{menu}', [MenuController::class,'deletemenu'])->name('menu.deletemenu');
        Route::get('menu/editmenu/{menu}',[MenuController::class,'editmenu'])->name('menu.editmenu');
        Route::put('menu/updatemenu/{menu}',[MenuController::class,'updatemenu'])->name('menu.updatemenu');

        Route::get('kategori/addkategori',[KategoriController::class,'addkategori'])->name('kategori.addkategori');
        Route::post('kategori/addkategori',[KategoriController::class,'storekategori'])->name('kategori.storekategori');
        Route::get('kategori/datakategori',[KategoriController::class, 'datakategori'])->name('kategori.datakategori');
        Route::delete('kategori/deletekategori/{kategori}', [KategoriController::class,'deletekategori'])->name('kategori.deletekategori');
        Route::get('kategori/editkategori/{kategori}',[KategoriController::class,'editkategori'])->name('kategori.editkategori');
        Route::put('kategori/updatekategori/{kategori}',[KategoriController::class,'updatekategori'])->name('kategori.updatekategori');
    });

    Route::get('/',[PesananController::class,'home'])->name('home');
    Route::get('/addpesanan',[PesananController::class,'addpesanan'])->name('addpesanan');
    Route::post('/addpesanan',[PesananController::class,'storepesanan'])->name('storepesanan');
    Route::delete('deletepesanan/{pesanan}',[PesananController::class,'deletepesanan'])->name('deletepesanan');


});

require __DIR__.'/auth.php';
