<!DOCTYPE html>
<html>
<head>
    <title>Detail Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-10 bg-gray-50">
    <div class="max-w-lg mx-auto bg-white p-6 rounded shadow">
        <h1 class="text-xl font-bold mb-4">Detail Mahasiswa</h1>
        <p><strong>Nama:</strong> {{ $mahasiswa->nama }}</p>
        <p><strong>NPM:</strong> {{ $mahasiswa->npm }}</p>
        <p><strong>NIDN:</strong> {{ $mahasiswa->nidn }}</p>
        <div class="mt-4">
            <a href="{{ route('mahasiswa.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Kembali</a>
        </div>
    </div>
</body>
</html>