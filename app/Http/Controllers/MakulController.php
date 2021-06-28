<?php

namespace App\Http\Controllers;

use App\Makul;
use Illuminate\Http\Request;

class MakulController extends Controller
{
    public function index()
    {
        $makul = Makul::all();
        return view('makul.index', compact('makul'));
    }

    public function tambah()
    {
        return view('makul.tambah');
    }

    public function store(Request $request)
    {
       Makul::create($request->all());
       alert()->success('Berhasil','Data Berhasil Tersimpan');
       return redirect()->route('makul');
    }

    public function edit($id)
    {
        $makul = Makul::find($id);
        return view('makul.edit', compact('makul'));
    }

    public function update(Request $request, $id)
    {
        $makul = Makul::find($id);
        $makul->update($request->all());
        toast('Data Berhasil di Update','success');
        return redirect()->route('makul');
    }

    public function delete($id)
    {
        $makul = Makul::find($id);
        $makul->delete();
        toast('Data Berhasil di Hapus','success');
        return redirect()->route('makul');
    }
}
