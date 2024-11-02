<?php

use App\Http\Controllers\MonitorkabelController;
use App\Http\Controllers\NetzwerkkabelController;
use App\Http\Controllers\UsbKabelController;
use App\Http\Controllers\ElektrogeraeteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WarehouseController;

Route::get('/warenlager', [WarehouseController::class, 'index']);


Route::get('/', function () {
     return view('welcome');
     });

// Routen für produkte 
     Route::resource('elektrogeraete', ElektrogeraeteController::class);
     Route::resource('netzwerkkabel', NetzwerkkabelController::class);
     Route::resource('monitorkabel', MonitorkabelController::class);
     Route::resource('usb_kabel', UsbKabelController::class);

// Routen für Personal
     //
// Routen für Notizen
     //
// Routen für Berichte
     // 
// Routen für Benutzerverwaltung
     //