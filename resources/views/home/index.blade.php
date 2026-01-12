@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-b from-maroon-50 to-white">
    {{-- ================= HEADER HERO ================= --}}
    <div class="relative bg-gradient-to-r from-maroon-900 to-maroon-700 text-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 py-16 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <div class="flex items-center mb-4">
                        <div class="w-10 h-10 rounded-full bg-white flex items-center justify-center mr-3">
                            <svg class="w-6 h-6 text-maroon-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                            </svg>
                        </div>
                        <h1 class="text-3xl md:text-4xl font-bold">Ayyra Stationery</h1>
                    </div>
                    <h2 class="text-2xl md:text-3xl font-bold mb-4">Alat Tulis yang Membuat Setiap Momen Lebih Berwarna!</h2>
                    <p class="text-maroon-200 mb-6">Temukan alat tulis aesthetic untuk kebutuhan sekolah, kantor, atau koleksi pribadimu.</p>
                    <a href="#produk" class="inline-flex items-center bg-white text-maroon-900 font-semibold px-6 py-3 rounded-lg hover:bg-maroon-100 transition duration-300">
                        Jelajahi Produk
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
                <div class="md:w-1/2 flex justify-center">
                    <div class="relative w-64 h-64 md:w-80 md:h-80">
                        <div class="absolute inset-0 bg-gradient-to-r from-maroon-600 to-maroon-800 rounded-full opacity-20 animate-pulse"></div>
                        <div class="relative flex items-center justify-center h-full">
                            <div class="bg-white p-6 rounded-2xl shadow-2xl transform rotate-6">
                                <div class="flex space-x-2 mb-4">
                                    <div class="w-8 h-8 rounded-full bg-maroon-500"></div>
                                    <div class="w-8 h-8 rounded-full bg-maroon-300"></div>
                                    <div class="w-8 h-8 rounded-full bg-maroon-700"></div>
                                </div>
                                <div class="text-center">
                                    <p class="text-maroon-900 font-bold text-lg">Stationery</p>
                                    <p class="text-gray-600 text-sm">Aesthetic & Fun</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ================= KATEGORI PRODUK ================= --}}
    <div class="max-w-7xl mx-auto px-4 py-12 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Koleksi Alat Tulis Kami</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 mb-12">
            <div class="bg-white rounded-xl p-4 text-center shadow-md hover:shadow-lg transition cursor-pointer border border-maroon-100">
                <div class="w-12 h-12 bg-maroon-100 rounded-full flex items-center justify-center mx-auto mb-3">
                    <svg class="w-6 h-6 text-maroon-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                    </svg>
                </div>
                <p class="font-medium text-gray-800">Pulpen</p>
            </div>
            <div class="bg-white rounded-xl p-4 text-center shadow-md hover:shadow-lg transition cursor-pointer border border-maroon-100">
                <div class="w-12 h-12 bg-maroon-100 rounded-full flex items-center justify-center mx-auto mb-3">
                    <svg class="w-6 h-6 text-maroon-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <p class="font-medium text-gray-800">Notes</p>
            </div>
            <div class="bg-white rounded-xl p-4 text-center shadow-md hover:shadow-lg transition cursor-pointer border border-maroon-100">
                <div class="w-12 h-12 bg-maroon-100 rounded-full flex items-center justify-center mx-auto mb-3">
                    <svg class="w-6 h-6 text-maroon-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <p class="font-medium text-gray-800">Sticker</p>
            </div>
            <div class="bg-white rounded-xl p-4 text-center shadow-md hover:shadow-lg transition cursor-pointer border border-maroon-100">
                <div class="w-12 h-12 bg-maroon-100 rounded-full flex items-center justify-center mx-auto mb-3">
                    <svg class="w-6 h-6 text-maroon-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                    </svg>
                </div>
                <p class="font-medium text-gray-800">Washi Tape</p>
            </div>
            <div class="bg-white rounded-xl p-4 text-center shadow-md hover:shadow-lg transition cursor-pointer border border-maroon-100">
                <div class="w-12 h-12 bg-maroon-100 rounded-full flex items-center justify-center mx-auto mb-3">
                    <svg class="w-6 h-6 text-maroon-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                </div>
                <p class="font-medium text-gray-800">Planner</p>
            </div>
            <div class="bg-white rounded-xl p-4 text-center shadow-md hover:shadow-lg transition cursor-pointer border border-maroon-100">
                <div class="w-12 h-12 bg-maroon-100 rounded-full flex items-center justify-center mx-auto mb-3">
                    <svg class="w-6 h-6 text-maroon-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                    </svg>
                </div>
                <p class="font-medium text-gray-800">Aksesoris</p>
            </div>
        </div>
    </div>

    {{-- ================= FILTER & PRODUK ================= --}}
    <div id="produk" class="max-w-7xl mx-auto px-4 py-6 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-8">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">
                    Produk Terbaru
                </h1>
                <p class="text-gray-500 mt-1">
                    Temukan alat tulis aesthetic sesuai kebutuhanmu
                </p>
            </div>

            {{-- Filter Category --}}
            <form method="GET">
                <select
                    name="category"
                    onchange="this.form.submit()"
                    class="border border-maroon-300 rounded-lg px-4 py-2 text-gray-700 focus:ring-2 focus:ring-maroon-500 focus:outline-none bg-white"
                >
                    <option value="">Semua Kategori</option>
                    @foreach ($categories as $category)
                        <option
                            value="{{ $category->slug }}"
                            {{ request('category') == $category->slug ? 'selected' : '' }}
                        >
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </form>
        </div>

        {{-- ================= PRODUCT GRID ================= --}}
        @if ($products->count())
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach ($products as $product)
                    <a href="{{ route('product.show', $product->slug) }}"
                       class="group border border-maroon-100 rounded-xl overflow-hidden hover:shadow-lg transition bg-white hover:border-maroon-300">

                        {{-- Badge --}}
                        @if($loop->iteration <= 2)
                        <div class="absolute top-2 left-2 bg-maroon-600 text-white text-xs font-bold px-3 py-1 rounded-full">
                            Baru
                        </div>
                        @endif

                        {{-- Image --}}
                        <div class="h-48 bg-gradient-to-br from-maroon-50 to-white overflow-hidden flex items-center justify-center p-4">
                            @if($product->images->first())
                                <img
                                    src="{{ asset('storage/' . $product->images->first()->image) }}"
                                    alt="{{ $product->name }}"
                                    class="w-full h-full object-contain group-hover:scale-105 transition duration-300"
                                >
                            @else
                                <div class="flex flex-col items-center justify-center">
                                    <svg class="w-16 h-16 text-maroon-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                    </svg>
                                    <p class="text-maroon-400 text-sm mt-2">Gambar tidak tersedia</p>
                                </div>
                            @endif
                        </div>

                        {{-- Content --}}
                        <div class="p-4">
                            <p class="text-sm text-maroon-600 font-medium">
                                {{ $product->category->name }}
                            </p>

                            <h3 class="text-lg font-semibold text-gray-800 mt-1 line-clamp-2">
                                {{ $product->name }}
                            </h3>

                            <div class="flex items-center mt-2">
                                @for($i = 0; $i < 5; $i++)
                                    <svg class="w-4 h-4 {{ $i < 4 ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                @endfor
                                <span class="text-gray-500 text-sm ml-2">({{ rand(10, 50) }})</span>
                            </div>

                            <p class="text-sm text-gray-500 mt-2">
                                Mulai dari
                            </p>

                            <div class="flex items-center justify-between mt-1">
                                <p class="text-lg font-bold text-maroon-700">
                                    Rp {{ number_format($product->variants->min('price')) }}
                                </p>
                                <button class="bg-maroon-600 text-white p-2 rounded-full hover:bg-maroon-700 transition">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

            {{-- Pagination --}}
            <div class="mt-10">
                {{ $products->withQueryString()->links() }}
            </div>
        @else
            <div class="text-center py-20 bg-white rounded-xl border border-maroon-100">
                <div class="w-24 h-24 bg-maroon-50 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-12 h-12 text-maroon-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <p class="text-gray-500 text-lg">
                    Produk belum tersedia untuk kategori ini
                </p>
                <a href="{{ url()->current() }}" class="inline-block mt-4 text-maroon-600 hover:text-maroon-800 font-medium">
                    Lihat semua produk
                </a>
            </div>
        @endif
    </div>

    {{-- ================= TESTIMONI ================= --}}
    <div class="max-w-7xl mx-auto px-4 py-12 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Kata Pelanggan Bahagia</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-xl border border-maroon-100 shadow-sm">
                <div class="flex items-center mb-4">
                    <div class="w-10 h-10 rounded-full bg-gradient-to-r from-maroon-400 to-maroon-600 flex items-center justify-center text-white font-bold">
                        A
                    </div>
                    <div class="ml-3">
                        <p class="font-semibold">Anita Sari</p>
                        <p class="text-gray-500 text-sm">Mahasiswa</p>
                    </div>
                </div>
                <p class="text-gray-600">"Pulpen dari Ayyra Stationery sangat nyaman digunakan untuk mencatat. Desainnya juga aesthetic banget!"</p>
            </div>
            <div class="bg-white p-6 rounded-xl border border-maroon-100 shadow-sm">
                <div class="flex items-center mb-4">
                    <div class="w-10 h-10 rounded-full bg-gradient-to-r from-maroon-400 to-maroon-600 flex items-center justify-center text-white font-bold">
                        B
                    </div>
                    <div class="ml-3">
                        <p class="font-semibold">Budi Santoso</p>
                        <p class="text-gray-500 text-sm">Content Creator</p>
                    </div>
                </div>
                <p class="text-gray-600">"Sticker dan washi tape koleksi lengkap! Cocok untuk dekorasi planner dan journaling."</p>
            </div>
            <div class="bg-white p-6 rounded-xl border border-maroon-100 shadow-sm">
                <div class="flex items-center mb-4">
                    <div class="w-10 h-10 rounded-full bg-gradient-to-r from-maroon-400 to-maroon-600 flex items-center justify-center text-white font-bold">
                        R
                    </div>
                    <div class="ml-3">
                        <p class="font-semibold">Rina Melati</p>
                        <p class="text-gray-500 text-sm">Guru</p>
                    </div>
                </div>
                <p class="text-gray-600">"Kualitas produk sangat bagus, pengiriman cepat. Sekarang jadi langganan beli alat tulis di sini."</p>
            </div>
        </div>
    </div>

    {{-- ================= NEWSLETTER ================= --}}
    <div class="bg-gradient-to-r from-maroon-900 to-maroon-700 text-white py-12">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-2xl font-bold mb-4">Berlangganan Newsletter Kami</h2>
            <p class="text-maroon-200 mb-6">Dapatkan info produk terbaru, diskon, dan tips menarik seputar stationery</p>
            <form class="max-w-md mx-auto flex flex-col sm:flex-row gap-3">
                <input type="email" placeholder="Masukkan alamat email Anda" class="flex-grow px-4 py-3 rounded-lg text-gray-900 focus:outline-none focus:ring-2 focus:ring-maroon-300">
                <button type="submit" class="bg-white text-maroon-900 font-semibold px-6 py-3 rounded-lg hover:bg-maroon-100 transition">
                    Berlangganan
                </button>
            </form>
        </div>
    </div>

    {{-- ================= FOOTER ================= --}}
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center mb-4">
                        <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center mr-2">
                            <svg class="w-5 h-5 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold">Ayyra Stationery</h3>
                    </div>
                    <p class="text-gray-400">Alat tulis aesthetic untuk setiap kebutuhan mencatat dan berkarya.</p>
                </div>
                <div>
                    <h4 class="font-bold text-lg mb-4">Kontak Info</h4>
                    <p class="text-gray-400 mb-2">Jl. Stationery No. 123, Jakarta</p>
                    <p class="text-gray-400 mb-2">(021) 1234 5678</p>
                    <p class="text-gray-400">info@ayyrastationery.com</p>
                </div>
                <div>
                    <h4 class="font-bold text-lg mb-4">Kategori</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Pulpen & Pensil</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Notes & Buku</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Sticker & Washi Tape</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Planner & Journal</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-lg mb-4">Ikuti Kami</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="bg-gray-800 w-10 h-10 rounded-full flex items-center justify-center hover:bg-maroon-600 transition">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="bg-gray-800 w-10 h-10 rounded-full flex items-center justify-center hover:bg-maroon-600 transition">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.213c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                        <a href="#" class="bg-gray-800 w-10 h-10 rounded-full flex items-center justify-center hover:bg-maroon-600 transition">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2023 Ayyra Stationery. Semua hak dilindungi.</p>
            </div>
        </div>
    </footer>
