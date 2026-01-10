<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">

<div class="max-w-4xl mx-auto mt-16 bg-white p-8 rounded-lg shadow">

    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">
                Dashboard Admin
            </h1>
            <p class="text-gray-600 mt-1">
                Selamat datang, {{ auth()->user()->name }} 👋
            </p>
        </div>

        <!-- Logout -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button
                type="submit"
                class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md text-sm transition"
            >
                Logout
            </button>
        </form>
    </div>

    <!-- Menu -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

        <!-- Category -->
        <a
            href="{{ route('admin.categories.index') }}"
            class=" p-6 bg-gray-800 text-white rounded-lg hover:bg-gray-700 transition flex items-center"
        >
            <span class="text-2xl mr-3">📂</span>
            <div>
                <h3 class="font-bold">Kategori</h3>
                <p class="text-sm text-gray-300 mt-1">Kelola kategori produk</p>
            </div>
        </a>

        <!-- Product -->
        <a
            href="{{ route('admin.products.index') }}"
            class=" p-6 bg-blue-800 text-white rounded-lg hover:bg-blue-700 transition flex items-center"
        >
            <span class="text-2xl mr-3">📦</span>
            <div>
                <h3 class="font-bold">Produk</h3>
                <p class="text-sm text-gray-300 mt-1">Kelola produk & varian</p>
            </div>
        </a>

        <!-- Address -->
        <a
            href="{{ route('admin.addresses.index') }}"
            class=" p-6 bg-green-800 text-white rounded-lg hover:bg-green-700 transition flex items-center"
        >
            <span class="text-2xl mr-3">📍</span>
            <div>
                <h3 class="font-bold">Alamat</h3>
                <p class="text-sm text-gray-300 mt-1">Kelalamat pengiriman</p>
            </div>
        </a>

    </div>

    <!-- Statistics -->
    <div class="mt-10 pt-6 border-t border-gray-200">
        <h2 class="text-lg font-semibold text-gray-800 mb-4">Ringkasan</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-blue-50 p-4 rounded-lg">
                <p class="text-sm text-gray-600">Total Kategori</p>
                <p class="text-2xl font-bold text-blue-700">{{ \App\Models\Category::count() ?? 0 }}</p>
            </div>
            <div class="bg-green-50 p-4 rounded-lg">
                <p class="text-sm text-gray-600">Total Produk</p>
                <p class="text-2xl font-bold text-green-700">{{ \App\Models\Product::count() ?? 0 }}</p>
            </div>
            <div class="bg-purple-50 p-4 rounded-lg">
                <p class="text-sm text-gray-600">Alamat Tersedia</p>
                <p class="text-2xl font-bold text-purple-700">{{ \App\Models\Address::count() ?? 0 }}</p>
            </div>
        </div>
    </div>

    <!-- Quick Links -->
    <div class="mt-8 pt-6 border-t border-gray-200">
        <h2 class="text-lg font-semibold text-gray-800 mb-4">Aksi Cepat</h2>
        <div class="flex flex-wrap gap-3">
            <a href="{{ route('admin.products.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md text-sm transition">
                + Tambah Produk
            </a>
            <a href="{{ route('admin.categories.create') }}" class="bg-gray-700 hover:bg-gray-800 text-white px-4 py-2 rounded-md text-sm transition">
                + Tambah Kategori
            </a>
            <a href="{{ route('admin.addresses.create') }}" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-md text-sm transition">
                + Tambah Alamat
            </a>
        </div>
    </div>

</div>

</body>
</html>
