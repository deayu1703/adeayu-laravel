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
            /* Palette warna maroon dan pendukung */
            --maroon-dark: #6B1E23;
            --maroon-medium: #8C2B30;
            --maroon-light: #B9545A;
            --cream: #F7F0E6;
            --off-white: #FFFBF5;
            --dusty-pink: #E8C4C4;
            --beige: #EAD8C2;
            --text-dark: #3A1C1E;
            --text-light: #FFF9F5;
            --shadow: rgba(107, 30, 35, 0.1);

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
            background-color: var(--maroon-medium);
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
            background-color: var(--cream);
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .logo-text {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--cream);
        }

        .logo-text span {
            color: var(--dusty-pink);
        }

        .welcome-title {
            font-size: 2.2rem;
            color: var(--cream);
            margin-bottom: 0.5rem;
        }

        .welcome-subtitle {
            color: var(--dusty-pink);
            font-size: 1rem;
        }

        /* ================= LOGIN CARD ================= */
        .login-card {
            background-color: var(--off-white);
            border-radius: var(--radius-xl);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
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
            color: var(--maroon-dark);
            margin-bottom: 0.5rem;
        }

        .form-input {
            padding: 1rem;
            border: 1px solid #ddd;
            border-radius: var(--radius-lg);
            font-family: 'Poppins', sans-serif;
            font-size: 1rem;
            transition: var(--transition);
        }

        .form-input:focus {
            outline: none;
            border-color: var(--maroon-light);
            box-shadow: 0 0 0 3px rgba(185, 84, 90, 0.2);
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
            color: var(--maroon-light);
            font-weight: 500;
        }

        .forgot-link:hover {
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
            background-color: var(--maroon-light);
            border-color: var(--maroon-light);
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
            background-color: var(--maroon-dark);
            color: var(--cream);
            padding: 1rem;
            border-radius: var(--radius-lg);
            font-family: 'Quicksand', sans-serif;
            font-weight: 600;
            font-size: 1.1rem;
            border: none;
            cursor: pointer;
            transition: var(--transition);
            margin-top: 0.5rem;
        }

        .btn-login:hover {
            background-color: var(--maroon-medium);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(107, 30, 35, 0.3);
        }

        .error-message {
            background-color: rgba(255, 0, 0, 0.05);
            border: 1px solid rgba(255, 0, 0, 0.2);
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
            background-color: #ddd;
        }

        .divider-text {
            padding: 0 1rem;
            color: #888;
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
            border: 1px solid #ddd;
            border-radius: var(--radius-lg);
            background-color: white;
            font-weight: 500;
            font-size: 0.9rem;
            cursor: pointer;
            transition: var(--transition);
        }

        .btn-social:hover {
            background-color: var(--cream);
            border-color: #bbb;
        }

        /* ================= REGISTER LINK ================= */
        .register-link {
            text-align: center;
            color: #666;
            font-size: 0.9rem;
        }

        .register-link a {
            color: var(--maroon-light);
            font-weight: 600;
        }

        .register-link a:hover {
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
    </style>
</head>
<body>
    <div class="login-container">
        {{-- ================= BRAND HEADER ================= --}}
        <div class="brand-header">
            <a href="/" class="logo-link">
                <div class="logo-icon">
                    <i class="fas fa-pencil-alt" style="color: var(--maroon-dark); font-size: 1.2rem;"></i>
                </div>
                <div class="logo-text">
                    Ayyra <span>Stationery</span>
                </div>
            </a>

            <h2 class="welcome-title">
                Selamat Datang Kembali
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
                        Alamat Email
                    </label>
                    <input id="email" name="email" type="email" required
                        value="{{ old('email') }}"
                        placeholder="email@contoh.com"
                        class="form-input">
                    @error('email')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Password --}}
                <div class="form-group">
                    <div class="password-header">
                        <label for="password" class="form-label">
                            Kata Sandi
                        </label>
                        <a href="{{ route('password.request') }}"
                           class="forgot-link">
                            Lupa kata sandi?
                        </a>
                    </div>

                    <input id="password" name="password" type="password" required
                        placeholder="••••••••"
                        class="form-input">
                    @error('password')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Remember Me --}}
                <div class="remember-me">
                    <input id="remember" name="remember" type="checkbox"
                        class="remember-checkbox">
                    <label for="remember" class="remember-label">
                        Ingat saya
                    </label>
                </div>

                {{-- Submit Button --}}
                <button type="submit" class="btn-login">
                    Masuk
                </button>

                {{-- Global Errors --}}
                @if ($errors->any())
                    <div class="error-message">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
            </form>

            {{-- Divider --}}
            <div class="divider">
                <div class="divider-line"></div>
                <span class="divider-text">atau</span>
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
        // Animasi sederhana saat halaman dimuat
        document.addEventListener('DOMContentLoaded', function() {
            const loginCard = document.querySelector('.login-card');
            loginCard.style.opacity = '0';
            loginCard.style.transform = 'translateY(20px)';

            setTimeout(() => {
                loginCard.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                loginCard.style.opacity = '1';
                loginCard.style.transform = 'translateY(0)';
            }, 100);
        });

        // Toggle password visibility (opsional - bisa ditambahkan nanti)
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('password');
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
        }
    </script>
</body>
</html>
