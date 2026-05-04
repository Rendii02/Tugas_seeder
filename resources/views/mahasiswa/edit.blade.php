<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-10 bg-gray-50">
    <div class="max-w-lg mx-auto bg-white p-6 rounded shadow">
        <h1 class="text-xl font-bold mb-4">Edit Data Mahasiswa</h1>
        <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="block">Nama</label>
                <input type="text" name="nama" value="{{ $mahasiswa->nama }}" class="w-full border p-2 rounded" required>
            </div>
            <div class="mb-3">
                <label class="block">NPM</label>
                <input type="text" name="npm" value="{{ $mahasiswa->npm }}" class="w-full border p-2 rounded" required>
            </div>
            <div class="mb-3">
                <label class="block">NIDN</label>
                <input type="text" name="nidn" value="{{ $mahasiswa->nidn }}" class="w-full border p-2 rounded" required>
            </div>
            <div class="flex gap-2">
                <button type="submit" class="bg-orange-600 text-white px-4 py-2 rounded">Update</button>
                <a href="{{ route('mahasiswa.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>