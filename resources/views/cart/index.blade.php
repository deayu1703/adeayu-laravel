@extends('layouts.app')

@section('content')
<div class="bg-[#fdf9f9]">

    {{-- ================= HERO SECTION ================= --}}
    <section class="max-w-7xl mx-auto px-6 py-16 grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
        <div>
            <h1 class="text-4xl font-extrabold text-[#6b1d1d] leading-tight">
                Alat Tulis Lucu <br> yang Bikin Nulis Jadi Mood
            </h1>
            <p class="text-gray-600 mt-4 text-lg">
                Ayyra Stationery menyediakan alat tulis aesthetic, fungsional,
                dan penuh warna untuk menemani harimu.
            </p>

            <div class="mt-6 flex gap-4">
                <a href="#produk"
                   class="bg-[#6b1d1d] text-white px-6 py-3 rounded-lg font-medium hover:bg-[#541616] transition">
                    Belanja Sekarang
                </a>
                <a href="#"
                   class="border border-[#6b1d1d] text-[#6b1d1d] px-6 py-3 rounded-lg font-medium hover:bg-[#6b1d1d] hover:text-white transition">
                    Lihat Katalog
                </a>
            </div>
        </div>

        <div class="flex justify-center">
            <img src="{{ asset('images/hero-stationery.png') }}"
                 alt="Ayyra Stationery"
                 class="w-full max-w-md">
        </div>
    </section>

    {{-- ================= NAV ACTION ================= --}}
    <div class="max-w-7xl mx-auto px-6 flex justify-end gap-6 text-sm mb-6">
        <a href="{{ route('cart.index') }}" class="flex items-center gap-2 text-gray-700 hover:text-[#6b1d1d]">
            🛒 Keranjang
        </a>

        @guest
            <a href="{{ route('login') }}" class="hover:text-[#6b1d1d]">Masuk</a>
            <a href="{{ route('register') }}"
               class="bg-[#6b1d1d] text-white px-4 py-1.5 rounded-md hover:bg-[#541616] transition">
                Daftar
            </a>
        @else
            <a href="{{ route('dashboard') }}" class="hover:text-[#6b1d1d]">
                Dashboard
            </a>
        @endguest
    </div>

    {{-- ================= KEUNGGULAN ================= --}}
    <section class="max-w-7xl mx-auto px-6 py-14">
        <h2 class="text-2xl font-bold text-center text-[#6b1d1d]">
            Kenapa Pilih Ayyra Stationery?
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 mt-10">
            <div class="text-center p-6 bg-white rounded-xl shadow">
                <p class="text-4xl">🎀</p>
                <h3 class="font-semibold text-lg mt-4">Desain Aesthetic</h3>
                <p class="text-gray-500 mt-2">
                    Produk dengan desain lucu, estetik, dan kekinian.
                </p>
            </div>

            <div class="text-center p-6 bg-white rounded-xl shadow">
                <p class="text-4xl">✍️</p>
                <h3 class="font-semibold text-lg mt-4">Nyaman Digunakan</h3>
                <p class="text-gray-500 mt-2">
                    Fungsional untuk pelajar, mahasiswa, dan pekerja kreatif.
                </p>
            </div>

            <div class="text-center p-6 bg-white rounded-xl shadow">
                <p class="text-4xl">🚚</p>
                <h3 class="font-semibold text-lg mt-4">Pengiriman Aman</h3>
                <p class="text-gray-500 mt-2">
                    Dikemas rapi dan dikirim dengan aman sampai tujuan.
                </p>
            </div>
        </div>
    </section>

    {{-- ================= PRODUK ================= --}}
    <section id="produk" class="max-w-7xl mx-auto px-6 py-14">
        <h2 class="text-2xl font-bold text-[#6b1d1d] mb-8">
            Koleksi Alat Tulis
        </h2>

        @if ($products->count())
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach ($products as $product)
                    <a href="{{ route('product.show', $product->slug) }}"
                       class="bg-white rounded-xl overflow-hidden shadow hover:shadow-lg transition group">

                        <div class="h-48 bg-gray-100 overflow-hidden">
                            <img src="{{ asset('storage/' . ($product->images->first()->image ?? '')) }}"
                                 alt="{{ $product->name }}"
                                 class="w-full h-full object-cover group-hover:scale-105 transition">
                        </div>

                        <div class="p-4">
                            <p class="text-sm text-[#6b1d1d] font-medium">
                                {{ $product->category->name }}
                            </p>

                            <h3 class="font-semibold text-gray-800 mt-1 line-clamp-2">
                                {{ $product->name }}
                            </h3>

                            <p class="text-sm text-gray-500 mt-1">
                                Mulai dari
                            </p>

                            <p class="text-lg font-bold text-[#6b1d1d]">
                                Rp {{ number_format($product->variants->min('price')) }}
                            </p>
                        </div>
                    </a>
                @endforeach
            </div>

            <div class="mt-10">
                {{ $products->withQueryString()->links() }}
            </div>
        @else
            <p class="text-center text-gray-500 py-20">
                Produk belum tersedia.
            </p>
        @endif
    </section>

    {{-- ================= FOOTER ================= --}}
    <footer class="bg-[#6b1d1d] text-white py-10 mt-16">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div>
                <h3 class="font-bold text-lg">Ayyra Stationery</h3>
                <p class="text-sm text-gray-200 mt-2">
                    Teman setia menulis, merencanakan, dan berkreasi.
                </p>
            </div>

            <div>
                <h4 class="font-semibold mb-2">Menu</h4>
                <ul class="text-sm space-y-1 text-gray-200">
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#">Produk</a></li>
                    <li><a href="#">Tentang Kami</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-semibold mb-2">Kontak</h4>
                <p class="text-sm text-gray-200">
                    Email: ayyra.stationery@email.com
                </p>
            </div>
        </div>

        <p class="text-center text-sm text-gray-300 mt-8">
            © {{ date('Y') }} Ayyra Stationery. All rights reserved.
        </p>
    </footer>

</div>
@endsection
