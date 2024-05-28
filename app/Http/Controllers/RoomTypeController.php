<?php

namespace App\Http\Controllers;

use App\Models\RoomType;
use Illuminate\Http\Request;


class RoomTypeController extends Controller
{
    public function index()
    {
        $roomTypes = RoomType::all();
        return view('roomtypes.index', compact('roomTypes'));
    }

    // Menampilkan form untuk menambah tipe kamar baru
    public function create()
    {
        return view('roomtypes.create');
    }

    // Menyimpan data tipe kamar baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
        ]);

        RoomType::create($request->all());
        return redirect()->route('roomtypes.index')->with('success', 'Tipe kamar berhasil ditambahkan');
    }
}
