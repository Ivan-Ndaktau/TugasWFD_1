<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebsitePromosi - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-br from-gray-900 via-purple-900 to-violet-900 flex flex-col min-h-screen">
    <!-- Navbar -->
    <nav class="sticky top-0 z-10 bg-gradient-to-r from-indigo-900 to-purple-800 text-white shadow-lg">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <a href="{{ route('promotions.index') }}" class="text-2xl font-bold">Website Promosi</a>
            <a href="{{ url('promotions/create') }}"
               class="px-4 py-2 bg-cyan-500 text-gray-900 rounded-md hover:bg-gray-100 transition font-bold">
                Tambah Promosi
            </a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container flex-grow mx-auto px-4 py-8">
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif
        
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; {{ date('Y') }} PromoWebsite. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>