<!-- resources/views/dashboard.blade.php -->
<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="mt-5">Dashboard</h1>
        <div class="row mt-3">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Manage Rooms</h5>
                        <p class="card-text">Add, edit, and delete rooms.</p>
                        <a href="{{ route('rooms.index') }}" class="btn btn-primary">Go to Rooms</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Manage Room Types</h5>
                        <p class="card-text">Add, edit, and delete room types.</p>
                        <a href="{{ route('roomtypes.index') }}" class="btn btn-primary">Go to Room Types</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Manage Bookings</h5>
                        <p class="card-text">Add, edit, and delete bookings.</p>
                        <a href="{{ route('bookings.index') }}" class="btn btn-primary">Go to Bookings</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