</div>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

    body {
        font-family: 'Poppins', sans-serif;
    }

    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    /* Maroon color palette */
    .bg-maroon-50 { background-color: #fdf2f8; }
    .bg-maroon-100 { background-color: #fce7f3; }
    .bg-maroon-300 { background-color: #f9a8d4; }
    .bg-maroon-400 { background-color: #f472b6; }
    .bg-maroon-500 { background-color: #ec4899; }
    .bg-maroon-600 { background-color: #db2777; }
    .bg-maroon-700 { background-color: #be185d; }
    .bg-maroon-800 { background-color: #9d174d; }
    .bg-maroon-900 { background-color: #831843; }

    .text-maroon-50 { color: #fdf2f8; }
    .text-maroon-100 { color: #fce7f3; }
    .text-maroon-200 { color: #fbcfe8; }
    .text-maroon-300 { color: #f9a8d4; }
    .text-maroon-400 { color: #f472b6; }
    .text-maroon-500 { color: #ec4899; }
    .text-maroon-600 { color: #db2777; }
    .text-maroon-700 { color: #be185d; }
    .text-maroon-800 { color: #9d174d; }
    .text-maroon-900 { color: #831843; }

    .border-maroon-100 { border-color: #fce7f3; }
    .border-maroon-300 { border-color: #f9a8d4; }

    .focus\:ring-maroon-500:focus { ring-color: #ec4899; }
</style>
@endsection
