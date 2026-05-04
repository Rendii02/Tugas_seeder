<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-10 bg-gray-50">
    <div class="max-w-lg mx-auto bg-white p-6 rounded shadow">
        <h1 class="text-xl font-bold mb-4">Tambah Data Mahasiswa</h1>
        <form action="{{ route('mahasiswa.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="block">Nama</label>
                <input type="text" name="nama" class="w-full border p-2 rounded" required>
            </div>
            <div class="mb-3">
                <label class="block">NPM</label>
                <input type="text" name="npm" class="w-full border p-2 rounded" required>
            </div>
            <div class="mb-3">
                <label class="block">NIDN</label>
                <input type="text" name="nidn" class="w-full border p-2 rounded" required>
            </div>
            <div class="flex gap-2">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
                <a href="{{ route('mahasiswa.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>