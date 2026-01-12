@extends('layouts.app')

@section('content')
<div class="bg-[#fdf8f8] overflow-hidden">

    {{-- ================= HERO ================= --}}
    <section class="relative max-w-7xl mx-auto px-6 pt-14 pb-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

            {{-- LEFT --}}
            <div>
                <h1 class="text-4xl md:text-5xl font-extrabold text-[#6b1d1d] leading-tight">
                    Stationery yang Bikin <br>
                    Nulis Jadi Lebih Seru
                </h1>

                <p class="text-gray-600 mt-5 text-lg max-w-md">
                    Ayyra Stationery menghadirkan alat tulis lucu, aesthetic,
                    dan fungsional untuk menemani hari produktifmu.
                </p>

                <div class="mt-7 flex items-center gap-4">
                    <a href="#produk"
                       class="bg-[#6b1d1d] text-white px-6 py-3 rounded-lg font-semibold hover:bg-[#541616] transition">
                        Belanja Sekarang
                    </a>

                    <div class="flex items-center gap-2 bg-white border px-4 py-3 rounded-lg shadow-sm text-sm">
                        📞
                        <span class="font-semibold text-gray-700">
                            +62 812-3456-7890
                        </span>
                    </div>
                </div>
            </div>

            {{-- RIGHT --}}
            <div class="flex justify-center">
                <img src="{{ asset('images/hero-stationery.png') }}"
                     class="w-full max-w-md"
                     alt="Ayyra Stationery">
            </div>

        </div>
    </section>

    {{-- ================= WHAT WE OFFER ================= --}}
    <section class="bg-white py-20">
        <div class="max-w-6xl mx-auto px-6 text-center">

            <h2 class="text-2xl font-bold text-[#6b1d1d] mb-12">
                Apa yang Kami Tawarkan
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div>
                    <div class="text-4xl mb-4">✏️</div>
                    <h3 class="font-bold text-lg">Desain Aesthetic</h3>
                    <p class="text-gray-500 mt-2">
                        Alat tulis lucu dan estetik yang bikin semangat.
                    </p>
                </div>

                <div>
                    <div class="text-4xl mb-4">📒</div>
                    <h3 class="font-bold text-lg">Kualitas Terbaik</h3>
                    <p class="text-gray-500 mt-2">
                        Nyaman dipakai untuk belajar dan bekerja.
                    </p>
                </div>

                <div>
                    <div class="text-4xl mb-4">🚚</div>
                    <h3 class="font-bold text-lg">Pengiriman Aman</h3>
                    <p class="text-gray-500 mt-2">
                        Packing rapi dan aman sampai tujuan.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ================= DISCOVER PRODUCTS ================= --}}
    <section id="produk" class="py-20 bg-[#fdf8f8]">
        <div class="max-w-6xl mx-auto px-6 text-center">

            <h2 class="text-2xl font-bold text-[#6b1d1d] mb-10">
                Temukan Stationery Favoritmu
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">

                @foreach ($products->take(6) as $product)
                <a href="{{ route('product.show', $product->slug) }}"
                   class="group bg-[#f6e6e6] rounded-xl p-5 hover:shadow-lg transition">

                    <div class="h-40 flex items-center justify-center mb-4">
                        <img src="{{ asset('storage/' . ($product->images->first()->image ?? '')) }}"
                             class="h-full object-contain group-hover:scale-105 transition"
                             alt="{{ $product->name }}">
                    </div>

                    <h3 class="font-bold text-gray-800">
                        {{ $product->name }}
                    </h3>

                    <p class="text-sm text-gray-600 mt-1">
                        Mulai dari
                    </p>

                    <p class="font-bold text-[#6b1d1d]">
                        Rp {{ number_format($product->variants->min('price')) }}
                    </p>
                </a>
                @endforeach

            </div>

            <div class="mt-10">
                <a href="{{ route('home') }}"
                   class="inline-block text-sm font-semibold text-[#6b1d1d] underline">
                    Lihat Semua Produk →
                </a>
            </div>
        </div>
    </section>

    {{-- ================= CUSTOM ORDER FORM ================= --}}
    <section class="py-20 bg-white">
        <div class="max-w-3xl mx-auto px-6">

            <h2 class="text-2xl font-bold text-[#6b1d1d] text-center mb-10">
                📌 Pesan Stationery Custom Sekarang
            </h2>

            <form class="bg-white border rounded-2xl p-8 space-y-5 shadow">

                <input type="text" placeholder="Jenis Produk (Notebook, Pulpen, dll)"
                       class="w-full border rounded-lg p-3 text-sm">

                <input type="text" placeholder="Warna / Tema yang Diinginkan"
                       class="w-full border rounded-lg p-3 text-sm">

                <input type="number" placeholder="Jumlah"
                       class="w-full border rounded-lg p-3 text-sm">

                <input type="date"
                       class="w-full border rounded-lg p-3 text-sm">

                <button type="submit"
                        class="w-full bg-[#6b1d1d] hover:bg-[#541616] text-white py-3 rounded-lg font-bold">
                    Kirim Permintaan
                </button>
            </form>

        </div>
    </section>

    {{-- ================= FOOTER ================= --}}
    <footer class="bg-[#6b1d1d] text-white pt-14 pb-10">
        <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-8">

            <div>
                <h3 class="font-bold text-lg">Ayyra Stationery</h3>
                <p class="text-sm text-gray-200 mt-3">
                    Stationery lucu untuk hari yang lebih produktif.
                </p>
            </div>

            <div>
                <h4 class="font-semibold mb-3">Menu</h4>
                <ul class="space-y-2 text-sm text-gray-200">
                    <li>Beranda</li>
                    <li>Produk</li>
                    <li>Kontak</li>
                </ul>
            </div>

            <div>
                <h4 class="font-semibold mb-3">Kontak</h4>
                <p class="text-sm text-gray-200">
                    ayyra.stationery@email.com
                </p>
            </div>

        </div>

        <p class="text-center text-sm text-gray-300 mt-10">
            © {{ date('Y') }} Ayyra Stationery. All rights reserved.
        </p>
    </footer>

</div>
@endsection
