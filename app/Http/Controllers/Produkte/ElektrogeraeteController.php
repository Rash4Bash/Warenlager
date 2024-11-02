<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Elektrogeraet; 

class ElektrogeraeteController extends Controller
{
    public function index() {
        $elektrogeraete = Elektrogeraet::all();
         return view('inhalte.produkte.elektrogeraete', compact('elektrogeraete'));
     }
    public function create() {
         return view('inhalte.produkte.elektrogeraete');
     }
    public function store(Request $request) {
        $validated = $request->validate([
             'bezeichnung' => 'required|string|max:255',
             'anzahl' => 'required|integer',   
         ]); 
             Elektrogeraet::create($validated);
                 return redirect()->route('inhalte.produkte.elektrogeraete')->with('success', 'Neues Gerät hinzugefügt');
     }

    public function show(string $id) {
        $elektrogeraete = Elektrogeraet::findOrFail($id);
         return view('warenlager', compact('elektrogeraete'));
     }

    public function edit(string $id) {
        $elektrogeraet = Elektrogeraet::findOrFail($id);
         return view('elektrogeraete.edit', compact('elektrogeraet'));
     }

    public function update(Request $request, string $id) {
        $validated = $request->validate([
         'bezeichnung' => 'required|string|max:255',
         'anzahl' => 'required|integer',
         ]);       
        $elektrogeraet = Elektrogeraet::findOrFail($id);
        $elektrogeraet->update($validated);
         return redirect()->route('elektrogeraete.index')->with('success', 'Gerät erfolgreich aktualisiert');
     }
     
    public function destroy(string $id) {
        $elektrogeraet = Elektrogeraet::findOrFail($id);
        $elektrogeraet->delete();
         return redirect()->route('elektrogeraete.index')->with('success', 'Gerät erfolgreich gelöscht');
     }
}
