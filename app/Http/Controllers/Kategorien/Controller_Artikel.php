<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel; 

class ArtikelController extends Controller
{
    public function index() {
        $Artikel = Artikel::all();
         return view('inhalte.produkte.Artikel', compact('Artikel'));
     }
    public function create() {
         return view('inhalte.produkte.Artikel');
     }
    public function store(Request $request) {
        $validated = $request->validate([
            'kategorie' => 'required|string|max:255' ,
            'artikel_nummer' => 'required|string|max:255' ,
            'beschreibung' => 'required|string|max:255' ,
            'datetime' => 'required|date' ,
            'anzahl' => 'required|string|max:255' ,
           ]); 
            Artikel::create($validated);
         return redirect()->route('inhalte.produkte.Artikel')->with('success', 'Neuer Artikel hinzugefügt');
     }

    public function show(Artikel $Artikel) {
         return view('warenlager', compact('Artikel'));
     }
    public function edit(Artikel $Artikel) {
        $Artikel = Artikel::findOrFail($id);
         return view('Artikel.edit', compact('Artikel'));
     }

    public function update(Request $request, Artikel $Artikel) {
        $validated = $this->validate($request)([
            'kategorie' => 'required|string|max:255' ,
            'artikel_nummer' => 'required|string|max:255' ,
            'beschreibung' => 'required|string|max:255' ,
            'datetime' => 'required|date' ,
            'anzahl' => 'required|string|max:255' ,
           ]); 

        $Artikel->update($validated);
         return redirect()->route('Artikel.index')->with('success', 'Gerät erfolgreich aktualisiert');
     }
     
    public function destroy(Artikel $Artikel) {
        $Artikel->delete();
         return redirect()->route('Artikel.index')->with('success', 'Gerät erfolgreich gelöscht');
     }
}
