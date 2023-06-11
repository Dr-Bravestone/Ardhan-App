<?php

namespace App\Http\Controllers;

use App\Models\fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $fakultas = fakultas::all();
        // dd($fakultas);
        return view('fakultas.index')->with('fakultas', $fakultas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fakultas.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi=$request->validate(['nama_fakultas'=>'required', 'nama_dekan'=>'required','nama_wakil_dekan'=>'required']);
        $fakultas= new fakultas();
        $fakultas->nama_fakultas=$validasi['nama_fakultas'];
        $fakultas->nama_dekan=$validasi['nama_dekan'];
        $fakultas->nama_wakil_dekan=$validasi['nama_wakil_dekan'];

        $fakultas->save();
        return redirect()->route('fakultas.index')->with('success','Data Fakultas Telah Disimpan.');
        // dd($request);
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(fakultas $fakultas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(fakultas $fakultas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, fakultas $fakultas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(fakultas $fakultas)
    {
        //
    }
}
