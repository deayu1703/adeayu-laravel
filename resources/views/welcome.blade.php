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

<body class="font-body text-gray-800">

<!-- HEADER / NAVBAR - Struktur sesuai gambar -->
<header class="sticky top-0 z-50 bg-white shadow-sm">
    <div class="max-w-7xl mx-auto px-4 py-4 flex items-center justify-between">
        <!-- Logo -->
        <div class="flex items-center space-x-3">
            <div class="w-10 h-10 rounded-full bg-gradient-to-r from-pinky to-pinklight flex items-center justify-center">
                <span class="text-white text-lg">🌸</span>
            </div>
            <h1 class="font-script text-2xl text-pinky leading-tight">
                Ayyra Stationery
            </h1>
        </div>

        <!-- Desktop Menu - Struktur sesuai gambar -->
        <nav class="hidden md:flex items-center space-x-8">
            <a href="#" class="nav-link font-medium text-gray-700 hover:text-pinky">HOME</a>
            <a href="#" class="nav-link font-medium text-gray-700 hover:text-pinky">QUESTION</a>
            <a href="#" class="nav-link font-medium text-gray-700 hover:text-pinky">SHOP</a>
            <a href="#" class="nav-link font-medium text-gray-700 hover:text-pinky">CONTACT US</a>
        </nav>

        <!-- Mobile Menu Button -->
        <button id="mobile-menu-button" class="md:hidden text-gray-700">
            <i class="fas fa-bars text-xl"></i>
        </button>
    </div>
</header>

