<?php

namespace App\Http\Controllers;

use App\Models\teszt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TesztController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return teszt::all();
    }

    public function tesztek() 
    {
        $teszt = DB::table('teszts')
            ->select('kerdes', 'v1', 'v2', 'v3','v4')
            ->get();

        return response()->json($teszt);    
    }

    public function kategoriaSzur($id)
    {
        $teszt = DB::table('teszts')
            ->select('kerdes', 'v1', 'v2', 'v3', 'v4')
            ->where('kategoriaId', $id)
            ->get();

        return response()->json($teszt);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        
    }

    /**
     * Display the specified resource.
     */
    public function show(teszt $teszt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(teszt $teszt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, teszt $teszt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(teszt $teszt)
    {
        //
    }
}
