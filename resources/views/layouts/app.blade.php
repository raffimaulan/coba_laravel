<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'AbsensiApp' }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-100 flex">
    {{-- Sidebar --}}
    <aside class="w-64 bg-blue-800 text-white p-4">
        <h2 class="text-xl font-bold mb-6">AbsensiApp</h2>
        <nav>
            <ul class="space-y-2">
                <li><a href="#" class="block py-2 px-3 rounded hover:bg-blue-700">Dashboard</a></li>
                <li><a href="#" class="block py-2 px-3 rounded hover:bg-blue-700">Absen</a></li>
                <li><a href="#" class="block py-2 px-3 rounded hover:bg-blue-700">Cuti</a></li>
            </ul>
        </nav>
    </aside>

    {{-- Konten --}}
    <main class="flex-1 p-6">
        @yield('content')
    </main>
</body>
</html>
