<?php

namespace App\Http\Controllers;

use App\Models\karyawan;
use Illuminate\Http\Request;

class karyawanController extends Controller
{
    public function index()
    {
        $table = karyawan::orderby('id', 'asc')->get();

        return view('dashboard', [
            "title" => "dasboard",
            "users" => $table
        ]);
    }

    public function create()
    {
        return view('tambah');
    }

    public function store(Request $request)
    {
        karyawan::insert([
            'nama' => $request->nama,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jk,
            'tempat_lahir' => $request->tp_lahir,
            'tanggal_lahir' => $request->tgl_lahir
        ]);

        return redirect('/');
    }

    public function edit($id)
    {
        $user = karyawan::find($id)->get();

        return view('edit', ['users' => $user]);
    }

    public function update($id, Request $request)
    {
        karyawan::find($id)->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jk,
            'tempat_lahir' => $request->tp_lahir,
            'tanggal_lahir' => $request->tgl_lahir
        ]);

        return redirect('/');
    }

    public function detail($id)
    {
        $user = karyawan::find($id)->get();

        return view('detail', [
            "title" => "detail",
            "users" => $user
        ]);
    }

    public function delete($id)
    {
        karyawan::find($id)->delete();

        return redirect('/');
    }
}