<!-- HERO SECTION - Struktur sesuai gambar -->
<main class="min-h-screen">
    <!-- Hero dengan layout dua kolom -->
    <section class="py-12 md:py-20 bg-gradient-to-r from-blush to-lavender">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                <!-- Hero Content (Kiri) -->
                <div class="text-center lg:text-left">
                    <h1 class="font-display text-4xl md:text-5xl lg:text-6xl text-gray-800 mb-6 leading-tight">
                        Where Stationery meets<br>
                        <span class="text-pinky">art & creativity</span>
                    </h1>

                    <p class="text-lg text-gray-600 mb-8 max-w-xl mx-auto lg:mx-0">
                        Luxury stationery for creatives who want to express themselves without compromise.
                        Beautiful, durable, and effortless to use.
                    </p>

                    <a href="#"
                       class="inline-block px-8 py-4 rounded-full btn-primary text-white font-semibold text-center shadow-lg hover:shadow-xl transition">
                        SHOP NOW
                    </a>
                </div>

                <!-- Hero Image (Kanan) -->
                <div class="relative">
                    <div class="bg-white rounded-3xl shadow-2xl p-8 relative overflow-hidden">
                        <div class="grid grid-cols-2 gap-6">
                            <!-- Product showcase items -->
                            <div class="bg-gradient-to-br from-blush to-white p-6 rounded-2xl shadow-md">
                                <div class="w-16 h-16 bg-pinky/10 rounded-full flex items-center justify-center mb-4 mx-auto">
                                    <i class="fas fa-pen-fancy text-2xl text-pinky"></i>
                                </div>
                                <h4 class="font-semibold text-center">Premium Pens</h4>
                            </div>

                            <div class="bg-gradient-to-br from-lavender to-white p-6 rounded-2xl shadow-md mt-8">
                                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-4 mx-auto">
                                    <i class="fas fa-book-open text-2xl text-blue-500"></i>
                                </div>
                                <h4 class="font-semibold text-center">Art Journals</h4>
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

    <!-- ABOUT US SECTION - Struktur sesuai gambar -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="font-display text-3xl md:text-4xl text-gray-800 mb-6">
                    About us
                </h2>
                <div class="max-w-3xl mx-auto">
                    <p class="text-gray-600 text-lg">
                        We create high-quality, beautifully designed stationery that gives you the look of a professional artist without the high price. Whether you're into classic elegance, bold designs, or custom styles, our products are made to match your creative vibe and lifestyle.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- HOW IT WORKS SECTION - Struktur sesuai gambar -->
    <section class="py-16 gradient-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="font-display text-3xl md:text-4xl text-gray-800 mb-6">
                    How it works
                </h2>
            </div>

            <!-- 4-Step Process -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Step 1 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg text-center">
                    <div class="w-16 h-16 rounded-full bg-blush flex items-center justify-center mx-auto mb-6">
                        <span class="text-2xl font-bold text-pinky">1</span>
                    </div>
                    <h4 class="font-semibold text-xl mb-4">Choose Your Style</h4>
                    <p class="text-gray-600">Browse our collection and select the perfect stationery for your creative needs.</p>
                </div>

                <!-- Step 2 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg text-center">
                    <div class="w-16 h-16 rounded-full bg-lavender flex items-center justify-center mx-auto mb-6">
                        <span class="text-2xl font-bold text-blue-500">2</span>
                    </div>
                    <h4 class="font-semibold text-xl mb-4">Customize & Personalize</h4>
                    <p class="text-gray-600">Add your personal touch with customization options for a unique look.</p>
                </div>

                <!-- Step 3 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg text-center">
                    <div class="w-16 h-16 rounded-full bg-peach flex items-center justify-center mx-auto mb-6">
                        <span class="text-2xl font-bold text-amber-500">3</span>
                    </div>
                    <h4 class="font-semibold text-xl mb-4">Fast Delivery</h4>
                    <p class="text-gray-600">Receive your order with our fast and eco-friendly packaging.</p>
                </div>

                <!-- Step 4 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg text-center">
                    <div class="w-16 h-16 rounded-full bg-babyblue flex items-center justify-center mx-auto mb-6">
                        <span class="text-2xl font-bold text-cyan-500">4</span>
                    </div>
                    <h4 class="font-semibold text-xl mb-4">Create & Inspire</h4>
                    <p class="text-gray-600">Use your premium stationery to create beautiful works of art and writing.</p>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="#"
                   class="inline-flex items-center px-8 py-4 rounded-full btn-primary text-white font-semibold shadow-md hover:shadow-lg transition">
                    <i class="fas fa-play-circle mr-2"></i> WATCH DEMO
                </a>
            </div>
        </div>
    </section>

    <!-- OUR MOST LOVED SETS - Struktur sesuai gambar -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="font-display text-3xl md:text-4xl text-gray-800 mb-6">
                    Our most loved sets
                </h2>
            </div>

            <!-- Product Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Product 1 -->
                <div class="product-card bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100">
                    <div class="h-64 bg-gradient-to-br from-blush to-white flex items-center justify-center p-6">
                        <div class="text-6xl">🖋️</div>
                        <span class="absolute top-4 right-4 bg-pinky text-white text-xs px-3 py-1 rounded-full">BESTSELLER</span>
                    </div>
                    <div class="p-6">
                        <h4 class="font-semibold text-lg mb-2">Fountain Pen Elegance Set</h4>
                        <p class="text-gray-600 text-sm mb-4">Premium fountain pen with ergonomic design and smooth ink flow</p>
                        <div class="flex items-center justify-between">
                            <p class="text-pinky font-bold text-xl">Rp 289.000</p>
                            <button class="px-6 py-2 rounded-full bg-blush text-pinky font-semibold hover:bg-pinky hover:text-white transition">
                                ADD TO CART
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="product-card bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100">
                    <div class="h-64 bg-gradient-to-br from-lavender to-white flex items-center justify-center p-6">
                        <div class="text-6xl">📓</div>
                    </div>
                    <div class="p-6">
                        <h4 class="font-semibold text-lg mb-2">Leather Journal Pro Set</h4>
                        <p class="text-gray-600 text-sm mb-4">Luxury leather journal with premium 120gsm paper, 240 pages</p>
                        <div class="flex items-center justify-between">
                            <p class="text-pinky font-bold text-xl">Rp 345.000</p>
                            <button class="px-6 py-2 rounded-full bg-blush text-pinky font-semibold hover:bg-pinky hover:text-white transition">
                                ADD TO CART
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="product-card bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100">
                    <div class="h-64 bg-gradient-to-br from-peach to-white flex items-center justify-center p-6">
                        <div class="text-6xl">✏️</div>
                        <span class="absolute top-4 right-4 bg-amber-500 text-white text-xs px-3 py-1 rounded-full">NEW</span>
                    </div>
                    <div class="p-6">
                        <h4 class="font-semibold text-lg mb-2">Artist Pencil Collection</h4>
                        <p class="text-gray-600 text-sm mb-4">Professional graphite pencil set 12 grades in wooden case</p>
                        <div class="flex items-center justify-between">
                            <p class="text-pinky font-bold text-xl">Rp 256.000</p>
                            <button class="px-6 py-2 rounded-full bg-blush text-pinky font-semibold hover:bg-pinky hover:text-white transition">
                                ADD TO CART
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE US - Struktur sesuai gambar -->
    <section class="py-16 gradient-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="font-display text-3xl md:text-4xl text-gray-800 mb-6">
                    Why choose us :
                </h2>
            </div>

            <!-- Features Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white rounded-xl p-6 shadow-md text-center">
                    <div class="w-12 h-12 rounded-full bg-blush flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-recycle text-pinky"></i>
                    </div>
                    <h4 class="font-semibold text-lg mb-2">Eco-Friendly Materials</h4>
                    <p class="text-gray-600 text-sm">Sustainable and recyclable materials in all our products</p>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-md text-center">
                    <div class="w-12 h-12 rounded-full bg-lavender flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-heart text-blue-500"></i>
                    </div>
                    <h4 class="font-semibold text-lg mb-2">Non-Damaging</h4>
                    <p class="text-gray-600 text-sm">Safe for all surfaces, easy to remove and reuse</p>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-md text-center">
                    <div class="w-12 h-12 rounded-full bg-peach flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-paint-brush text-amber-500"></i>
                    </div>
                    <h4 class="font-semibold text-lg mb-2">Hand-Finished Designs</h4>
                    <p class="text-gray-600 text-sm">Each piece receives individual attention and care</p>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-md text-center">
                    <div class="w-12 h-12 rounded-full bg-babyblue flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-leaf text-cyan-500"></i>
                    </div>
                    <h4 class="font-semibold text-lg mb-2">Eco-Friendly Packaging</h4>
                    <p class="text-gray-600 text-sm">Minimal, recyclable packaging to reduce environmental impact</p>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="#"
                   class="inline-block px-8 py-4 rounded-full btn-primary text-white font-semibold shadow-lg hover:shadow-xl transition">
                    SHOP NOW
                </a>
            </div>
        </div>
    </section>

    <!-- CLIENT LOVE / TESTIMONIALS - Struktur sesuai gambar -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="font-display text-3xl md:text-4xl text-gray-800 mb-6">
                    client love
                </h2>
            </div>

            <!-- Testimonial -->
            <div class="max-w-2xl mx-auto bg-cream rounded-2xl p-10 shadow-lg text-center">
                <div class="flex justify-center text-amber-400 text-2xl mb-6">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>

                <p class="text-gray-700 text-lg italic mb-8">
                    "The quality is exceptional and the designs are beautiful. My creative process has been completely transformed since using Ayyra Stationery. Every piece feels special and inspires me to create my best work."
                </p>

                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 rounded-full bg-gradient-to-r from-pinky to-pinklight flex items-center justify-center text-white font-bold text-xl mb-3">S</div>
                    <h4 class="font-semibold text-lg">Sari, Illustrator</h4>
                    <p class="text-gray-500">Regular customer since 2023</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FINAL CTA - Struktur sesuai gambar -->
    <section class="py-20 bg-gradient-to-r from-pinky to-pinklight">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 text-center">
            <h2 class="font-display text-3xl md:text-4xl text-white mb-6">
                Stationery that fits your creative life<br>
                <span class="text-cream">not your schedule</span>
            </h2>

            <p class="text-white/90 text-lg mb-10 max-w-2xl mx-auto">
                Premium quality stationery designed for your creative workflow. Available whenever inspiration strikes.
            </p>

            <a href="#"
               class="inline-block px-10 py-5 rounded-full bg-white text-pinky font-bold text-lg shadow-2xl hover:bg-cream hover:shadow-3xl transition">
                SHOP NOW
            </a>
        </div>
    </section>
