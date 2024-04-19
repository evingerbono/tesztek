<?php

namespace App\Http\Controllers;

use App\Models\kategoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return kategoria::all();
    }
    public function kategoriaLista()
    {
        $kategoria = DB::table('kategorias')
            ->select('id','kategorianev')
            ->get();

        return response()->json($kategoria);
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
    public function show($id)
    {
        return kategoria::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kategoria $kategoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kategoria $kategoria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kategoria $kategoria)
    {
        //
    }
}
