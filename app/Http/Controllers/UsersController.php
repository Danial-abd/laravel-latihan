<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
Use Alert;

class UsersController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('user.index', compact('user'));
    }

    public function tambah()
    {
        return view('user.tambah');
    }

    public function store(Request $request)
    {
        
        $request->validate
        ([
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|confirmed'
            ]);
        $array = $request->only
        ([
                'name', 'email', 'password'
            ]);
        $array['password'] = bcrypt($array['password']);
        //User::create($request->all($array));
        User::create($array);
        alert()->success('Berhasil','Data Berhasil Tersimpan');
        return redirect()->route('user');
    }

    public function edit($id)
    {
        $user = User::find($id);
        if (!$user) return redirect()->route('user')
            ->with('error_message', 'User dengan id'.$id.' tidak ditemukan');
        return view('user.edit', [
            'user' => $user
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'sometimes|nullable|confirmed'
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password) $user->password = bcrypt($request->password);
        $user->save();

        toast('Data Berhasil di Update','success');
        return redirect()->route('user');
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        toast('Data Berhasil di Hapus','success');
        return redirect()->route('user');
    }
        

}