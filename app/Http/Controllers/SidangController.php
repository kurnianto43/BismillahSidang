<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sidang;
use PDF;

class SidangController extends Controller
{
    public function index()
    {
        $sidangs = Sidang::all();
        return view('sidang.index',compact('sidangs'));
    }

    public function create()
    {   
        return view('sidang.create');
    }

    public function store()
    {
        Sidang::create([
            'nama_mahasiswa' => request('nama_mahasiswa'),
            'npm' => request('npm'),
            'jurusan' => request('jurusan'),
            'no_hp' => request('no_hp'),
        ]);
        return redirect()->route('sidang.index')->with('success', 'Data berhasil ditambah');
    }

    public function edit(Sidang $sidang)
    {
        return view('sidang.edit', compact('sidang'));
    }

    public function update(Sidang $sidang)
    {
        $sidang->update([
            'nama_mahasiswa' => request('nama_mahasiswa'),
            'npm' => request('npm'),
            'jurusan' => request('jurusan'),
            'no_hp' => request('no_hp'),
        ]);
        return redirect()->route('sidang.index')->with('success', 'Data berhasil diubah');
    }

    public function destroy(Sidang $sidang)
    {
        $sidang->delete();

        return redirect()->route('sidang.index')->with('success', 'Data berhasil dihapus');
    }

    public function laporan()
    {
        $sidangs = Sidang::all();
        $pdf = PDF::loadView('sidang.laporan', compact('sidangs'));
        $pdf->setPaper('a4', 'landscape');
        return $pdf->stream();
    }
}
