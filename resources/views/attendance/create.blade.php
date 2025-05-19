<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi Online</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow rounded-4">
            <div class="card-body">
                <h2 class="text-center mb-4">Form Absensi Online</h2>

                @if(session('success'))
                    <div class="alert alert-success text-center">
                        {{ session('success') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('attendance.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="user_name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="user_name" name="user_name" required>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-block">Absen Sekarang</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
