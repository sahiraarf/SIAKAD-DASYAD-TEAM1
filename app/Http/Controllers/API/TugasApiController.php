<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Tugas;
use Illuminate\Http\Request;

class TugasApiController extends Controller
{
    public function getAll()
    {
        $data_tugas = Tugas::get();

        return response()->json([
            "message" => "Success Get All",
            "data" => $data_tugas
        ]);
    }

    public function getById($id)
    {
        $data_tugas = Tugas::where("id", $id)->with(["guru", "kelas", "jawaban"])->first();

        return response()->json([
            "message" => "Success Get By Id",
            "data" => $data_tugas
        ]);
    }

    public function create(Request $request)
    {
        $data_tugas = Tugas::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'file' => $request->file,
            'guru_id' => $request->guru_id,
            'kelas_id' => $request->kelas_id,
        ]);

        return response()->json([
            "message" => "Success Create Data",
            "data" => $data_tugas
        ]);
    }
    public function update($id, Request $request)
    {
        $data_tugas = Tugas::where("id", $id)->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'file' => $request->file,
            'guru_id' => $request->guru_id,
            'kelas_id' => $request->kelas_id,
        ]);

        return response()->json([
            "message" => "Success Update Data",
            "data" => $data_tugas
        ]);
    }
    public function delete($id)
    {
        Tugas::where("id", $id)->delete();

        return response()->json([
            "message" => "Success Delete Data",

        ]);
    }
}
