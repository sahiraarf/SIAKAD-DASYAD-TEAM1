<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Jawaban;
use Illuminate\Http\Request;

class JawabanApiController extends Controller
{
    public function getAll()
    {
        $data_jawaban = Jawaban::get();

        return response()->json([
            "message" => "Success Get All",
            "data" => $data_jawaban
        ]);
    }

    public function getById($id)
    {
        $data_jawaban = Jawaban::where("id", $id)->with(["tugas", "siswa"])->first();

        return response()->json([
            "message" => "Success Get By Id",
            "data" => $data_jawaban
        ]);
    }

    public function create(Request $request)
    {
        $data_jawaban = Jawaban::create([
            'tugas_id' => $request->tugas_id,
            'siswa_id' => $request->siswa_id,
            'jawaban' => $request->jawaban,
            'file' => $request->file,
            'nilai' => $request->nilai,
        ]);

        return response()->json([
            "message" => "Success Create Data",
            "data" => $data_jawaban
        ]);
    }
    public function update($id, Request $request)
    {
        $data_jawaban = Jawaban::where("id", $id)->update([
            'tugas_id' => $request->tugas_id,
            'siswa_id' => $request->siswa_id,
            'jawaban' => $request->jawaban,
            'file' => $request->file,
            'nilai' => $request->nilai,
        ]);

        return response()->json([
            "message" => "Success Update Data",
            "data" => $data_jawaban
        ]);
    }
    public function delete($id)
    {
        Jawaban::where("id", $id)->delete();

        return response()->json([
            "message" => "Success Delete Data",

        ]);
    }
}
