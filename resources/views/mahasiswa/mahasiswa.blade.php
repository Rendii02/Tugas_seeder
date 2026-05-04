<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa - IF D 24</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-10 bg-gray-100">
    <div class="max-w-6xl mx-auto bg-white p-8 shadow-md rounded-lg">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Daftar Data Mahasiswa</h1>
            <a href="{{ route('mahasiswa.create') }}" class="bg-blue-600 text-white px-5 py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
                + Tambah Mahasiswa
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full border-collapse border border-gray-200">
                <thead>
                    <tr class="bg-gray-200 text-gray-700">
                        <th class="border border-gray-300 p-3 text-center">No</th>
                        <th class="border border-gray-300 p-3 text-left">Nama</th>
                        <th class="border border-gray-300 p-3 text-left">NPM</th>
                        <th class="border border-gray-300 p-3 text-left">NIDN</th>
                        <th class="border border-gray-300 p-3 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($data as $key => $mhs)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="border border-gray-300 p-3 text-center">{{ $key + 1 }}</td>
                        <td class="border border-gray-300 p-3">{{ $mhs->nama }}</td>
                        <td class="border border-gray-300 p-3">{{ $mhs->npm }}</td>
                        <td class="border border-gray-300 p-3">{{ $mhs->nidn }}</td>
                        <td class="border border-gray-300 p-3 text-center">
                            <div class="flex justify-center gap-4">
                                <a href="{{ route('mahasiswa.edit', $mhs->id) }}" class="text-yellow-600 font-bold hover:underline">Edit</a>
                                <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST" onsubmit="return confirm('Hapus data?')">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="text-red-500 font-bold hover:underline">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="p-10 text-center text-gray-500 italic">Data kosong, Den. Silakan tambah data baru.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>