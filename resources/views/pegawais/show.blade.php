<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Detail Pegawai</title>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="max-w-md w-full bg-white rounded-lg shadow-md p-8">
        <h1 class="text-3xl font-bold mb-6">Detail Pegawai</h1>

        <p class="mb-4"><strong>Nama:</strong> {{ $pegawai->nama }}</p>
        <p class="mb-4"><strong>NIP:</strong> {{ $pegawai->nip }}</p>
        <p class="mb-4"><strong>Jabatan:</strong> {{ $pegawai->jabatan }}</p>
        <p class="mb-4"><strong>Alamat:</strong> {{ $pegawai->alamat }}</p>

        <div class="flex space-x-4">
            <a href="{{ url('/pegawais') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Kembali ke Daftar</a>
            <form action="{{ url('pegawais/' . $pegawai->id . '/edit') }}" method="GET" class="inline">
                @csrf
                <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500">Edit</button>
            </form>
            <form id="deleteForm" action="{{ url('pegawais/' . $pegawai->id) }}" method="POST" class="inline">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" onclick="return confirmDelete()" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500">Hapus</button>
            </form>
        </div>
    </div>

    <script>
        function confirmDelete() {
            return confirm("Apakah Anda yakin ingin menghapus data pegawai ini?");
        }
    </script>
</body>
</html>
