<x-app-layout>
    {{-- Header atas --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- Konten dashboard --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h1 class="text-3xl font-semibold text-blue-700 mb-4">Dashboard</h1>
                <p>Selamat datang, {{ auth()->user()->name }}!</p>

                <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-blue-100 p-4 rounded shadow">
                        <h2 class="text-xl font-bold mb-2">Absensi Hari Ini</h2>
                        <p class="text-3xl font-semibold text-blue-700">✔️ Hadir</p>
                    </div>
                    <div class="bg-blue-100 p-4 rounded shadow">
                        <h2 class="text-xl font-bold mb-2">Pengajuan Cuti</h2>
                        <p class="text-3xl font-semibold text-blue-700">2 Pengajuan</p>
                    </div>
                    <div class="bg-blue-100 p-4 rounded shadow">
                        <h2 class="text-xl font-bold mb-2">Grafik Performa</h2>
                        <p class="text-blue-700">Coming Soon...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
