<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasApiController extends Controller
{
    public function getAll()
    {
        $data_kelas = Kelas::get();

        return response()->json([
            "message" => "Success Get All",
            "data" => $data_kelas
        ]);
    }

    public function create(Request $request)
    {
        $data_kelas = Kelas::create([
            'nama_kelas' => $request->nama_kelas,
            'guru_id' => $request->guru_id,
            'jurusan_id' => $request->jurusan_id,
        ]);

        return response()->json([
            "message" => "Success Create Data",
            "data" => $data_kelas
        ]);
    }

    public function getById($id)
    {
        $data_kelas = Kelas::where("id", $id)->with("guru")->first();

        return response()->json([
            "message" => "Success Get By Id",
            "data" => $data_kelas
        ]);
    }
    public function update($id, Request $request)
    {
        $data_kelas = Kelas::where("id", $id)->update([
            'nama_kelas' => $request->nama_kelas,
            'guru_id' => $request->guru_id,
        ]);

        return response()->json([
            "message" => "Success Update Data",
            "data" => $data_kelas
        ]);
    }
    public function delete($id)
    {
        Kelas::where("id", $id)->delete();

        return response()->json([
            "message" => "Success Delete Data",

        ]);
    }
}
