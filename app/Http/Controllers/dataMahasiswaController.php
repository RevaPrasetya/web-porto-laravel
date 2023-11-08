<?php

namespace App\Http\Controllers;

use App\Models\dataMahasiswa;
use Illuminate\Http\Request;

class dataMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        //memanggil data dari tabel data-mahasiswa menggunakan model
        $data = dataMahasiswa::all();

        //dd($data);

        //masukan data dan tampilkan di views
        return view('kartu-mahasiswa', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Perintah untuk menambah data 
        return view('tambah-mahasiswa');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mahasiswa = new dataMahasiswa;

        $mahasiswa->link_gambar_profil = $request->gambar_profil;
        $mahasiswa->first_name = $request->first_name;
        $mahasiswa->last_name = $request->last_name;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->jenkel = $request->jenis_kelamin;
        $mahasiswa->email = $request->email;
        $mahasiswa->fakultas = $request->fakultas;
        $mahasiswa->prodi = $request->prodi;
        $mahasiswa->alamat = $request->alamat;

        $mahasiswa->save();

        return redirect('/mahasiswa');
    }

    /**
     * Display the specified resource.
     */
    public function show(dataMahasiswa $mahasiswa)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(dataMahasiswa $mahasiswa)
    {
        
        //untuk melihat dan mulai mengedit data mahasiswa
        return view('edit-mahasiswa', compact('mahasiswa'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, dataMahasiswa $mahasiswa)
    {
        $mahasiswa->link_gambar_profil = $request->gambar_profil;
        $mahasiswa->first_name = $request->first_name;
        $mahasiswa->last_name = $request->last_name;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->jenkel = $request->jenis_kelamin;
        $mahasiswa->email = $request->email;
        $mahasiswa->fakultas = $request->fakultas;
        $mahasiswa->prodi = $request->prodi;
        $mahasiswa->alamat = $request->alamat;

        $mahasiswa->save();

        return redirect('edit-mahasiswa/'.$request->id_mahasiswa.'');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(dataMahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect('/mahasiswa');
    }
}
