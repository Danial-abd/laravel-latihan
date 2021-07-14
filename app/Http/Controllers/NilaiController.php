<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use App\Makul;
use App\Nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        $nilai = Nilai::with(['mahasiswa'])->get();
        return view('nilai.index', compact('nilai'));
    }

    public function tambah()
    {
        $makul = Makul::all();
        $mahasiswa = Mahasiswa::all();
        return view('nilai.tambah', compact('makul','mahasiswa'));
    }

    public function store(Request $request)
    {
        //dd($request->all()); //buat tes input database
        Nilai::create($request->all());
        alert()->success('Berhasil','Data Berhasil Tersimpan');
        return redirect()->route('nilai');
    }

    public function edit($id)
    {
       //dd($id); //cek data id
       
       $makul = Makul::all();
       $mahasiswa = Mahasiswa::all();
       $nilai = Nilai::find($id);
       //dd($nilai);          //cek data dari database
       return view('nilai.edit', compact('mahasiswa','nilai','makul')); 
    }

    public function update(Request $request, $id)
    {
        $nilai = Nilai::find($id);
        $nilai->update($request->all());
        toast('Data Berhasil di Update','success');
        return redirect()->route('nilai');
    }

    public function delete($id)
    {
        $nilai = Nilai::find($id);
        $nilai->delete();
        toast('Data Berhasil di Hapus','success');
        return redirect()->route('nilai');
    }
}
