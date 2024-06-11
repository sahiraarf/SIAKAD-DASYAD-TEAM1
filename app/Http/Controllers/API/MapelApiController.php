<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Mapel;
use Illuminate\Http\Request;

class MapelApiController extends Controller
{
    public function getAll()
    {
        $data_mapel = Mapel::get();

        return response()->json([
            "message" => "Success Get All",
            "data" => $data_mapel
        ]);
    }

    public function getById($id)
    {
        $data_mapel = Mapel::where("id", $id)->with("jurusan")->first();

        return response()->json([
            "message" => "Success Get By Id",
            "data" => $data_mapel
        ]);
    }

    public function create(Request $request)
    {
        $data_mapel = Mapel::create([
            'nama_mapel' => $request->nama_mapel,
            'jurusan_id' => $request->jurusan_id,
        ]);

        return response()->json([
            "message" => "Success Create Data",
            "data" => $data_mapel
        ]);
    }
    public function update($id, Request $request)
    {
        $data_mapel = Mapel::where("id", $id)->update([
            'nama_mapel' => $request->nama_mapel,
            'jurusan_id' => $request->jurusan_id,
        ]);

        return response()->json([
            "message" => "Success Update Data",
            "data" => $data_mapel
        ]);
    }
    public function delete($id)
    {
        Mapel::where("id", $id)->delete();

        return response()->json([
            "message" => "Success Delete Data",

        ]);
    }
}
