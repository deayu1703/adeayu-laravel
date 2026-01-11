<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Ayyra Stationery</title>

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

        .input-field {
            transition: all 0.3s ease;
        }

        .input-field:focus {
            box-shadow: 0 0 0 3px rgba(233, 30, 99, 0.1);
        }
    </style>
</head>

<body class="font-body text-gray-800 gradient-bg min-h-screen">

<!-- HEADER / NAVBAR - Sama seperti welcome.blade.php -->
<header class="sticky top-0 z-50 bg-white shadow-sm">
    <div class="max-w-7xl mx-auto px-4 py-4 flex items-center justify-between">
        <!-- Logo -->
        <div class="flex items-center space-x-3">
            <a href="{{ route('welcome') }}" class="flex items-center space-x-3">
                <div class="w-10 h-10 rounded-full bg-gradient-to-r from-pinky to-pinklight flex items-center justify-center">
                    <span class="text-white text-lg">🌸</span>
                </div>
                <h1 class="font-script text-2xl text-pinky leading-tight">
                    Ayyra Stationery
                </h1>
            </a>
        </div>

        <!-- Desktop Menu - Sama seperti welcome.blade.php -->
        <nav class="hidden md:flex items-center space-x-8">
            <a href="{{ route('welcome') }}" class="nav-link font-medium text-gray-700 hover:text-pinky">HOME</a>
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

