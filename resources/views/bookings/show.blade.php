<!-- resources/views/bookings/show.blade.php -->
<!DOCTYPE html>
<html>

<head>
    <title>Detail Booking</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container">
        <h1>Detail Booking</h1>
        <div>
            <p>Nama Pelanggan: {{ $booking->customer_name }}</p>
            <p>Nomor Kamar: {{ $booking->room->number }}</p>
            <p>Tipe Kamar: {{ $booking->room->roomType->name }}</p>
            <p>Tanggal Check-in: {{ $booking->check_in_date }}</p>
            <p>Tanggal Check-out: {{ $booking->check_out_date }}</p>
        </div>
        <a href="{{ route('bookings.index') }}" class="btn btn-primary">Kembali ke Daftar Booking</a>
    </div>
</body>

</html>
