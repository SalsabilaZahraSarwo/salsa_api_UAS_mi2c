<?php

namespace App\Http\Controllers;

use App\Models\Perpustakaan;
use Illuminate\Http\Request;

class PerpustakaanController extends Controller
{
    public function index() {
    return response()->json([
        'success' => true,
        'data' => Perpustakaan::all()
    ]);
}

    public function show($id) {
        return response()->json(Perpustakaan::findOrFail($id));
    }

    public function store(Request $request) {
        $this->validate($request, [
            'nama_perpustakaan' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'kategori' => 'required|in:Swasta,Negeri',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);
        $perpustakaan = Perpustakaan::create($request->all());
        return response()->json([
    'success' => true,
    'data' => $perpustakaan
], 201); // <- status 201 Created
    }
    

    public function update(Request $request, $id) {
        $perpustakaan = Perpustakaan::findOrFail($id);
        $perpustakaan->update($request->all());
        return response()->json(['success' => true, 'data' => $perpustakaan]);
    }

    public function destroy($id) {
        Perpustakaan::findOrFail($id)->delete();
        return response()->json(['success' => true, 'message' => 'Perpustakaan deleted']);
    }
}