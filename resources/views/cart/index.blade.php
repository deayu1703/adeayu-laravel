@extends('layouts.app')

@section('content')
<div class="bg-[#6B1E23] text-white">

    {{-- ================= HERO SECTION ================= --}}
    <section class="max-w-7xl mx-auto px-6 py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-14 items-center">
            <div>
                <h1 class="text-4xl md:text-5xl font-bold leading-tight">
                    Ayyra Stationery
                </h1>
                <p class="mt-6 text-lg text-[#F3DADA]">
                    Alat tulis aesthetic dan berkualitas untuk menemani
                    belajar, bekerja, dan menuangkan ide terbaikmu.
                </p>

                <div class="mt-10 flex flex-wrap gap-4">
                    <a href="#produk"
                        class="bg-white text-[#6B1E23] font-semibold px-8 py-4 rounded-xl shadow hover:bg-[#F3DADA] transition">
                        Lihat Produk
                    </a>
                    <a href="#custom"
                        class="border border-white px-8 py-4 rounded-xl hover:bg-white hover:text-[#6B1E23] transition">
                        Custom Stationery
                    </a>
                </div>
            </div>

            <div class="flex justify-center">
                <div class="bg-[#7A2A2F] rounded-3xl p-10 shadow-xl">
                    <img src="{{ asset('images/hero-stationery.png') }}"
                        alt="Ayyra Stationery"
                        class="w-full max-w-sm">
                </div>
            </div>
        </div>
    </section>

    {{-- ================= VALUE SECTION ================= --}}
    <section class="bg-[#7A2A2F] py-20">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-14">
                Kenapa Memilih Ayyra Stationery?
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div class="bg-[#6B1E23] p-8 rounded-2xl shadow-lg">
                    <h3 class="text-xl font-semibold mb-3">
                        Desain Aesthetic & Eksklusif
                    </h3>
                    <p class="text-[#F3DADA] text-sm leading-relaxed">
                        Setiap produk dirancang dengan detail visual yang elegan,
                        cocok untuk pelajar, mahasiswa, hingga profesional.
                    </p>
                </div>

                <div class="bg-[#6B1E23] p-8 rounded-2xl shadow-lg">
                    <h3 class="text-xl font-semibold mb-3">
                        Material Berkualitas
                    </h3>
                    <p class="text-[#F3DADA] text-sm leading-relaxed">
                        Menggunakan bahan pilihan agar nyaman digunakan
                        dan tahan lama untuk aktivitas harian.
                    </p>
                </div>

                <div class="bg-[#6B1E23] p-8 rounded-2xl shadow-lg">
                    <h3 class="text-xl font-semibold mb-3">
                        Pengiriman Aman & Rapi
                    </h3>
                    <p class="text-[#F3DADA] text-sm leading-relaxed">
                        Dikemas dengan baik untuk menjaga produk
                        sampai ke tanganmu dalam kondisi terbaik.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ================= PRODUCT SECTION ================= --}}
    <section id="produk" class="bg-[#6B1E23] py-20">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-14">
                Koleksi Stationery
            </h2>

            @if ($products->count())
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                    @foreach ($products as $product)
                        <a href="{{ route('product.show', $product->slug) }}"
                            class="group bg-[#7A2A2F] rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition">

                            <div class="h-52 bg-[#5A161A] overflow-hidden">
                                <img src="{{ asset('storage/' . ($product->images->first()->image ?? '')) }}"
                                    alt="{{ $product->name }}"
                                    class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                            </div>

                            <div class="p-5">
                                <p class="text-sm text-[#F3DADA]">
                                    {{ $product->category->name }}
                                </p>

                                <h3 class="text-lg font-semibold mt-1 line-clamp-2">
                                    {{ $product->name }}
                                </h3>

                                <p class="text-sm text-[#F3DADA] mt-3">
                                    Mulai dari
                                </p>

                                <p class="text-xl font-bold mt-1">
                                    Rp {{ number_format($product->variants->min('price')) }}
                                </p>
                            </div>
                        </a>
                    @endforeach
                </div>

                <div class="mt-14">
                    {{ $products->withQueryString()->links() }}
                </div>
            @else
                <p class="text-center text-[#F3DADA] py-24">
                    Produk belum tersedia
                </p>
            @endif
        </div>
    </section>

    {{-- ================= CUSTOM ORDER ================= --}}
    <section id="custom" class="bg-[#7A2A2F] py-20">
        <div class="max-w-3xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-10">
                Custom Stationery
            </h2>

            <form class="bg-[#6B1E23] p-10 rounded-3xl shadow-xl space-y-5">
                <input type="text"
                    placeholder="Jenis produk (Planner, Notebook, dll)"
                    class="w-full bg-transparent border border-[#F3DADA] px-5 py-3 rounded-xl placeholder-[#F3DADA] focus:outline-none focus:ring-2 focus:ring-white">

                <input type="text"
                    placeholder="Tema atau warna yang diinginkan"
                    class="w-full bg-transparent border border-[#F3DADA] px-5 py-3 rounded-xl placeholder-[#F3DADA] focus:outline-none focus:ring-2 focus:ring-white">

                <input type="number"
                    placeholder="Jumlah"
                    class="w-full bg-transparent border border-[#F3DADA] px-5 py-3 rounded-xl placeholder-[#F3DADA] focus:outline-none focus:ring-2 focus:ring-white">

                <textarea rows="4"
                    placeholder="Catatan tambahan"
                    class="w-full bg-transparent border border-[#F3DADA] px-5 py-3 rounded-xl placeholder-[#F3DADA] focus:outline-none focus:ring-2 focus:ring-white"></textarea>

                <button type="submit"
                    class="w-full bg-white text-[#6B1E23] font-semibold py-4 rounded-xl hover:bg-[#F3DADA] transition">
                    Kirim Permintaan Custom
                </button>
            </form>
        </div>
    </section>

</div>
@endsection
