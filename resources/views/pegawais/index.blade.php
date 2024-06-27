<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Daftar Pegawai</title>
    <style>
        .fixed-width {
            width: 200px;
        }
    </style>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-7xl mx-auto">
        <h1 class="text-3xl font-bold mb-6">Daftar Pegawai</h1>

        @auth
            <form action="{{ route('logout') }}" method="POST" class="inline">
                @csrf
                <button type="submit" onclick="return confirmLogout()" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500">Logout</button>
            </form>
        @endauth

        <a href="{{ url('pegawais/create') }}" class="ml-4 bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Tambah Pegawai Baru</a>

        <table class="min-w-full bg-white rounded-lg shadow-md mt-6">
            <thead class="bg-gray-200 text-gray-700">
                <tr>
                    <th class="py-2 px-4 text-left fixed-width">Nama</th>
                    <th class="py-2 px-4 text-left fixed-width">NIP</th>
                    <th class="py-2 px-4 text-left fixed-width">Jabatan</th>
                    <th class="py-2 px-4 text-left fixed-width">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pegawais as $pegawai)
                    <tr class="border-b">
                        <td class="py-2 px-4 fixed-width">{{ $pegawai->nama }}</td>
                        <td class="py-2 px-4 fixed-width">{{ $pegawai->nip }}</td>
                        <td class="py-2 px-4 fixed-width">{{ $pegawai->jabatan }}</td>
                        <td class="py-2 px-4 fixed-width">
                            <a href="{{ url('pegawais/' . $pegawai->id) }}" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 inline-block">Lihat</a>
                            <a href="{{ url('pegawais/' . $pegawai->id . '/edit') }}" class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 inline-block">Edit</a>
                            <form id="deleteForm" action="{{ url('pegawais/' . $pegawai->id) }}" method="POST" class="inline-block">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" onclick="return confirmDelete()" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        function confirmDelete() {
            return confirm("Apakah Anda yakin ingin menghapus data pegawai ini?");
        }

        function confirmLogout() {
            return confirm("Apakah Anda yakin ingin logout?");
        }
    </script>
</body>
</html>
