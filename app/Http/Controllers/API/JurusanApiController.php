<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanApiController extends Controller
{
    public function getAll()
    {
        $data_jurusan = Jurusan::get();

        return response()->json([
            "message" => "Success Get All",
            "data" => $data_jurusan
        ]);
    }

    public function getById($id)
    {
        $data_jurusan = Jurusan::where("id", $id)->with("mapel")->first();

        return response()->json([
            "message" => "Success Get By Id",
            "data" => $data_jurusan
        ]);
    }

    public function create(Request $request)
    {
        $data_jurusan = Jurusan::create([
            "nama_jurusan" => $request->nama_jurusan
        ]);

        return response()->json([
            "message" => "Success Create Data",
            "data" => $data_jurusan
        ]);
    }
    public function update($id, Request $request)
    {
        $data_jurusan = Jurusan::where("id", $id)->update([
            "nama_jurusan" => $request->nama_jurusan
        ]);

        return response()->json([
            "message" => "Success Update Data",
            "data" => $data_jurusan
        ]);
    }
    public function delete($id)
    {
        Jurusan::where("id", $id)->delete();

        return response()->json([
            "message" => "Success Delete Data",

        ]);
    }
}
