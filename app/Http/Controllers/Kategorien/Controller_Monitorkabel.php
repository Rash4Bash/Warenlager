<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\monitorkabel;

class MonitorkabelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $monitorkabel = monitorkabel::all();
        return view('inhalte.produkte.monitorkabel', compact('monitorkabel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     return view   
    }

    public function store(Request $request)
    {
        $request->validate([
            'a_nr' => 'nullable|integer',
            'bezeichnung' => 'required|string',
            'merkmal' => 'nullable|string',
            'anzahl' => 'nullable|integer|min:0'
        ]);
        Monitorkabel::create([
            'a_nr' => $request->input('a_nr'),
            'bezeichnung' => $request->input('bezeichnung'),
            'merkmal' => $request->input('merkmal'),
            'anzahl' => $request->input('anzahl', 0),
        ]);

        return redirect()->back()->with('success', 'Ein neues Monitorkabel wurde erfolgreich hinzugefügt!');
    }}}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
