<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalApiController extends Controller
{
    public function getAll()
    {
        $data_jadwal = Jadwal::get();

        return response()->json([
            "message" => "Success Get All",
            "data" => $data_jadwal
        ]);
    }

    public function getById($id)
    {
        $data_jadwal = Jadwal::where("id", $id)->with(["mapel", "kelas"])->first();

        return response()->json([
            "message" => "Success Get By Id",
            "data" => $data_jadwal
        ]);
    }

    public function create(Request $request)
    {
        $data_jadwal = Jadwal::create([
            'mapel_id' => $request->mapel_id,
            'kelas_id' => $request->kelas_id,
            'hari' => $request->hari,
            'dari_jam' => $request->dari_jam,
            'sampai_jam' => $request->sampai_jam,
        ]);

        return response()->json([
            "message" => "Success Create Data",
            "data" => $data_jadwal
        ]);
    }
    public function update($id, Request $request)
    {
        $data_jadwal = Jadwal::where("id", $id)->update([
            'mapel_id' => $request->mapel_id,
            'kelas_id' => $request->kelas_id,
            'hari' => $request->hari,
            'dari_jam' => $request->dari_jam,
            'sampai_jam' => $request->sampai_jam,
        ]);

        return response()->json([
            "message" => "Success Update Data",
            "data" => $data_jadwal
        ]);
    }
    public function delete($id)
    {
        Jadwal::where("id", $id)->delete();

        return response()->json([
            "message" => "Success Delete Data",

        ]);
    }
}
