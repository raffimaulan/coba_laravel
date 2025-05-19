<div class="w-64 bg-blue-700 text-white flex flex-col py-6 px-4 space-y-4">
    <div class="text-2xl font-bold mb-6">
        <a href="{{ route('dashboard') }}">
            AbsensiApp
        </a>
    </div>

    <nav class="space-y-2">
        <a href="{{ route('dashboard') }}"
           class="block py-2 px-4 rounded hover:bg-blue-800 transition">
            Dashboard
        </a>
        <a href="#"
           class="block py-2 px-4 rounded hover:bg-blue-800 transition">
            Absensi
        </a>
        <a href="#"
           class="block py-2 px-4 rounded hover:bg-blue-800 transition">
            Cuti
        </a>
        <a href="#"
           class="block py-2 px-4 rounded hover:bg-blue-800 transition">
            Laporan
        </a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                    class="w-full text-left py-2 px-4 rounded hover:bg-blue-800 transition">
                Logout
            </button>
        </form>
    </nav>
</div>
