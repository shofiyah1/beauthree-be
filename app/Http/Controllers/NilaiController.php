<?php

namespace App\Http\Controllers;

use App\Models\nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        $nilai = Nilai::Paginate(10);
        return response()->json([
            'data' => $nilai
        ]);
    }

    public function store(Request $request)
    {
        $nilai = nilai::create([
            'tugas_id' => $request->tugas_id,
            'users_id' => $request->users_id,
            'kelas_id' => $request->kelas_id,
            'nilai_mahasiswa' => $request->nilai_mahasiswa
        ]);
        return response()->json([
            'data' => $nilai
        ]);
    }
    public function show(nilai $nilai)
    {
        return response()->json([
            'data' => $nilai
        ]);
    }

    public function update(Request $request, nilai $nilai)
    {
        $nilai->tugas_id = $request->tugas_id;
        $nilai->users_id = $request->users_id;
        $nilai->kelas_id = $request->kelas_id;
        $nilai->nilai_mahasiswa = $request->nilai_mahasiswa;
        $nilai->save();

        return response()->json([
            'data' => $nilai
        ]);
    }
    public function destroy(nilai $nilai)
    {
        $nilai->delete();
        return response()->json([
            'message' => 'class delete'
        ]);
    }
}
