<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    public function index()
    {
        // Hier könnten wir Daten aus einer Datenbank abrufen,
        // aber für dieses Beispiel geben wir einfach die View zurück.
        return view('warenlager'); // Dies verweist auf die View, die wir gleich erstellen
    }
}

