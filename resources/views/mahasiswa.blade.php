<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-10">
    <h1 class="text-2xl font-bold mb-5">Data Mahasiswa</h1>
    <table class="w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-100">
                <th class="border p-2">No</th>
                <th class="border p-2">Nama</th>
                <th class="border p-2">Email</th>
                <th class="border p-2">Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $key => $mhs)
            <tr>
                <td class="border p-2 text-center">{{ $key + 1 }}</td>
                <td class="border p-2">{{ $mhs->nama }}</td>
                <td class="border p-2">{{ $mhs->email }}</td>
                <td class="border p-2">{{ $mhs->alamat }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>