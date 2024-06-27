<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawais = DB::table('pegawais')->get();
        return view('pegawais.index', ['pegawais'=>$pegawais]);
    }

    public function create()
    {
        return view('pegawais.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'alamat' => 'required|string|max:255'
        ]);

        DB::table('pegawais')->insert([
            'nama'=> $request->nama,
            'nip'=> $request->nip,
            'jabatan'=> $request->jabatan,
            'alamat'=> $request->alamat,
            'created_at'=> now(),
            'updated_at'=> now()
        ]);

        return redirect()->route('pegawais.index')->with('success', 'Pegawai created sucessfully.');
    }

    public function show($id)
    {
        $pegawai = DB::table('pegawais')->where('id', $id)->first();
        return view('pegawais.show', ['pegawai'=>$pegawai]);
    }

    public function edit($id)
    {
        $pegawai = DB::table('pegawais')->where('id', $id)->first();
        return view('pegawais.edit', ['pegawai'=>$pegawai]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'alamat' => 'required|string|max:255'
        ]);

        DB::table('pegawais')->where('id', $id)->update([
            'nama'=> $request->nama,
            'nip'=> $request->nip,
            'jabatan'=> $request->jabatan,
            'alamat'=> $request->alamat,
            'updated_at'=> now()
        ]);

        return redirect()->route('pegawais.index')->with('success', 'Pegawai updated successfully');
    }

    public function destroy($id)
    {
        DB::table('pegawais')->where('id', $id)->delete();

        return redirect()->route('pegawais.index')->with('success', 'Pegawai deleted successfully.');
    }
}
