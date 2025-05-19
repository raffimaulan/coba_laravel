<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Karyawan</title>
</head>
<body>
    <h1>Halo, {{ auth()->user()->name }} (Karyawan)</h1>

   <form method="POST" action="{{ route('absen.masuk') }}">
    @csrf
    <button type="submit">Absen Masuk</button>
</form>

<form method="POST" action="{{ route('absen.keluar') }}">
    @csrf
    <button type="submit">Absen Keluar</button>
</form>

</body>
</html>


