<?php

namespace App\Http\Controllers;

use App\Models\Pendidikan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ApiPendidikanController extends Controller
{

    public function getAll()
    {
        $pendidikan = Pendidikan::all();
        return Response::json($pendidikan, 200);
    }

    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'nama' => 'required',
            'tingkatan' => 'required',
            'tahun_masuk' => 'required|numeric',
            'tahun_keluar' => 'required|numeric',
        ]);

        // Membuat data baru
        $pendidikan = Pendidikan::create($request->all());
        return response()->json($pendidikan, 201);
    }

    public function show($id)
    {
        // Mengambil data pendidikan berdasarkan ID
        $pendidikan = Pendidikan::findOrFail($id);
        return response()->json($pendidikan);
    }

    public function update(Request $request, $id)
    {
        // Validasi data
        $request->validate([
            'nama' => 'required',
            'tingkatan' => 'required',
            'tahun_masuk' => 'required|numeric',
            'tahun_keluar' => 'required|numeric',
        ]);

        // Mengupdate data pendidikan
        $pendidikan = Pendidikan::findOrFail($id);
        $pendidikan->update($request->all());

        return response()->json($pendidikan, 200);
    }

    public function destroy($id)
    {
        // Menghapus data pendidikan
        $pendidikan = Pendidikan::findOrFail($id);
        $pendidikan->delete();

        return response()->json(null, 204);
    }
}
