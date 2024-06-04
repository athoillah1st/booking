<!-- resources/views/bookings/create.blade.php -->
<!DOCTYPE html>
<html>

<head>
    <title>Tambah Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Tambah Booking Baru</h1>
        <form action="{{ route('bookings.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="room_id">Pilih Kamar</label>
                <select name="room_id" class="form-control" required>
                    @foreach ($rooms as $room)
                        <option value="{{ $room->id }}">{{ $room->roomType->name }} - Nomor {{ $room->number }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="customer_name">Nama Pelanggan</label>
                <input type="text" name="customer_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="check_in_date">Tanggal Check-in</label>
                <input type="date" name="check_in_date" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="check_out_date">Tanggal Check-out</label>
                <input type="date" name="check_out_date" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>

</html>
