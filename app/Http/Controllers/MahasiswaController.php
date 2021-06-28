<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;
Use Alert;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function tambah()
    {
        return view('mahasiswa.tambah');
    }

    public function store(Request $request)
    {
        //dd($request->all()); *buat tes input database
        Mahasiswa::create($request->all());
        alert()->success('Berhasil','Data Berhasil Tersimpan');
        return redirect()->route('mahasiswa');
    }

    public function edit($id)
    {
       //dd($id); *cek data id
       
       $mahasiswa = Mahasiswa::find($id);
       //dd($mahasiswa);          //cek data dari database
       return view('mahasiswa.edit', compact('mahasiswa'));
       
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update($request->all());
        toast('Data Berhasil di Update','success');
        return redirect()->route('mahasiswa');
    }

    public function delete($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        toast('Data Berhasil di Hapus','success');
        return redirect()->route('mahasiswa');
    }
}