</main>

<!-- FOOTER -->
<footer class="bg-gray-900 text-white pt-12 pb-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <div class="flex items-center justify-center space-x-3 mb-6">
                <div class="w-10 h-10 rounded-full bg-gradient-to-r from-pinky to-pinklight flex items-center justify-center">
                    <span class="text-white text-lg">🌸</span>
                </div>
                <h2 class="font-script text-2xl">Ayyra Stationery</h2>
            </div>

            <p class="text-gray-400 mb-8 max-w-xl mx-auto">
                Premium stationery that combines functionality, quality, and aesthetic design for creative individuals.
            </p>

            <div class="flex justify-center space-x-6 mb-8">
                <a href="#" class="text-gray-400 hover:text-white transition">
                    <i class="fab fa-instagram text-xl"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-white transition">
                    <i class="fab fa-facebook-f text-xl"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-white transition">
                    <i class="fab fa-tiktok text-xl"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-white transition">
                    <i class="fab fa-pinterest text-xl"></i>
                </a>
            </div>

            <div class="border-t border-gray-800 pt-8">
                <p class="text-gray-500 text-sm">
                    © 2026 Ayyra Stationery. All rights reserved.
                    <span class="block mt-2">Jl. Kreatif No. 123, Bandung, Indonesia | +62 812 3456 7890</span>
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- JavaScript for Mobile Menu -->
<script>
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        if (menu) {
            menu.classList.toggle('hidden');
        }
    });

    // Close mobile menu when clicking outside
    document.addEventListener('click', function(event) {
        const menu = document.getElementById('mobile-menu');
        const button = document.getElementById('mobile-menu-button');

        if (menu && button) {
            if (!menu.contains(event.target) && !button.contains(event.target)) {
                menu.classList.add('hidden');
            }
        }
    });
</script>

</body>
</html>
