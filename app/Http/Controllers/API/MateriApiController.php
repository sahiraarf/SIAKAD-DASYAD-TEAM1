<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Materi;
use Illuminate\Http\Request;

class MateriApiController extends Controller
{
    public function getAll()
    {
        $data_materi = Materi::get();

        return response()->json([
            "message" => "Success Get All",
            "data" => $data_materi
        ]);
    }
    public function getById($id)
    {
        $data_materi = Materi::where("id", $id)->with(["guru", "kelas"])->first();

        return response()->json([
            "message" => "Success Get By Id",
            "data" => $data_materi
        ]);
    }

    public function create(Request $request)
    {
        $data_materi = Materi::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'file' => $request->file,
            'guru_id' => $request->guru_id,
            'kelas_id' => $request->kelas_id,
        ]);

        return response()->json([
            "message" => "Success Create Data",
            "data" => $data_materi
        ]);
    }
    public function update($id, Request $request)
    {
        $data_materi = Materi::where("id", $id)->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'file' => $request->file,
            'guru_id' => $request->guru_id,
            'kelas_id' => $request->kelas_id,
        ]);

        return response()->json([
            "message" => "Success Update Data",
            "data" => $data_materi
        ]);
    }
    public function delete($id)
    {
        Materi::where("id", $id)->delete();

        return response()->json([
            "message" => "Success Delete Data",

        ]);
    }
}