<main class="flex-1">
    <!-- HERO SECTION - Mengikuti struktur gambar referensi -->
    <section class="py-12 md:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                <!-- Left Column - Branding & Welcome -->
                <div class="animate-fade-in">
                    <!-- Brand Header -->
                    <div class="flex items-center space-x-4 mb-8">
                        <div class="w-16 h-16 rounded-full bg-gradient-to-r from-pinky to-pinklight flex items-center justify-center">
                            <span class="text-white text-2xl">🌸</span>
                        </div>
                        <div>
                            <h1 class="font-script text-3xl text-pinky">Ayyra Stationery</h1>
                            <p class="text-gray-600">Premium & Aesthetic Tools</p>
                        </div>
                    </div>

                    <h2 class="font-display text-4xl md:text-5xl text-gray-800 mb-6 leading-tight">
                        Welcome Back to<br>
                        <span class="text-pinky">Your Creative Space</span>
                    </h2>

                    <p class="text-lg text-gray-600 mb-8 max-w-xl">
                        Sign in to access your exclusive collection, track orders, and enjoy member-only benefits.
                        Where stationery meets art & creativity.
                    </p>

                    <!-- Features Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-10">
                        <div class="bg-white rounded-xl p-6 shadow-md">
                            <div class="w-12 h-12 rounded-full bg-blush flex items-center justify-center mb-4">
                                <i class="fas fa-box text-pinky"></i>
                            </div>
                            <h4 class="font-semibold text-gray-800 mb-2">Exclusive Collection</h4>
                            <p class="text-gray-600 text-sm">500+ premium products available</p>
                        </div>

                        <div class="bg-white rounded-xl p-6 shadow-md">
                            <div class="w-12 h-12 rounded-full bg-lavender flex items-center justify-center mb-4">
                                <i class="fas fa-tag text-blue-500"></i>
                            </div>
                            <h4 class="font-semibold text-gray-800 mb-2">Member Discounts</h4>
                            <p class="text-gray-600 text-sm">Up to 30% off for registered members</p>
                        </div>
                    </div>

                    <!-- Testimonial -->
                    <div class="bg-cream rounded-2xl p-6 border-l-4 border-pinky">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 rounded-full bg-gradient-to-r from-pinky to-pinklight flex items-center justify-center text-white font-bold mr-4">
                                S
                            </div>
                            <div>
                                <h5 class="font-semibold">Sari Dewi</h5>
                                <p class="text-sm text-gray-500">Illustrator & Member since 2024</p>
                            </div>
                        </div>
                        <p class="text-gray-600 italic">
                            "Ayyra's collection has transformed my creative process. Premium quality with beautiful designs!"
                        </p>
                        <div class="flex text-amber-400 mt-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Login Form -->
                <div class="animate-slide-up">
                    <div class="bg-white rounded-3xl shadow-2xl p-10 border border-gray-100">
                        <!-- Form Header -->
                        <div class="text-center mb-10">
                            <div class="inline-block p-4 rounded-2xl bg-blush/30 mb-6">
                                <i class="fas fa-sign-in-alt text-3xl text-pinky"></i>
                            </div>

                            <h2 class="font-display text-3xl text-gray-800 mb-3">
                                Sign In to <span class="text-pinky">Your Account</span>
                            </h2>

                            <p class="text-gray-600">
                                Enter your credentials to continue
                            </p>
                        </div>

                        <!-- Error Messages -->
                        @if ($errors->any())
                        <div class="mb-6 p-4 rounded-xl bg-red-50 border border-red-200">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-exclamation-circle text-red-500 mt-0.5"></i>
                                </div>
                                <div class="ml-3">
                                    <h3 class="text-sm font-medium text-red-800">
                                        Login Error
                                    </h3>
                                    <div class="mt-2 text-sm text-red-700">
                                        <ul class="list-disc pl-5 space-y-1">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif

                        <!-- Login Form -->
                        <form method="POST" action="{{ route('login') }}" class="space-y-6">
                            @csrf

                            <!-- Email Field -->
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                    <i class="fas fa-envelope mr-2 text-pinky"></i>Email Address
                                </label>
                                <div class="relative">
                                    <input
                                        type="email"
                                        name="email"
                                        id="email"
                                        value="{{ old('email') }}"
                                        required
                                        autocomplete="email"
                                        autofocus
                                        placeholder="your@email.com"
                                        class="w-full px-5 py-4 pl-12 rounded-xl border border-gray-300 input-field focus:border-pinky focus:outline-none"
                                    >
                                    <div class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400">
                                        <i class="fas fa-user"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Password Field -->
                            <div>
                                <div class="flex items-center justify-between mb-2">
                                    <label for="password" class="block text-sm font-medium text-gray-700">
                                        <i class="fas fa-lock mr-2 text-pinky"></i>Password
                                    </label>
                                    @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="text-sm text-pinky hover:text-pink-700 transition">
                                        Forgot password?
                                    </a>
                                    @endif
                                </div>
                                <div class="relative">
                                    <input
                                        type="password"
                                        name="password"
                                        id="password"
                                        required
                                        autocomplete="current-password"
                                        placeholder="Enter your password"
                                        class="w-full px-5 py-4 pl-12 rounded-xl border border-gray-300 input-field focus:border-pinky focus:outline-none"
                                    >
                                    <div class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400">
                                        <i class="fas fa-key"></i>
                                    </div>
                                    <button type="button" id="togglePassword" class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-pinky">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Remember Me -->
                            <div class="flex items-center">
                                <input
                                    type="checkbox"
                                    name="remember"
                                    id="remember"
                                    {{ old('remember') ? 'checked' : '' }}
                                    class="h-4 w-4 text-pinky focus:ring-pinky border-gray-300 rounded"
                                >
                                <label for="remember" class="ml-2 block text-sm text-gray-700">
                                    Remember me
                                </label>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit"
                                    class="w-full btn-primary text-white py-4 rounded-xl font-semibold text-lg shadow-lg hover:shadow-xl transition duration-300">
                                <i class="fas fa-sign-in-alt mr-2"></i> Sign In Now
                            </button>

                            <!-- Divider -->
                            <div class="relative my-8">
                                <div class="absolute inset-0 flex items-center">
                                    <div class="w-full border-t border-gray-300"></div>
                                </div>
                                <div class="relative flex justify-center text-sm">
                                    <span class="px-4 bg-white text-gray-500">Or sign in with</span>
                                </div>
                            </div>

                            <!-- Social Login -->
                            <div class="grid grid-cols-2 gap-4">
                                <a href="#"
                                   class="flex items-center justify-center px-4 py-3 border border-gray-300 rounded-xl hover:bg-gray-50 transition">
                                    <i class="fab fa-google text-red-500 mr-2"></i>
                                    <span>Google</span>
                                </a>
                                <a href="#"
                                   class="flex items-center justify-center px-4 py-3 border border-gray-300 rounded-xl hover:bg-gray-50 transition">
                                    <i class="fab fa-facebook text-blue-600 mr-2"></i>
                                    <span>Facebook</span>
                                </a>
                            </div>
                        </form>

                        <!-- Register Link -->
                        <div class="mt-10 text-center pt-6 border-t border-gray-200">
                            <p class="text-gray-600">
                                Don't have an account?
                                <a href="{{ route('register') }}" class="text-pinky font-semibold hover:text-pink-700 transition ml-1">
                                    Register Now
                                    <i class="fas fa-arrow-right ml-1"></i>
                                </a>
                            </p>
                            <p class="text-sm text-gray-500 mt-2">
                                Get access to exclusive member benefits and promotions
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- FOOTER - Sederhana seperti welcome.blade.php -->
<footer class="bg-gray-900 text-white pt-8 pb-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <div class="flex justify-center space-x-6 mb-6">
                <a href="#" class="text-gray-400 hover:text-white transition">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-white transition">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-white transition">
                    <i class="fab fa-tiktok"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-white transition">
                    <i class="fab fa-pinterest"></i>
                </a>
            </div>

            <div class="border-t border-gray-800 pt-6">
                <p class="text-gray-500 text-sm">
                    © 2026 Ayyra Stationery. All rights reserved.
                    <span class="block mt-2">Jl. Kreatif No. 123, Bandung, Indonesia | +62 812 3456 7890</span>
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- JavaScript -->
<script>
    // Mobile Menu Toggle
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
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

    // Toggle Password Visibility
    document.getElementById('togglePassword').addEventListener('click', function() {
        const passwordInput = document.getElementById('password');
        const icon = this.querySelector('i');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    });

    // Form validation feedback
    const form = document.querySelector('form');
    const inputs = form.querySelectorAll('input[required]');

    inputs.forEach(input => {
        input.addEventListener('blur', function() {
            if (this.value.trim() === '') {
                this.classList.add('border-red-300');
            } else {
                this.classList.remove('border-red-300');
                this.classList.add('border-green-300');
            }
        });

        input.addEventListener('input', function() {
            if (this.value.trim() !== '') {
                this.classList.remove('border-red-300');
                this.classList.add('border-green-300');
            }
        });
    });
</script>

</body>
</html>
