<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Edit Pegawai</title>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="max-w-md w-full bg-white rounded-lg shadow-md p-8">
        <h1 class="text-3xl font-bold mb-6">Edit Pegawai</h1>

        <form action="{{ url('pegawais/' . $pegawai->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label for="nama" class="block text-gray-700">Nama:</label>
                <input type="text" id="nama" name="nama" value="{{ $pegawai->nama }}" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
            </div>
            <div>
                <label for="nip" class="block text-gray-700">NIP:</label>
                <input type="text" id="nip" name="nip" value="{{ $pegawai->nip }}" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
            </div>
            <div>
                <label for="jabatan" class="block text-gray-700">Jabatan:</label>
                <input type="text" id="jabatan" name="jabatan" value="{{ $pegawai->jabatan }}" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
            </div>
            <div>
                <label for="alamat" class="block text-gray-700">Alamat:</label>
                <input type="text" id="alamat" name="alamat" value="{{ $pegawai->alamat }}" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Update Pegawai</button>
        </form>

        <a href="{{ url('/pegawais') }}" class="mt-4 inline-block text-blue-500 hover:underline">Kembali ke Daftar</a>
    </div>
</body>
</html>
