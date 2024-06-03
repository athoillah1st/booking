<?php

namespace App\Http\Controllers;

use App\Models\Booked;
use App\Models\Room;
use Illuminate\Http\Request;


class BookedController extends Controller
{
    public function index()
    {
        $bookings = Booked::with('room.roomType')->get();
        return view('bookings.index', compact('bookings'));
    }

    // Menampilkan detail sebuah booking berdasarkan ID
    public function show($id)
    {
        $booking = Booked::with('room.roomType')->findOrFail($id);
        return view('bookings.show', compact('booking'));
    }

    // Menampilkan form untuk menambah booking baru
    public function create()
    {
        $rooms = Room::with('roomType')->where('is_available', true)->get();
        return view('bookings.create', compact('rooms'));
    }

    // Menyimpan data booking baru
    public function store(Request $request)
    {
        $request->validate([
            'room_id' => 'required|exists:rooms,id',
            'customer_name' => 'required|string|max:255',
            'check_in_date' => 'required|date',
            'check_out_date' => 'required|date|after:check_in_date',
        ]);

        // Membuat booking baru
        $booking = Booked::create($request->all());

        // Mengupdate ketersediaan kamar
        $room = Room::findOrFail($request->room_id);
        $room->is_available = false;
        $room->save();

        return redirect()->route('bookings.index')->with('success', 'Booking berhasil ditambahkan');
    }

    // Menghapus data booking
    public function destroy($id)
    {
        $booking = Booked::findOrFail($id);

        // Mengupdate ketersediaan kamar
        $room = Room::findOrFail($booking->room_id);
        $room->is_available = true;
        $room->save();

        // Menghapus booking
        $booking->delete();

        return redirect()->route('bookings.index')->with('success', 'Booking berhasil dihapus');
    }
}
