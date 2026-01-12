@extends('layouts.app')

@section('content')
<div class="bg-[#FDF8F7]">

    {{-- ================= HERO SECTION ================= --}}
    <section class="max-w-7xl mx-auto px-4 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
            <div>
                <h1 class="text-4xl font-bold text-[#6B1E23] leading-tight">
                    Stationery yang Membuat <br> Setiap Momen Lebih Berarti
                </h1>
                <p class="mt-4 text-gray-600">
                    Ayyra Stationery menyediakan alat tulis lucu, aesthetic, dan berkualitas
                    untuk menemani belajar, bekerja, dan journaling harianmu.
                </p>

                <div class="mt-6 flex gap-4">
                    <a href="#produk"
                        class="bg-[#6B1E23] text-white px-6 py-3 rounded-xl shadow hover:bg-[#57171B] transition">
                        Belanja Sekarang
                    </a>
                    <a href="#custom"
                        class="border border-[#6B1E23] text-[#6B1E23] px-6 py-3 rounded-xl hover:bg-[#6B1E23] hover:text-white transition">
                        Custom Stationery
                    </a>
                </div>
            </div>

            <div class="flex justify-center">
                <img src="{{ asset('images/hero-stationery.png') }}"
                    alt="Ayyra Stationery"
                    class="w-full max-w-md">
            </div>
        </div>
    </section>

    {{-- ================= WHAT WE OFFER ================= --}}
    <section class="bg-white py-14">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-2xl font-bold text-center text-[#6B1E23] mb-10">
                Apa yang Kami Tawarkan
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-8 text-center">
                <div class="p-6 rounded-2xl shadow bg-[#FDF1F1]">
                    <p class="text-xl mb-2">🎀</p>
                    <h3 class="font-semibold text-gray-800">Desain Lucu & Aesthetic</h3>
                    <p class="text-sm text-gray-600 mt-2">
                        Cocok untuk pelajar, mahasiswa, hingga pecinta journaling.
                    </p>
                </div>

                <div class="p-6 rounded-2xl shadow bg-[#FDF1F1]">
                    <p class="text-xl mb-2">📦</p>
                    <h3 class="font-semibold text-gray-800">Kualitas Terjamin</h3>
                    <p class="text-sm text-gray-600 mt-2">
                        Produk dipilih dengan standar kualitas terbaik.
                    </p>
                </div>

                <div class="p-6 rounded-2xl shadow bg-[#FDF1F1]">
                    <p class="text-xl mb-2">🚚</p>
                    <h3 class="font-semibold text-gray-800">Pengiriman Aman</h3>
                    <p class="text-sm text-gray-600 mt-2">
                        Packing rapi dan pengiriman ke seluruh Indonesia.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ================= PRODUCT SECTION ================= --}}
    <section id="produk" class="max-w-7xl mx-auto px-4 py-16">
        <h2 class="text-2xl font-bold text-center text-[#6B1E23] mb-12">
            Temukan Stationery Favoritmu
        </h2>

        @if ($products->count())
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach ($products as $product)
                    <a href="{{ route('product.show', $product->slug) }}"
                        class="group bg-white rounded-2xl overflow-hidden shadow hover:shadow-xl transition">

                        <div class="h-48 bg-gray-100 overflow-hidden">
                            <img src="{{ asset('storage/' . ($product->images->first()->image ?? '')) }}"
                                alt="{{ $product->name }}"
                                class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                        </div>

                        <div class="p-4">
                            <p class="text-sm text-[#6B1E23] font-medium">
                                {{ $product->category->name }}
                            </p>
                            <h3 class="text-lg font-semibold text-gray-800 mt-1 line-clamp-2">
                                {{ $product->name }}
                            </h3>
                            <p class="text-sm text-gray-500 mt-2">Mulai dari</p>
                            <p class="text-lg font-bold text-[#6B1E23]">
                                Rp {{ number_format($product->variants->min('price')) }}
                            </p>
                        </div>
                    </a>
                @endforeach
            </div>

            <div class="mt-12">
                {{ $products->withQueryString()->links() }}
            </div>
        @else
            <p class="text-center text-gray-500 py-20">
                Produk belum tersedia
            </p>
        @endif
    </section>

    {{-- ================= CUSTOM ORDER ================= --}}
    <section id="custom" class="bg-white py-16">
        <div class="max-w-3xl mx-auto px-4">
            <h2 class="text-2xl font-bold text-center text-[#6B1E23] mb-8">
                Custom Stationery Sesuai Keinginanmu
            </h2>

            <form class="bg-[#FDF1F1] p-8 rounded-2xl shadow space-y-4">
                <input type="text" placeholder="Jenis produk (Notebook, Planner, dll)"
                    class="w-full px-4 py-3 rounded-lg border focus:ring-2 focus:ring-[#6B1E23]">

                <input type="text" placeholder="Tema atau warna favorit"
                    class="w-full px-4 py-3 rounded-lg border focus:ring-2 focus:ring-[#6B1E23]">

                <input type="number" placeholder="Jumlah"
                    class="w-full px-4 py-3 rounded-lg border focus:ring-2 focus:ring-[#6B1E23]">

                <textarea rows="3" placeholder="Catatan tambahan"
                    class="w-full px-4 py-3 rounded-lg border focus:ring-2 focus:ring-[#6B1E23]"></textarea>

                <button type="submit"
                    class="w-full bg-[#6B1E23] text-white py-3 rounded-xl hover:bg-[#57171B] transition">
                    Kirim Permintaan
                </button>
            </form>
        </div>
    </section>

    {{-- ================= TESTIMONI ================= --}}
    <section class="max-w-7xl mx-auto px-4 py-16">
        <h2 class="text-2xl font-bold text-center text-[#6B1E23] mb-10">
            Kata Mereka tentang Ayyra Stationery
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-2xl shadow">
                <p class="text-gray-600 text-sm">
                    "Produknya lucu banget dan kualitasnya bagus. Cocok buat journaling!"
                </p>
                <p class="mt-4 font-semibold text-[#6B1E23]">— Nabila</p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow">
                <p class="text-gray-600 text-sm">
                    "Packaging rapi, pengiriman cepat, dan barang sesuai foto."
                </p>
                <p class="mt-4 font-semibold text-[#6B1E23]">— Alya</p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow">
                <p class="text-gray-600 text-sm">
                    "Planner custom-nya cantik banget, bakal order lagi!"
                </p>
                <p class="mt-4 font-semibold text-[#6B1E23]">— Rani</p>
            </div>
        </div>
    </section>

</div>
@endsection
