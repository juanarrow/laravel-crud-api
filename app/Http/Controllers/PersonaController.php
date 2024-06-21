<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get all personas
        $personas = Persona::all();
        //return JSON response with the personas
        return response()->json($personas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'age' => 'required|integer'
        ]);

        $persona = Persona::create($validatedData);

        return response()->json($persona, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Persona $persona)
    {
        // return JSON response with the player
        return response()->json($persona);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Persona $persona)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'age' => 'required|integer'
        ]);

        $persona->update($validatedData);

        return response()->json($persona, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Persona $persona)
    {
        $persona->delete();

        return response()->json(null, 204);
    }
}