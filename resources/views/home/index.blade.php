@extends('layouts.app')

@section('content')
<div class="bg-[#fdecec] overflow-hidden">

    {{-- ================= HERO ================= --}}
    <section class="relative max-w-7xl mx-auto px-6 pt-14 pb-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

            {{-- LEFT --}}
            <div>
                <h1 class="text-4xl md:text-5xl font-extrabold text-[#e8a2a8] leading-tight">
                    Stationery yang Bikin <br>
                    Nulis Jadi Lebih Seru
                </h1>

                <p class="text-gray-600 mt-5 text-lg max-w-md">
                    Ayyra Stationery menghadirkan alat tulis lucu, aesthetic,
                    dan fungsional untuk menemani hari produktifmu.
                </p>

                <div class="mt-7 flex items-center gap-4">
                    <a href="#produk"
                       class="bg-[#e8a2a8] text-white px-6 py-3 rounded-lg font-semibold hover:opacity-90 transition">
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
                <img
                    src="{{ asset('images/stationery.jpg') }}"
                    alt="Ayyra Stationery"
                    class="w-full max-w-md object-contain rounded-3xl">
            </div>

        </div>
    </section>

    {{-- ================= WHAT WE OFFER ================= --}}
    <section class="bg-white py-20">
        <div class="max-w-6xl mx-auto px-6 text-center">

            <h2 class="text-2xl font-bold text-[#e8a2a8] mb-12">
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
    <section id="produk" class="py-20 bg-[#fdecec]">
        <div class="max-w-6xl mx-auto px-6 text-center">

            <h2 class="text-2xl font-bold text-[#e8a2a8] mb-10">
                Temukan Stationery Favoritmu
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                @foreach ($products->take(6) as $product)
                    <a href="{{ route('product.show', $product->slug) }}"
                       class="group bg-[#f6e6e6] rounded-xl p-5 hover:shadow-lg transition">

                        <div class="h-40 flex items-center justify-center mb-4">
                            <img
                                src="{{ asset('storage/' . optional($product->images->first())->image) }}"
                                alt="{{ $product->name }}"
                                class="h-full object-contain group-hover:scale-105 transition">
                        </div>

                        <h3 class="font-bold text-gray-800">
                            {{ $product->name }}
                        </h3>

                        <p class="text-sm text-gray-600 mt-1">
                            Mulai dari
                        </p>

                        <p class="font-bold text-[#e8a2a8]">
                            Rp {{ number_format($product->variants->min('price')) }}
                        </p>
                    </a>
                @endforeach
            </div>

            <div class="mt-10">
                <a href="{{ route('home') }}"
                   class="inline-block text-sm font-semibold text-[#e8a2a8] underline">
                    Lihat Semua Produk →
                </a>
            </div>
        </div>
    </section>

</div>
@endsection
