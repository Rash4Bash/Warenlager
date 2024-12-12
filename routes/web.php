<?php

use App\Http\Controllers\ArtikelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WarehouseController;

Route::get('/warenlager', [WarehouseController::class, 'index']);
Route::get('/', function () {return view('welcome');});

// Routen für Artikel
      Route::get('/artikel-hinzufügen', [ArtikelController::class, 'store'])->name('artikel.store');
      Route::get('/artikel-bearbeiten', [ArtikelController::class, 'store'])->name('artikel.store');
      Route::get('/artikel-löschen', [ArtikelController::class, 'store'])->name('artikel.store');
// Routen für Personal
     //
// Routen für Notizen
     //
// Routen für Berichte
     // 
// Routen für Benutzerverwaltung
     //



