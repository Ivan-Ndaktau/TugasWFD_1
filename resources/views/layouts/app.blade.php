<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PromoWebsite - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-sky-100">
    <!-- Navbar -->
    <nav class="bg-indigo-900 text-white shadow-lg">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <a href="{{ route('promotions.index') }}" class="text-2xl font-bold">Website Promosi Game</a>
            <a href="{{ url('promotions/create') }}"
               class="px-4 py-2 bg-white text-blue-600 rounded-md hover:bg-gray-100 transition">
                Tambah Promosi
            </a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif
        
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6 mt-12">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; {{ date('Y') }} PromoWebsite. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>