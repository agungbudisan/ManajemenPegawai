<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Welcome</title>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="text-center">
        <h1 class="text-3xl font-bold mb-4">Manajemen Pegawai</h1>
        <p class="text-lg text-gray-700 mb-6">Selamat datang di sistem manajemen pegawai. Di sini, Anda dapat mengelola data pegawai dengan mudah dan efisien. Silakan login untuk melanjutkan.</p>
        <a href="{{ route('login') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Login</a>
    </div>
</body>
</html>
