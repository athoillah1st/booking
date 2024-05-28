<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::with('roomType')->get();
        return view('rooms.index', compact('rooms'));
    }

    // Menampilkan detail sebuah kamar berdasarkan ID
    public function show($id)
    {
        $room = Room::with('roomType')->findOrFail($id);
        return view('rooms.show', compact('room'));
    }

    // Menampilkan form untuk menambah kamar baru
    public function create()
    {
        $roomTypes = RoomType::all();
        return view('rooms.create', compact('roomTypes'));
    }

    // Menyimpan data kamar baru
    public function store(Request $request)
    {
        $request->validate([
            'room_type_id' => 'required|exists:room_types,id',
            'number' => 'required|integer|unique:rooms,number',
            'is_available' => 'required|boolean',
        ]);

        Room::create($request->all());
        return redirect()->route('rooms.index')->with('success', 'Kamar berhasil ditambahkan');
    }

    // Menampilkan form untuk mengedit kamar
    public function edit($id)
    {
        $room = Room::findOrFail($id);
        $roomTypes = RoomType::all();
        return view('rooms.edit', compact('room', 'roomTypes'));
    }

    // Mengupdate data kamar
    public function update(Request $request, $id)
    {
        $request->validate([
            'room_type_id' => 'required|exists:room_types,id',
            'number' => 'required|integer|unique:rooms,number,' . $id,
            'is_available' => 'required|boolean',
        ]);

        $room = Room::findOrFail($id);
        $room->update($request->all());
        return redirect()->route('rooms.index')->with('success', 'Kamar berhasil diperbarui');
    }

    // Menghapus data kamar
    public function destroy($id)
    {
        $room = Room::findOrFail($id);
        $room->delete();
        return redirect()->route('rooms.index')->with('success', 'Kamar berhasil dihapus');
    }
}
