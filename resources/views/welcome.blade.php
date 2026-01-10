<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Ayyra Stationery</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        script: ['Pacifico', 'cursive'],
                        body: ['Nunito', 'sans-serif'],
                    },
                    colors: {
                        pinky: '#F472B6',
                        blush: '#FBCFE8',
                        lavender: '#DDD6FE',
                        babyblue: '#BAE6FD',
                        peach: '#FED7AA',
                        cream: '#FFF7ED',
                    }
                }
            }
        }
    </script>
</head>

<body class="font-body bg-gradient-to-br from-blush via-lavender to-babyblue text-gray-700">

<!-- 🌸 HEADER / NAVBAR -->
<header class="relative">
    <div class="max-w-7xl mx-auto px-6 py-6 flex items-center justify-between">

        <!-- Logo -->
<div class="text-center mb-8">
    <h1 class="font-script text-4xl text-pinky mb-2">
        Ayyra Stationery
    </h1>
    <p class="text-sm text-pink-600 tracking-wide">
        cute • colorful • dreamy ✨
    </p>
</div>

        <!-- Menu -->
        <nav class="hidden md:flex gap-8 font-semibold text-pink-700">
            <a href="#" class="hover:text-pinky">Beranda</a>
            <a href="#" class="hover:text-pinky">Toko</a>
            <a href="#" class="hover:text-pinky">Koleksi</a>
            <a href="#" class="hover:text-pinky">Tentang</a>
            <a href="#" class="hover:text-pinky">Kontak</a>
        </nav>

        <!-- Auth Buttons -->
        <div class="flex gap-3">
            <a href="{{ route('login') }}"
               class="px-4 py-2 rounded-full border-2 border-pinky text-pinky font-semibold hover:bg-pinky hover:text-white transition">
                Login
            </a>

            <a href="{{ route('register') }}"
               class="px-4 py-2 rounded-full bg-pinky text-white font-semibold hover:bg-pink-600 transition shadow">
                Register
            </a>
        </div>
    </div>

    <!-- Decorative shapes -->
    <span class="absolute left-6 top-6 text-2xl">☁️</span>
    <span class="absolute right-10 top-10 text-2xl">🦋</span>
</header>

<!-- ✨ HERO SECTION -->
<section class="py-24 text-center relative">
    <h2 class="font-script text-5xl md:text-6xl text-pinky mb-6">
        Sparkling Collection ✨
    </h2>

    <p class="max-w-xl mx-auto mb-10 text-gray-700">
        Alat tulis lucu & colorful untuk menemani hari belajarmu 💕  
        Pulpen gemas, buku cantik, dan stationery impian anak perempuan 🌈
    </p>

    <a href="#"
       class="inline-block bg-gradient-to-r from-pinky to-pink-500 text-white px-10 py-4 rounded-full shadow-xl hover:scale-105 transition">
        Belanja Sekarang
    </a>

    <!-- Polaroid Style Products -->
    <div class="mt-16 flex justify-center gap-6 flex-wrap">
        <div class="bg-white p-4 rounded-2xl shadow rotate-[-6deg]">🖊️</div>
        <div class="bg-white p-4 rounded-2xl shadow rotate-[4deg]">📒</div>
        <div class="bg-white p-4 rounded-2xl shadow rotate-[-2deg]">🎀</div>
    </div>

    <span class="absolute left-12 bottom-10 text-3xl">✨</span>
    <span class="absolute right-20 top-16 text-3xl">🌸</span>
</section>

<!-- 🎀 PRODUK UNGGULAN -->
<section class="py-20 bg-cream">
    <h3 class="text-center font-script text-4xl text-pinky mb-14">
        Produk Terlaris 🎀
    </h3>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 max-w-6xl mx-auto px-6">
        <div class="bg-white rounded-3xl p-6 shadow-xl text-center">
            <div class="h-40 bg-blush rounded-2xl mb-4 flex items-center justify-center text-4xl">🖊️</div>
            <h4 class="font-semibold text-lg">Pulpen Lucu</h4>
            <p class="text-pinky font-bold mt-2">Rp 15.000</p>
        </div>

        <div class="bg-white rounded-3xl p-6 shadow-xl text-center">
            <div class="h-40 bg-lavender rounded-2xl mb-4 flex items-center justify-center text-4xl">📔</div>
            <h4 class="font-semibold text-lg">Buku Catatan</h4>
            <p class="text-pinky font-bold mt-2">Rp 35.000</p>
        </div>

        <div class="bg-white rounded-3xl p-6 shadow-xl text-center">
            <div class="h-40 bg-babyblue rounded-2xl mb-4 flex items-center justify-center text-4xl">🎀</div>
            <h4 class="font-semibold text-lg">Aksesoris Imut</h4>
            <p class="text-pinky font-bold mt-2">Rp 20.000</p>
        </div>
    </div>
</section>

<!-- ☁️ KATEGORI -->
<section class="py-20 text-center">
    <h3 class="font-script text-4xl text-pinky mb-12">
        Koleksi Spesial 🌷
    </h3>

    <div class="flex flex-wrap justify-center gap-6">
        <span class="bg-blush px-8 py-4 rounded-full shadow font-semibold">Best Seller</span>
        <span class="bg-lavender px-8 py-4 rounded-full shadow font-semibold">Promo</span>
        <span class="bg-babyblue px-8 py-4 rounded-full shadow font-semibold">Ide Hadiah</span>
    </div>
</section>

<!-- 🌷 FOOTER -->
<footer class="bg-gradient-to-r from-blush to-peach py-10 text-center">
    <div class="text-2xl mb-4">👑 🌸 ☕</div>
    <p class="text-sm text-gray-600">
        © 2026 Ayyra Stationery • Made with 💕
    </p>
</footer>

</body>
</html>
