<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\fakultas;
use App\Models\Prodi;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        // dd($provinsi);
        return view('Mahasiswa.index')->with('Mahasiswa', $mahasiswa);
        //
    }

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prodi = Prodi::all();

        return view('Mahasiswa.create')->with('Prodi',$prodi);
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi=$request->validate([
            'npm'=>'required|unique:mahasiswas',
            'nama'=>'required',
            'kota_lahir'=>'required',
            'tanggal'=>'required',
            'prodi_id'=>'required',
            'foto'=>'required|file|image',

        ]);

        $mahasiswa=new Mahasiswa();
        $mahasiswa->npm=$validasi['npm'];
        $mahasiswa->nama=$validasi['nama'];
        $mahasiswa->kota_lahir=$validasi['kota_lahir'];
        $mahasiswa->tanggal=$validasi['tanggal'];
        $mahasiswa->prodi_id=$validasi['prodi_id'];
        //
        $ext=$request->foto->getClientOriginalExtension();
        $new_filename=$validasi['npm'].'.'.$ext;
        $request->foto->storeAs('public', $new_filename);

        $mahasiswa->foto=$new_filename;
        $mahasiswa->save();

        return redirect()
        ->route('mahasiswa.index')
        ->with('succcess', 'Data Mahasiswa'. $validasi['nama'].'berhasil disimpan');

    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //
    }
}
