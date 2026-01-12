@extends('layouts.app')

@section('title', 'Beranda - Ayyra Stationery')
@section('content')
    <!-- Hero Section -->
    <section class="gradient-maroon text-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center py-20 lg:py-28">
                <!-- Left Content -->
                <div>
                    <div class="inline-flex items-center px-4 py-2 rounded-full bg-white/10 backdrop-blur-sm mb-6">
                        <span class="text-sm font-semibold">🎯 Premium Stationery</span>
                    </div>
                    <h1 class="text-4xl lg:text-5xl xl:text-6xl font-bold font-poppins mb-6 leading-tight">
                        Alat Tulis yang Membuat
                        <span class="text-yellow-300">Setiap Momen</span>
                        Lebih Berwarna
                    </h1>
                    <p class="text-lg lg:text-xl text-white/90 mb-8 max-w-2xl">
                        Temukan koleksi alat tulis aesthetic premium untuk kebutuhan sekolah, kantor, atau koleksi pribadi. Kualitas terbaik dengan desain yang memukau.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#produk" class="btn-primary px-8 py-4 rounded-xl font-semibold text-lg flex items-center justify-center gap-2 hover-lift">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                            Belanja Sekarang
                        </a>
                        <a href="#kategori" class="bg-white/10 backdrop-blur-sm border-2 border-white/20 text-white px-8 py-4 rounded-xl font-semibold text-lg hover:bg-white/20 transition-colors text-center hover-lift">
                            Lihat Kategori
                        </a>
                    </div>

                    <!-- Stats -->
                    <div class="grid grid-cols-3 gap-6 mt-12">
                        <div class="text-center">
                            <div class="text-3xl font-bold">500+</div>
                            <div class="text-white/70">Produk</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold">10K+</div>
                            <div class="text-white/70">Pelanggan</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold">4.9</div>
                            <div class="text-white/70">Rating</div>
                        </div>
                    </div>
                </div>

                <!-- Right - Hero Image -->
                <div class="relative">
                    <div class="relative z-10 animate-float">
                        <div class="bg-white/10 backdrop-blur-sm rounded-3xl p-8 shadow-2xl">
                            <div class="grid grid-cols-2 gap-4">
                                @foreach([
                                    ['icon' => 'M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z', 'name' => 'Pulpen Premium'],
                                    ['icon' => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z', 'name' => 'Notes Aesthetic'],
                                    ['icon' => 'M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z', 'name' => 'Sticker Kreatif'],
                                    ['icon' => 'M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01', 'name' => 'Washi Tape']
                                ] as $item)
                                <div class="bg-white rounded-2xl p-6 shadow-card hover:shadow-card-hover transition-all duration-300 {{ $loop->iteration % 2 == 0 ? 'mt-8' : '' }}">
                                    <div class="w-16 h-16 rounded-full gradient-maroon flex items-center justify-center mx-auto mb-4">
                                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $item['icon'] }}"></path>
                                        </svg>
                                    </div>
                                    <p class="text-center font-semibold text-gray-900">{{ $item['name'] }}</p>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- Decorative Elements -->
                    <div class="absolute -top-10 -right-10 w-64 h-64 bg-white/5 rounded-full blur-3xl"></div>
                    <div class="absolute -bottom-10 -left-10 w-64 h-64 bg-white/5 rounded-full blur-3xl"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section id="kategori" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Koleksi Alat Tulis Kami</h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto">Temukan berbagai kategori alat tulis aesthetic untuk melengkapi kebutuhan mencatat dan berkaryamu</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 lg:gap-6">
                @foreach([
                    ['icon' => 'M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z', 'name' => 'Pulpen', 'count' => '45'],
                    ['icon' => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z', 'name' => 'Notes', 'count' => '32'],
                    ['icon' => 'M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z', 'name' => 'Sticker', 'count' => '78'],
                    ['icon' => 'M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01', 'name' => 'Washi Tape', 'count' => '56'],
                    ['icon' => 'M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z', 'name' => 'Planner', 'count' => '23'],
                    ['icon' => 'M7 20l4-16m2 16l4-16M6 9h14M4 15h14', 'name' => 'Aksesoris', 'count' => '67']
                ] as $category)
                <a href="#" class="category-card bg-white rounded-xl p-6 text-center border border-gray-200 hover:border-maroon-300">
                    <div class="w-16 h-16 rounded-full bg-gradient-to-br from-maroon-50 to-maroon-100 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-maroon-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $category['icon'] }}"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-1">{{ $category['name'] }}</h3>
                    <p class="text-gray-500 text-sm">{{ $category['count'] }} produk</p>
                </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="produk" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-10">
                <div>
                    <h2 class="text-3xl lg:text-4xl font-bold text-gray-900">Produk Terbaru</h2>
                    <p class="text-gray-600 mt-2">Temukan alat tulis aesthetic sesuai kebutuhanmu</p>
                </div>

                <!-- Filter -->
                <div class="flex items-center space-x-4">
                    <form method="GET" class="flex items-center space-x-2">
                        <select name="category" onchange="this.form.submit()"
                                class="border border-gray-300 rounded-lg px-4 py-2.5 text-gray-700 focus:ring-2 focus:ring-maroon-500 focus:border-transparent bg-white min-w-[180px]">
                            <option value="">Semua Kategori</option>
                            @foreach (['Pulpen', 'Notes', 'Sticker', 'Washi Tape', 'Planner', 'Aksesoris'] as $cat)
                                <option value="{{ strtolower(str_replace(' ', '-', $cat)) }}">{{ $cat }}</option>
                            @endforeach
                        </select>
                    </form>
                </div>
            </div>

            <!-- Product Grid -->
            @if($products && $products->count() > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 lg:gap-8">
                @foreach($products as $product)
                <div class="product-card bg-white rounded-2xl overflow-hidden border border-gray-200 hover:border-maroon-300">
                    <!-- Product Image -->
                    <div class="product-image-container h-56 bg-gradient-to-br from-maroon-50 to-gray-50 overflow-hidden relative">
                        @if($product->images && $product->images->first())
                            <img src="{{ asset('storage/' . $product->images->first()->image) }}"
                                 alt="{{ $product->name }}"
                                 class="w-full h-full object-contain p-6">
                        @else
                            <div class="w-full h-full flex items-center justify-center p-6">
                                <div class="text-center">
                                    <svg class="w-16 h-16 text-gray-300 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    <p class="text-gray-400 text-sm">Gambar tidak tersedia</p>
                                </div>
                            </div>
                        @endif

                        <!-- Badge -->
                        @if($loop->iteration <= 3)
                        <div class="absolute top-3 left-3">
                            <span class="bg-maroon-600 text-white text-xs font-bold px-3 py-1.5 rounded-full shadow">Baru</span>
                        </div>
                        @endif

                        <!-- Wishlist Button -->
                        <button class="absolute top-3 right-3 w-10 h-10 rounded-full bg-white/90 backdrop-blur-sm flex items-center justify-center text-gray-700 hover:text-maroon-700 hover-lift shadow">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Product Info -->
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-sm font-medium text-maroon-600 bg-maroon-50 px-3 py-1 rounded-full">{{ $product->category->name ?? 'Stationery' }}</span>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <span class="text-gray-500 text-sm ml-1">4.{{ rand(5,9) }}</span>
                            </div>
                        </div>

                        <h3 class="font-semibold text-gray-900 text-lg mb-2 line-clamp-1">{{ $product->name }}</h3>
                        <p class="text-gray-500 text-sm mb-4 line-clamp-2">Desain aesthetic dengan kualitas premium untuk kebutuhan sehari-hari</p>

                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500">Mulai dari</p>
                                <p class="text-xl font-bold text-maroon-700">Rp {{ number_format($product->variants->min('price') ?? 25000) }}</p>
                            </div>
                            <button class="add-to-cart bg-gradient-to-r from-maroon-600 to-maroon-700 text-white w-12 h-12 rounded-full flex items-center justify-center hover-lift shadow">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- View More Button -->
            <div class="text-center mt-12">
                <a href="#" class="inline-flex items-center px-8 py-3.5 border-2 border-maroon-600 text-maroon-600 rounded-xl font-semibold hover:bg-maroon-50 transition-colors">
                    Lihat Semua Produk
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
            @else
            <!-- Empty State -->
            <div class="bg-white rounded-2xl border border-gray-200 p-12 text-center">
                <div class="w-24 h-24 rounded-full bg-gradient-to-r from-maroon-50 to-pink-50 flex items-center justify-center mx-auto mb-6">
                    <svg class="w-12 h-12 text-maroon-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Produk belum tersedia</h3>
                <p class="text-gray-600 max-w-md mx-auto mb-6">Maaf, produk untuk kategori ini sedang tidak tersedia. Silakan coba kategori lain atau lihat semua produk kami.</p>
                <a href="#" class="btn-primary px-6 py-3 rounded-xl font-semibold inline-flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                    </svg>
                    Lihat Semua Kategori
                </a>
            </div>
            @endif
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimoni" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Testimoni Pelanggan</h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto">Lihat apa kata mereka tentang pengalaman berbelanja di Ayyra Stationery</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                @foreach([
                    ['name' => 'Anita Sari', 'role' => 'Mahasiswa', 'avatar' => 'A', 'text' => 'Pulpen dari Ayyra Stationery sangat nyaman digunakan untuk mencatat. Desainnya juga aesthetic banget!'],
                    ['name' => 'Budi Santoso', 'role' => 'Content Creator', 'avatar' => 'B', 'text' => 'Sticker dan washi tape koleksi lengkap! Cocok untuk dekorasi planner dan journaling.'],
                    ['name' => 'Rina Melati', 'role' => 'Guru', 'avatar' => 'R', 'text' => 'Kualitas produk sangat bagus, pengiriman cepat. Sekarang jadi langganan beli alat tulis di sini.']
                ] as $testimonial)
                <div class="testimonial-card testimonial-gradient rounded-2xl p-8 border border-gray-200 hover:shadow-card-hover">
                    <div class="flex items-center mb-6">
                        <div class="w-14 h-14 rounded-full gradient-maroon flex items-center justify-center text-white font-bold text-xl mr-4">
                            {{ $testimonial['avatar'] }}
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 text-lg">{{ $testimonial['name'] }}</h4>
                            <p class="text-gray-600">{{ $testimonial['role'] }}</p>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-6">"{{ $testimonial['text'] }}"</p>
                    <div class="flex">
                        @for($i = 0; $i < 5; $i++)
                            <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        @endfor
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-20 gradient-maroon-reverse text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-white/10 backdrop-blur-sm mb-8">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
            </div>
            <h2 class="text-3xl lg:text-4xl font-bold mb-6">Berlangganan Newsletter</h2>
            <p class="text-white/80 text-lg mb-8 max-w-2xl mx-auto">Dapatkan info produk terbaru, diskon eksklusif, dan tips menarik seputar stationery langsung di email Anda.</p>

            <form class="max-w-md mx-auto">
                <div class="flex flex-col sm:flex-row gap-3">
                    <div class="flex-grow">
                        <input type="email" placeholder="Masukkan alamat email Anda"
                               class="w-full px-5 py-3.5 rounded-xl text-gray-900 focus:outline-none focus:ring-2 focus:ring-maroon-500">
                    </div>
                    <button type="submit" class="btn-primary px-8 py-3.5 rounded-xl font-semibold text-lg whitespace-nowrap">
                        Berlangganan
                    </button>
                </div>
                <p class="text-white/60 text-sm mt-3">Dengan berlangganan, Anda menyetujui Kebijakan Privasi kami</p>
            </form>
        </div>
    </section>
@endsection
