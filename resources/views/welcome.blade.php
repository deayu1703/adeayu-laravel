<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayyra Stationery - Alat Tulis Berkualitas & Estetik</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🌸</text></svg>">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Nunito:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        script: ['Pacifico', 'cursive'],
                        body: ['Nunito', 'sans-serif'],
                        display: ['Playfair Display', 'serif'],
                    },
                    colors: {
                        pinky: '#E91E63',
                        pinklight: '#F48FB1',
                        blush: '#FCE4EC',
                        lavender: '#E3F2FD',
                        babyblue: '#B3E5FC',
                        peach: '#FFECB3',
                        cream: '#FFF8E1',
                        accent: '#4A148C',
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.8s ease-in-out',
                        'slide-up': 'slideUp 0.6s ease-out',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(20px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' },
                        }
                    }
                }
            }
        }
    </script>

    <style>
        .product-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.1);
        }

        .nav-link {
            position: relative;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 0;
            background-color: #E91E63;
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #FCE4EC 0%, #E3F2FD 50%, #FFF8E1 100%);
        }

        .btn-primary {
            background: linear-gradient(135deg, #E91E63 0%, #AD1457 100%);
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #AD1457 0%, #880E4F 100%);
            box-shadow: 0 8px 20px rgba(233, 30, 99, 0.3);
        }
    </style>
</head>

<body class="font-body text-gray-800 gradient-bg">

<!-- 🌸 HEADER / NAVBAR -->
<header class="sticky top-0 z-50 bg-white/90 backdrop-blur-sm shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 py-4 flex items-center justify-between">

        <!-- Logo -->
        <div class="flex items-center space-x-3">
            <div class="w-10 h-10 rounded-full bg-gradient-to-r from-pinky to-pinklight flex items-center justify-center">
                <span class="text-white text-lg">🌸</span>
            </div>
            <div>
                <h1 class="font-script text-2xl text-pinky leading-tight">
                    Ayyra Stationery
                </h1>
                <p class="text-xs text-gray-500">Premium & Aesthetic Tools</p>
            </div>
        </div>

        <!-- Desktop Menu -->
        <nav class="hidden md:flex items-center space-x-8">
            <a href="#" class="nav-link font-medium text-gray-700 hover:text-pinky">Beranda</a>
            <a href="#" class="nav-link font-medium text-gray-700 hover:text-pinky">Produk</a>
            <a href="#" class="nav-link font-medium text-gray-700 hover:text-pinky">Koleksi</a>
            <a href="#" class="nav-link font-medium text-gray-700 hover:text-pinky">Tentang</a>
            <a href="#" class="nav-link font-medium text-gray-700 hover:text-pinky">Kontak</a>

            <!-- Icons -->
            <div class="flex items-center space-x-4 ml-4">
                <a href="#" class="text-gray-600 hover:text-pinky">
                    <i class="fas fa-search"></i>
                </a>
                <a href="#" class="text-gray-600 hover:text-pinky relative">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="absolute -top-2 -right-2 bg-pinky text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">3</span>
                </a>
            </div>
        </nav>

        <!-- Auth Buttons -->
        <div class="flex items-center space-x-3">
            <a href="{{ route('login') }}"
               class="px-5 py-2.5 rounded-full border border-pinky text-pinky font-semibold hover:bg-pinky hover:text-white transition duration-300">
                Masuk
            </a>

            <a href="{{ route('register') }}"
               class="px-5 py-2.5 rounded-full btn-primary text-white font-semibold shadow-md">
                Daftar
            </a>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="md:hidden text-gray-700 ml-2">
                <i class="fas fa-bars text-xl"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden bg-white shadow-lg px-6 py-4">
        <div class="flex flex-col space-y-4">
            <a href="#" class="font-medium text-gray-700 hover:text-pinky py-2 border-b">Beranda</a>
            <a href="#" class="font-medium text-gray-700 hover:text-pinky py-2 border-b">Produk</a>
            <a href="#" class="font-medium text-gray-700 hover:text-pinky py-2 border-b">Koleksi</a>
            <a href="#" class="font-medium text-gray-700 hover:text-pinky py-2 border-b">Tentang</a>
            <a href="#" class="font-medium text-gray-700 hover:text-pinky py-2 border-b">Kontak</a>
        </div>
    </div>
</header>

<!-- ✨ HERO SECTION -->
<section class="py-16 md:py-24 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <!-- Hero Content -->
            <div class="animate-fade-in">
                <div class="inline-block px-4 py-2 rounded-full bg-blush text-pinky font-semibold mb-6">
                    ✨ New Collection 2026
                </div>

                <h2 class="font-display text-4xl md:text-5xl lg:text-6xl text-gray-800 mb-6 leading-tight">
                    Elevate Your <span class="text-pinky">Creative</span> Journey
                </h2>

                <p class="text-lg text-gray-600 mb-10 max-w-xl">
                    Temukan alat tulis premium yang menyatukan fungsionalitas dan estetika.
                    Koleksi eksklusif kami dirancang untuk meningkatkan produktivitas dan kreativitas Anda.
                </p>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#"
                       class="px-8 py-4 rounded-full btn-primary text-white font-semibold text-center shadow-lg hover:shadow-xl transition">
                        <i class="fas fa-shopping-bag mr-2"></i> Belanja Sekarang
                    </a>

                    <a href="#"
                       class="px-8 py-4 rounded-full border-2 border-pinky text-pinky font-semibold text-center hover:bg-pinky hover:text-white transition">
                        <i class="fas fa-play-circle mr-2"></i> Lihat Demo
                    </a>
                </div>

                <!-- Stats -->
                <div class="flex flex-wrap gap-8 mt-12">
                    <div>
                        <p class="text-2xl font-bold text-pinky">500+</p>
                        <p class="text-gray-600">Produk Eksklusif</p>
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-pinky">10K+</p>
                        <p class="text-gray-600">Pelanggan Bahagia</p>
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-pinky">4.9</p>
                        <p class="text-gray-600">Rating Ulasan</p>
                    </div>
                </div>
            </div>

            <!-- Hero Image/Illustration -->
            <div class="relative animate-slide-up">
                <div class="bg-white rounded-3xl shadow-2xl p-8 relative">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="bg-gradient-to-br from-blush to-white p-6 rounded-2xl shadow-md">
                            <div class="w-16 h-16 bg-pinky/10 rounded-full flex items-center justify-center mb-4 mx-auto">
                                <i class="fas fa-pen-fancy text-2xl text-pinky"></i>
                            </div>
                            <h4 class="font-semibold text-center">Pulpen Artistik</h4>
                        </div>

                        <div class="bg-gradient-to-br from-lavender to-white p-6 rounded-2xl shadow-md mt-8">
                            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-4 mx-auto">
                                <i class="fas fa-book-open text-2xl text-blue-500"></i>
                            </div>
                            <h4 class="font-semibold text-center">Journal Premium</h4>
                        </div>

                        <div class="bg-gradient-to-br from-peach to-white p-6 rounded-2xl shadow-md">
                            <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mb-4 mx-auto">
                                <i class="fas fa-palette text-2xl text-amber-500"></i>
                            </div>
                            <h4 class="font-semibold text-center">Art Supplies</h4>
                        </div>

                        <div class="bg-gradient-to-br from-babyblue to-white p-6 rounded-2xl shadow-md -mt-8">
                            <div class="w-16 h-16 bg-cyan-100 rounded-full flex items-center justify-center mb-4 mx-auto">
                                <i class="fas fa-gift text-2xl text-cyan-500"></i>
                            </div>
                            <h4 class="font-semibold text-center">Gift Sets</h4>
                        </div>
                    </div>

                    <!-- Decorative Elements -->
                    <div class="absolute -top-4 -right-4 w-24 h-24 rounded-full bg-pinky/10 flex items-center justify-center">
                        <span class="text-3xl">🦋</span>
                    </div>
                    <div class="absolute -bottom-4 -left-4 w-20 h-20 rounded-full bg-blue-100 flex items-center justify-center">
                        <span class="text-2xl">✨</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 🎀 PRODUK UNGGULAN -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14">
            <h3 class="font-display text-3xl md:text-4xl text-gray-800 mb-4">
                Produk <span class="text-pinky">Unggulan</span>
            </h3>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Koleksi terbaik kami yang paling diminati oleh kreator dan profesional
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Product 1 -->
            <div class="product-card bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100">
                <div class="h-48 bg-gradient-to-br from-blush to-white flex items-center justify-center p-6">
                    <div class="text-5xl">🖋️</div>
                    <span class="absolute top-4 right-4 bg-pinky text-white text-xs px-3 py-1 rounded-full">BESTSELLER</span>
                </div>
                <div class="p-6">
                    <h4 class="font-semibold text-lg mb-2">Fountain Pen Elegance</h4>
                    <p class="text-gray-600 text-sm mb-4">Pulpen premium dengan desain ergonomis dan tinta halus</p>
                    <div class="flex items-center justify-between">
                        <p class="text-pinky font-bold text-xl">Rp 189.000</p>
                        <button class="w-10 h-10 rounded-full bg-blush text-pinky flex items-center justify-center hover:bg-pinky hover:text-white transition">
                            <i class="fas fa-cart-plus"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="product-card bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100">
                <div class="h-48 bg-gradient-to-br from-lavender to-white flex items-center justify-center p-6">
                    <div class="text-5xl">📓</div>
                </div>
                <div class="p-6">
                    <h4 class="font-semibold text-lg mb-2">Leather Journal Pro</h4>
                    <p class="text-gray-600 text-sm mb-4">Jurnal kulit dengan kertas premium 120gsm, 240 halaman</p>
                    <div class="flex items-center justify-between">
                        <p class="text-pinky font-bold text-xl">Rp 245.000</p>
                        <button class="w-10 h-10 rounded-full bg-blush text-pinky flex items-center justify-center hover:bg-pinky hover:text-white transition">
                            <i class="fas fa-cart-plus"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="product-card bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100">
                <div class="h-48 bg-gradient-to-br from-peach to-white flex items-center justify-center p-6">
                    <div class="text-5xl">✏️</div>
                    <span class="absolute top-4 right-4 bg-amber-500 text-white text-xs px-3 py-1 rounded-full">NEW</span>
                </div>
                <div class="p-6">
                    <h4 class="font-semibold text-lg mb-2">Artist Pencil Set</h4>
                    <p class="text-gray-600 text-sm mb-4">Set pensil grafit profesional 12 grade dalam case kayu</p>
                    <div class="flex items-center justify-between">
                        <p class="text-pinky font-bold text-xl">Rp 156.000</p>
                        <button class="w-10 h-10 rounded-full bg-blush text-pinky flex items-center justify-center hover:bg-pinky hover:text-white transition">
                            <i class="fas fa-cart-plus"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="product-card bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100">
                <div class="h-48 bg-gradient-to-br from-babyblue to-white flex items-center justify-center p-6">
                    <div class="text-5xl">🖍️</div>
                </div>
                <div class="p-6">
                    <h4 class="font-semibold text-lg mb-2">Watercolor Studio Set</h4>
                    <p class="text-gray-600 text-sm mb-4">Set cat air profesional 24 warna dengan kuas premium</p>
                    <div class="flex items-center justify-between">
                        <p class="text-pinky font-bold text-xl">Rp 325.000</p>
                        <button class="w-10 h-10 rounded-full bg-blush text-pinky flex items-center justify-center hover:bg-pinky hover:text-white transition">
                            <i class="fas fa-cart-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-12">
            <a href="#"
               class="inline-flex items-center px-6 py-3 border-2 border-pinky text-pinky font-semibold rounded-full hover:bg-pinky hover:text-white transition">
                Lihat Semua Produk <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- ☁️ FITUR & KEUNGGULAN -->
<section class="py-16 gradient-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14">
            <h3 class="font-display text-3xl md:text-4xl text-gray-800 mb-4">
                Mengapa Memilih <span class="text-pinky">Ayyra</span>
            </h3>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Komitmen kami terhadap kualitas, desain, dan kepuasan pelanggan
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-2xl p-8 shadow-lg text-center">
                <div class="w-20 h-20 rounded-full bg-blush flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-award text-3xl text-pinky"></i>
                </div>
                <h4 class="font-semibold text-xl mb-4">Kualitas Premium</h4>
                <p class="text-gray-600">Setiap produk melalui proses seleksi ketat dengan bahan terbaik untuk performa optimal.</p>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg text-center">
                <div class="w-20 h-20 rounded-full bg-lavender flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-shipping-fast text-3xl text-blue-500"></i>
                </div>
                <h4 class="font-semibold text-xl mb-4">Pengiriman Cepat</h4>
                <p class="text-gray-600">Gratis ongkir untuk order di atas Rp 300K dan pengiriman ekspres ke seluruh Indonesia.</p>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg text-center">
                <div class="w-20 h-20 rounded-full bg-peach flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-headset text-3xl text-amber-500"></i>
                </div>
                <h4 class="font-semibold text-xl mb-4">Dukungan 24/7</h4>
                <p class="text-gray-600">Tim customer service kami siap membantu Anda kapan saja melalui berbagai channel.</p>
            </div>
        </div>
    </div>
</section>

<!-- 🌸 TESTIMONI -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14">
            <h3 class="font-display text-3xl md:text-4xl text-gray-800 mb-4">
                Kata <span class="text-pinky">Pelanggan</span>
            </h3>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Apa yang mereka katakan tentang pengalaman berbelanja di Ayyra Stationery
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-cream rounded-2xl p-8 shadow-md">
                <div class="flex items-center mb-6">
                    <div class="w-14 h-14 rounded-full bg-gradient-to-r from-pinky to-pinklight flex items-center justify-center text-white font-bold text-xl">S</div>
                    <div class="ml-4">
                        <h5 class="font-semibold">Sari Dewi</h5>
                        <p class="text-sm text-gray-500">Illustrator</p>
                    </div>
                </div>
                <p class="text-gray-600 italic">"Kualitas produk sangat premium dan pengiriman super cepat. Journal leather-nya sudah menjadi partner kerja harian saya!"</p>
                <div class="flex text-amber-400 mt-4">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <div class="bg-cream rounded-2xl p-8 shadow-md">
                <div class="flex items-center mb-6">
                    <div class="w-14 h-14 rounded-full bg-gradient-to-r from-blue-400 to-blue-600 flex items-center justify-center text-white font-bold text-xl">A</div>
                    <div class="ml-4">
                        <h5 class="font-semibold">Andi Pratama</h5>
                        <p class="text-sm text-gray-500">Content Creator</p>
                    </div>
                </div>
                <p class="text-gray-600 italic">"Desain produk Ayyra sangat aesthetic dan fungsional. Perfect untuk konten kreatif saya. Highly recommended!"</p>
                <div class="flex text-amber-400 mt-4">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="bg-cream rounded-2xl p-8 shadow-md">
                <div class="flex items-center mb-6">
                    <div class="w-14 h-14 rounded-full bg-gradient-to-r from-purple-400 to-purple-600 flex items-center justify-center text-white font-bold text-xl">M</div>
                    <div class="ml-4">
                        <h5 class="font-semibold">Maya Sari</h5>
                        <p class="text-sm text-gray-500">Mahasiswa</p>
                    </div>
                </div>
                <p class="text-gray-600 italic">"Harga terjangkau untuk kualitas premium. Set pulpennya sangat nyaman digunakan untuk mencatat kuliah seharian."</p>
                <div class="flex text-amber-400 mt-4">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 🌷 NEWSLETTER -->
<section class="py-16 bg-gradient-to-r from-blush to-lavender">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 text-center">
        <div class="inline-block p-3 rounded-full bg-white/50 mb-6">
            <i class="fas fa-envelope text-2xl text-pinky"></i>
        </div>
        <h3 class="font-display text-3xl md:text-4xl text-gray-800 mb-4">
            Tetap Terhubung
        </h3>
        <p class="text-gray-600 mb-10 max-w-2xl mx-auto">
            Dapatkan update terbaru tentang produk, promo eksklusif, dan tips kreatif langsung ke inbox Anda
        </p>

        <form class="max-w-xl mx-auto">
            <div class="flex flex-col sm:flex-row gap-4">
                <input type="email" placeholder="Email address Anda"
                       class="flex-grow px-6 py-4 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-pinky focus:border-transparent">
                <button type="submit"
                        class="px-8 py-4 rounded-full btn-primary text-white font-semibold shadow-md hover:shadow-lg transition">
                    Berlangganan
                </button>
            </div>
            <p class="text-sm text-gray-500 mt-4">
                Dengan berlangganan, Anda menyetujui Kebijakan Privasi kami
            </p>
        </form>
    </div>
</section>

<!-- 🌷 FOOTER -->
<footer class="bg-gray-900 text-white pt-16 pb-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
            <!-- Company Info -->
            <div>
                <div class="flex items-center space-x-3 mb-6">
                    <div class="w-12 h-12 rounded-full bg-gradient-to-r from-pinky to-pinklight flex items-center justify-center">
                        <span class="text-white text-xl">🌸</span>
                    </div>
                    <div>
                        <h2 class="font-script text-2xl">Ayyra Stationery</h2>
                        <p class="text-xs text-gray-400">Since 2020</p>
                    </div>
                </div>
                <p class="text-gray-400 mb-6">
                    Menyediakan alat tulis premium yang menyatukan fungsionalitas, kualitas, dan desain estetik.
                </p>
                <div class="flex space-x-4">
                    <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-pinky transition">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-blue-600 transition">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-pink-400 transition">
                        <i class="fab fa-tiktok"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-blue-400 transition">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="font-semibold text-lg mb-6">Tautan Cepat</h4>
                <ul class="space-y-3">
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Beranda</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Katalog Produk</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Koleksi Terbaru</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Promo & Diskon</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Blog & Tips</a></li>
                </ul>
            </div>

            <!-- Support -->
            <div>
                <h4 class="font-semibold text-lg mb-6">Dukungan</h4>
                <ul class="space-y-3">
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Hubungi Kami</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">FAQ</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Pengiriman</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Retur & Penukaran</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Syarat & Ketentuan</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h4 class="font-semibold text-lg mb-6">Kontak Kami</h4>
                <ul class="space-y-4">
                    <li class="flex items-start">
                        <i class="fas fa-map-marker-alt text-pinky mr-3 mt-1"></i>
                        <span class="text-gray-400">Jl. Kreatif No. 123, Bandung, Indonesia</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-phone text-pinky mr-3"></i>
                        <span class="text-gray-400">+62 812 3456 7890</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-envelope text-pinky mr-3"></i>
                        <span class="text-gray-400">hello@ayyrastationery.com</span>
                    </li>
                </ul>

                <div class="mt-8 p-4 bg-gray-800 rounded-xl">
                    <p class="text-sm mb-2">Metode Pembayaran</p>
                    <div class="flex space-x-2">
                        <div class="w-10 h-6 bg-gray-700 rounded flex items-center justify-center text-xs">BCA</div>
                        <div class="w-10 h-6 bg-gray-700 rounded flex items-center justify-center text-xs">BNI</div>
                        <div class="w-10 h-6 bg-gray-700 rounded flex items-center justify-center text-xs">MDR</div>
                        <div class="w-10 h-6 bg-gray-700 rounded flex items-center justify-center text-xs">GOPAY</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-t border-gray-800 mt-12 pt-8 text-center">
            <p class="text-gray-500 text-sm">
                © 2026 Ayyra Stationery. All rights reserved.
                <span class="block md:inline mt-2 md:mt-0">Made with <i class="fas fa-heart text-pinky mx-1"></i> in Bandung</span>
            </p>
        </div>
    </div>
</footer>

<!-- JavaScript for Mobile Menu -->
<script>
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });

    // Close mobile menu when clicking outside
    document.addEventListener('click', function(event) {
        const menu = document.getElementById('mobile-menu');
        const button = document.getElementById('mobile-menu-button');

        if (!menu.contains(event.target) && !button.contains(event.target)) {
            menu.classList.add('hidden');
        }
    });
</script>

</body>
</html>
