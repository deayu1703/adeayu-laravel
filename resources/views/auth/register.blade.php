<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register | Ayyra Stationery</title>

    <script src="https://cdn.tailwindcss.com"></script>

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
                        lavender: '#E9D5FF',
                        babyblue: '#C7D2FE',
                        cream: '#FFF7ED',
                    }
                }
            }
        }
    </script>
</head>

<body class="font-body min-h-screen flex items-center justify-center bg-gradient-to-br from-lavender via-blush to-babyblue relative overflow-hidden">

<!-- 🌸 dekorasi -->
<span class="absolute top-12 left-12 text-3xl">🌸</span>
<span class="absolute top-20 right-20 text-3xl">🫧</span>
<span class="absolute bottom-20 left-16 text-3xl">🦋</span>
<span class="absolute bottom-10 right-10 text-3xl">🎀</span>

<!-- 💖 CARD REGISTER -->
<div class="bg-white/90 backdrop-blur-xl rounded-3xl shadow-2xl p-10 w-full max-w-md relative z-10">

    <h2 class="font-script text-4xl text-pinky text-center mb-2">
        Join Ayyra 💖
    </h2>
    <p class="text-center text-gray-500 mb-8">
        Buat akun dan mulai belanja lucu ✨
    </p>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="mb-4">
            <input type="text" name="name" placeholder="Nama Lengkap"
                   class="w-full px-5 py-3 rounded-full border focus:outline-none focus:ring-2 focus:ring-pinky">
        </div>

        <div class="mb-4">
            <input type="email" name="email" placeholder="Email"
                   class="w-full px-5 py-3 rounded-full border focus:outline-none focus:ring-2 focus:ring-pinky">
        </div>

        <div class="mb-4">
            <input type="password" name="password" placeholder="Password"
                   class="w-full px-5 py-3 rounded-full border focus:outline-none focus:ring-2 focus:ring-pinky">
        </div>

        <div class="mb-6">
            <input type="password" name="password_confirmation" placeholder="Konfirmasi Password"
                   class="w-full px-5 py-3 rounded-full border focus:outline-none focus:ring-2 focus:ring-pinky">
        </div>

        <button type="submit"
                class="w-full bg-gradient-to-r from-pinky to-pink-500 text-white py-3 rounded-full font-semibold shadow-lg hover:scale-105 transition">
            Register 🌸
        </button>
    </form>

    <p class="text-center text-sm mt-6">
        Sudah punya akun?
        <a href="{{ route('login') }}" class="text-pinky font-semibold hover:underline">
            Login 🎀
        </a>
    </p>
</div>

</body>
</html>
