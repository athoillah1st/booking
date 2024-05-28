<!-- resources/views/roomtypes/index.blade.php -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Kamar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Detail Kamar</h1>
        <div>
            <p>Tipe Kamar: {{ $room->roomType->name }}</p>
            <p>Nomor Kamar: {{ $room->number }}</p>
            <p>Deskripsi: {{ $room->roomType->description }}</p>
            <p>Harga: {{ $room->roomType->price }}</p>
            <p>Ketersediaan: {{ $room->is_available ? 'Tersedia' : 'Terisi' }}</p>
        </div>
        <a href="{{ url('/bookings/create') }}" class="btn btn-primary">Pesan Kamar</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
