<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - Ayyra Stationery</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Quicksand:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            /* Palette warna soft pink dan pendukung */
            --pink-dark: #E8A2A8;
            --pink-medium: #F4C2C2;
            --pink-light: #FFE5E5;
            --pink-soft: #FFF0F0;
            --cream: #FFF9F5;
            --off-white: #FFFDFB;
            --lavender: #E6E6FA;
            --mint: #D4F1E6;
            --text-dark: #5A4A4A;
            --text-light: #FFF9F9;
            --shadow: rgba(232, 162, 168, 0.15);

            /* Border radius */
            --radius-sm: 8px;
            --radius-md: 12px;
            --radius-lg: 20px;
            --radius-xl: 30px;

            /* Transition */
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: var(--text-dark);
            background: linear-gradient(135deg, var(--pink-soft) 0%, var(--lavender) 100%);
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
        }

        h1, h2, h3, h4 {
            font-family: 'Quicksand', sans-serif;
            font-weight: 600;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .login-container {
            max-width: 480px;
            width: 100%;
        }

        /* ================= BRAND HEADER ================= */
        .brand-header {
            text-align: center;
            margin-bottom: 2.5rem;
        }

        .logo-link {
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 1.5rem;
        }

        .logo-icon {
            width: 3rem;
            height: 3rem;
            border-radius: 50%;
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 15px var(--shadow);
        }

        .logo-text {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--pink-dark);
        }

        .logo-text span {
            color: var(--text-dark);
        }

        .welcome-title {
            font-size: 2.2rem;
            color: var(--pink-dark);
            margin-bottom: 0.5rem;
        }

        .welcome-subtitle {
            color: var(--text-dark);
            font-size: 1rem;
        }

        /* ================= LOGIN CARD ================= */
        .login-card {
            background-color: white;
            border-radius: var(--radius-xl);
            box-shadow: 0 15px 35px rgba(232, 162, 168, 0.2);
            padding: 2.5rem;
            width: 100%;
        }

        .login-form {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-label {
            font-size: 0.9rem;
            font-weight: 500;
            color: var(--pink-dark);
            margin-bottom: 0.5rem;
        }

        .form-input {
            padding: 1rem;
            border: 1px solid #ddd;
            border-radius: var(--radius-lg);
            font-family: 'Poppins', sans-serif;
            font-size: 1rem;
            transition: var(--transition);
            background-color: var(--cream);
        }

        .form-input:focus {
            outline: none;
            border-color: var(--pink-medium);
            box-shadow: 0 0 0 3px rgba(244, 194, 194, 0.3);
            background-color: white;
        }

        .form-input::placeholder {
            color: #aaa;
        }

        .password-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .forgot-link {
            font-size: 0.85rem;
            color: var(--pink-medium);
            font-weight: 500;
        }

        .forgot-link:hover {
            color: var(--pink-dark);
            text-decoration: underline;
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .remember-checkbox {
            width: 1.1rem;
            height: 1.1rem;
            border-radius: var(--radius-sm);
            border: 1px solid #ccc;
            appearance: none;
            cursor: pointer;
            position: relative;
        }

        .remember-checkbox:checked {
            background-color: var(--pink-medium);
            border-color: var(--pink-medium);
        }

        .remember-checkbox:checked::after {
            content: '✓';
            position: absolute;
            color: white;
            font-size: 0.8rem;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .remember-label {
            font-size: 0.9rem;
            color: var(--text-dark);
        }

        .btn-login {
            background: linear-gradient(135deg, var(--pink-medium) 0%, var(--pink-dark) 100%);
            color: white;
            padding: 1rem;
            border-radius: var(--radius-lg);
            font-family: 'Quicksand', sans-serif;
            font-weight: 600;
            font-size: 1.1rem;
            border: none;
            cursor: pointer;
            transition: var(--transition);
            margin-top: 0.5rem;
            box-shadow: 0 4px 15px rgba(232, 162, 168, 0.3);
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(232, 162, 168, 0.4);
        }

        .error-message {
            background-color: var(--pink-soft);
            border: 1px solid var(--pink-light);
            color: #c00;
            padding: 0.75rem;
            border-radius: var(--radius-md);
            font-size: 0.85rem;
            margin-top: 0.5rem;
        }

        /* ================= DIVIDER ================= */
        .divider {
            display: flex;
            align-items: center;
            margin: 2rem 0;
        }

        .divider-line {
            flex-grow: 1;
            height: 1px;
            background: linear-gradient(90deg, transparent 0%, var(--pink-light) 50%, transparent 100%);
        }

        .divider-text {
            padding: 0 1rem;
            color: var(--pink-medium);
            font-size: 0.9rem;
        }

        /* ================= SOCIAL LOGIN ================= */
        .social-login {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .btn-social {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 0.9rem;
            border: 1px solid var(--pink-light);
            border-radius: var(--radius-lg);
            background-color: white;
            font-weight: 500;
            font-size: 0.9rem;
            cursor: pointer;
            transition: var(--transition);
        }

        .btn-social:hover {
            background-color: var(--pink-soft);
            border-color: var(--pink-medium);
            transform: translateY(-2px);
        }

        /* ================= REGISTER LINK ================= */
        .register-link {
            text-align: center;
            color: var(--text-dark);
            font-size: 0.9rem;
        }

        .register-link a {
            color: var(--pink-medium);
            font-weight: 600;
        }

        .register-link a:hover {
            color: var(--pink-dark);
            text-decoration: underline;
        }

        /* ================= RESPONSIVE ================= */
        @media (max-width: 576px) {
            body {
                padding: 1rem;
            }

            .login-card {
                padding: 2rem 1.5rem;
            }

            .welcome-title {
                font-size: 1.8rem;
            }

            .social-login {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 400px) {
            .logo-link {
                flex-direction: column;
                gap: 0.5rem;
            }

            .welcome-title {
                font-size: 1.6rem;
            }
        }

        /* ================= FLOWER DECORATION ================= */
        .flower-decoration {
            position: fixed;
            width: 100px;
            height: 100px;
            opacity: 0.1;
            z-index: -1;
            pointer-events: none;
        }

        .flower-1 {
            top: 10%;
            left: 5%;
            transform: rotate(15deg);
        }

        .flower-2 {
            bottom: 15%;
            right: 8%;
            transform: rotate(-20deg);
        }

        .flower-3 {
            top: 50%;
            left: 2%;
            transform: rotate(45deg);
        }

        /* ================= PASSWORD VISIBILITY TOGGLE ================= */
        .password-wrapper {
            position: relative;
        }

        .password-toggle {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: var(--pink-medium);
            cursor: pointer;
            font-size: 1.1rem;
        }
    </style>
</head>
<body>
    <!-- Flower Decorations -->
    <div class="flower-decoration flower-1">
        <i class="fas fa-heart" style="font-size: 100px; color: var(--pink-medium);"></i>
    </div>
    <div class="flower-decoration flower-2">
        <i class="fas fa-star" style="font-size: 80px; color: var(--pink-medium);"></i>
    </div>
    <div class="flower-decoration flower-3">
        <i class="fas fa-feather-alt" style="font-size: 70px; color: var(--pink-medium);"></i>
    </div>

    <div class="login-container">
        {{-- ================= BRAND HEADER ================= --}}
        <div class="brand-header">
            <a href="/" class="logo-link">
                <div class="logo-icon">
                    <i class="fas fa-pencil-alt" style="color: var(--pink-dark); font-size: 1.2rem;"></i>
                </div>
                <div class="logo-text">
                    Ayyra <span>Stationery</span>
                </div>
            </a>

            <h2 class="welcome-title">
                Selamat Datang Kembali ✨
            </h2>
            <p class="welcome-subtitle">
                Masuk untuk melanjutkan aktivitas Anda
            </p>
        </div>

        {{-- ================= LOGIN CARD ================= --}}
        <div class="login-card">
            <form method="POST" action="{{ route('login') }}" class="login-form">
                @csrf

                {{-- Email --}}
                <div class="form-group">
                    <label for="email" class="form-label">
                        <i class="fas fa-envelope" style="margin-right: 8px;"></i>
                        Alamat Email
                    </label>
                    <input id="email" name="email" type="email" required
                        value="{{ old('email') }}"
                        placeholder="email@contoh.com"
                        class="form-input">
                    @error('email')
                        <div class="error-message">
                            <i class="fas fa-exclamation-circle" style="margin-right: 5px;"></i>
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Password --}}
                <div class="form-group">
                    <div class="password-header">
                        <label for="password" class="form-label">
                            <i class="fas fa-lock" style="margin-right: 8px;"></i>
                            Kata Sandi
                        </label>
                        <a href="{{ route('password.request') }}"
                           class="forgot-link">
                            Lupa kata sandi?
                        </a>
                    </div>

                    <div class="password-wrapper">
                        <input id="password" name="password" type="password" required
                            placeholder="••••••••"
                            class="form-input">
                        <button type="button" class="password-toggle" id="togglePassword">
                            <i class="far fa-eye"></i>
                        </button>
                    </div>
                    @error('password')
                        <div class="error-message">
                            <i class="fas fa-exclamation-circle" style="margin-right: 5px;"></i>
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Remember Me --}}
                <div class="remember-me">
                    <input id="remember" name="remember" type="checkbox"
                        class="remember-checkbox" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember" class="remember-label">
                        Ingat saya
                    </label>
                </div>

                {{-- Submit Button --}}
                <button type="submit" class="btn-login">
                    <i class="fas fa-sign-in-alt" style="margin-right: 10px;"></i>
                    Masuk
                </button>

                {{-- Global Errors --}}
                @if ($errors->any())
                    <div class="error-message">
                        @foreach ($errors->all() as $error)
                            <p><i class="fas fa-exclamation-circle" style="margin-right: 5px;"></i>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
            </form>

            {{-- Divider --}}
            <div class="divider">
                <div class="divider-line"></div>
                <span class="divider-text">atau masuk dengan</span>
                <div class="divider-line"></div>
            </div>

            {{-- Social Login --}}
            <div class="social-login">
                <button type="button" class="btn-social">
                    <i class="fab fa-google" style="color: #DB4437;"></i>
                    Google
                </button>
                <button type="button" class="btn-social">
                    <i class="fab fa-facebook" style="color: #4267B2;"></i>
                    Facebook
                </button>
            </div>

            {{-- Register Link --}}
            <p class="register-link">
                Belum punya akun?
                <a href="{{ route('register') }}">
                    Daftar sekarang
                </a>
            </p>
        </div>
    </div>

    <script>
        // Animasi saat halaman dimuat
        document.addEventListener('DOMContentLoaded', function() {
            const loginCard = document.querySelector('.login-card');
            const flowers = document.querySelectorAll('.flower-decoration');

            // Animasi login card
            loginCard.style.opacity = '0';
            loginCard.style.transform = 'translateY(20px)';

            setTimeout(() => {
                loginCard.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                loginCard.style.opacity = '1';
                loginCard.style.transform = 'translateY(0)';
            }, 100);

            // Animasi bunga dekorasi
            flowers.forEach((flower, index) => {
                flower.style.opacity = '0';
                flower.style.transform = `rotate(${index * 15}deg) scale(0.5)`;

                setTimeout(() => {
                    flower.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
                    flower.style.opacity = '0.1';
                    flower.style.transform = `rotate(${index * 15}deg) scale(1)`;
                }, 300 + (index * 200));
            });
        });

        // Toggle password visibility
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

        // Efek hover pada input
        const inputs = document.querySelectorAll('.form-input');
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.style.transform = 'translateY(-2px)';
            });

            input.addEventListener('blur', function() {
                this.parentElement.style.transform = 'translateY(0)';
            });
        });

        // Efek saat tombol sosial diklik
        const socialButtons = document.querySelectorAll('.btn-social');
        socialButtons.forEach(button => {
            button.addEventListener('click', function() {
                this.style.transform = 'translateY(-2px) scale(0.98)';
                setTimeout(() => {
                    this.style.transform = 'translateY(-2px) scale(1)';
                }, 150);
            });
        });
    </script>
</body>
</html>
