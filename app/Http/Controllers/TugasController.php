<?php

namespace App\Http\Controllers;

use App\Models\tugas;
use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function index()
    {
        $tugas = Tugas::Paginate(10);
        return response()->json([
            'data' => $tugas
        ]);
    }
    public function store(Request $request)
    {
        $tugas = tugas::create([
            'kelas_id' => $request->kelas_id,
            'users_id' => $request->users_id,
            'nama_tugas' => $request->nama_tugas,
            'deskripsi_tugas' => $request->deskripsi_tugas,
            'lampiran_tugas' => $request->lampiran_tugas,
            'nilai_tugas' => $request->nilai_tugas,
            'tenggat_waktu_tugas' => $request->tenggat_waktu_tugas
        ]);
        return response()->json([
            'data' => $tugas
        ]);
    }

    public function show(tugas $tugas)
    {
        return response()->json([
            'data' => $tugas
        ]);
    }

    public function update(Request $request, tugas $tugas)
    {
        $tugas->kelas_id = $request->kelas_id;
        $tugas->users_id = $request->users_id;
        $tugas->nama_tugas = $request->nama_tugas;
        $tugas->deskripsi_tugas = $request->deskripsi_tugas;
        $tugas->lampiran_tugas = $request->lampiran_tugas;
        $tugas->nilai_tugas = $request->nilai_tugas;
        $tugas->tenggat_waktu_tugas = $request->tenggat_waktu_tugas;
        $tugas->save();

        return response()->json([
            'data' => $tugas
        ]);
    }
    public function destroy(tugas $tugas)
    {
        $tugas->delete();
        return response()->json([
            'message' => 'class delete'
        ]);
    }
}
