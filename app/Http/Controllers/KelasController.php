<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{

    public function index()
    {
        $kelas = Kelas::all();
        return response()->json($kelas);
    }

    public function store(Request $request)
    {
        $kelas = kelas::create([
            'users_id' => $request->users_id,
            'nama_kelas' => $request->nama_kelas,
            'jenis_kelas' => $request->jenis_kelas,
            'kode_kelas' => $request->kode_kelas,
            'tahun_ajar' => $request->tahun_ajar,
        ]);
        return response()->json([
            'data' => $kelas
        ]);
    }

    public function show(Kelas $kelas)
    {
        return response()->json([
            'data' => $kelas
        ]);
    }

    public function update(Request $request, kelas $kelas)
    {
        $kelas->users_id = $request->users_id;
        $kelas->nama_kelas = $request->nama_kelas;
        $kelas->jenis_kelas = $request->jenis_kelas;
        $kelas->kode_kelas = $request->kode_kelas;
        $kelas->tahun_ajar = $request->tahun_ajar;
        $kelas->save();

        return response()->json([
            'data' => $kelas
        ]);
    }

    public function destroy(kelas $kelas)
    {
        $kelas->delete();
        return response()->json([
            'message' => 'class delete'
        ]);
    }
}
