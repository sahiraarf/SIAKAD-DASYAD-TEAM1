<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Jadwal;
use App\Models\Jawaban;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\Tugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

class NilaiController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required|integer',
            'nilai' => 'required|numeric',
        ]);

        $jawaban = Jawaban::findOrFail($validatedData['id']);

        $jawaban->nilai = $validatedData['nilai'];
        $jawaban->save();

        return response()->json(['message' => 'Nilai berhasil ditambahkan ke jawaban', 'data' => $jawaban], 200);
    }
}
