<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login | Ayyra Stationery</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fonts -->
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

<body class="font-body min-h-screen flex items-center justify-center bg-gradient-to-br from-blush via-lavender to-babyblue relative overflow-hidden">

<!-- 🌸 dekorasi -->
<span class="absolute top-10 left-10 text-3xl">🎀</span>
<span class="absolute top-24 right-16 text-3xl">🦋</span>
<span class="absolute bottom-16 left-20 text-3xl">🌸</span>
<span class="absolute bottom-10 right-10 text-3xl">✨</span>

<!-- 💖 CARD LOGIN -->
<div class="bg-white/90 backdrop-blur-xl rounded-3xl shadow-2xl p-10 w-full max-w-md relative z-10">

    <h2 class="font-script text-4xl text-pinky text-center mb-2">
        Welcome Back 💕
    </h2>
    <p class="text-center text-gray-500 mb-8">
        Masuk ke dunia stationery imut ✨
    </p>

    @if ($errors->any())
        <div class="mb-4 text-sm text-red-500 text-center">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-4">
            <input type="email" name="email" placeholder="Email"
                   class="w-full px-5 py-3 rounded-full border focus:outline-none focus:ring-2 focus:ring-pinky">
        </div>

        <div class="mb-6">
            <input type="password" name="password" placeholder="Password"
                   class="w-full px-5 py-3 rounded-full border focus:outline-none focus:ring-2 focus:ring-pinky">
        </div>

        <button type="submit"
                class="w-full bg-gradient-to-r from-pinky to-pink-500 text-white py-3 rounded-full font-semibold shadow-lg hover:scale-105 transition">
            Login 🎀
        </button>
    </form>

    <p class="text-center text-sm mt-6">
        Belum punya akun?
        <a href="{{ route('register') }}" class="text-pinky font-semibold hover:underline">
            Register ✨
        </a>
    </p>
</div>

</body>
</html>
