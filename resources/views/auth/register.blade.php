<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - Ayyra Stationery</title>
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

        .register-container {
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

        /* ================= REGISTER CARD ================= */
        .register-card {
            background-color: var(--off-white);
            border-radius: var(--radius-xl);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            padding: 2.5rem;
            width: 100%;
        }

        .register-form {
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

        .password-hint {
            font-size: 0.8rem;
            color: #666;
            margin-top: 0.3rem;
        }

        .terms-container {
            display: flex;
            align-items: flex-start;
            gap: 0.75rem;
            padding: 1rem;
            background-color: rgba(234, 216, 194, 0.3);
            border-radius: var(--radius-md);
        }

        .terms-checkbox {
            width: 1.1rem;
            height: 1.1rem;
            border-radius: var(--radius-sm);
            border: 1px solid #ccc;
            appearance: none;
            cursor: pointer;
            position: relative;
            flex-shrink: 0;
            margin-top: 0.2rem;
        }

        .terms-checkbox:checked {
            background-color: var(--maroon-light);
            border-color: var(--maroon-light);
        }

        .terms-checkbox:checked::after {
            content: '✓';
            position: absolute;
            color: white;
            font-size: 0.8rem;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .terms-label {
            font-size: 0.9rem;
            color: var(--text-dark);
            line-height: 1.5;
        }

        .terms-link {
            color: var(--maroon-light);
            font-weight: 600;
        }

        .terms-link:hover {
            text-decoration: underline;
        }

        .btn-register {
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

        .btn-register:hover {
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

        /* ================= SOCIAL REGISTER ================= */
        .social-register {
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

        /* ================= LOGIN LINK ================= */
        .login-link {
            text-align: center;
            color: #666;
            font-size: 0.9rem;
        }

        .login-link a {
            color: var(--maroon-light);
            font-weight: 600;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        /* ================= PASSWORD STRENGTH ================= */
        .password-strength {
            margin-top: 0.5rem;
        }

        .strength-meter {
            height: 4px;
            background-color: #eee;
            border-radius: 2px;
            overflow: hidden;
            margin-bottom: 0.3rem;
        }

        .strength-fill {
            height: 100%;
            width: 0%;
            transition: width 0.3s ease;
            background-color: #ddd;
        }

        .strength-text {
            font-size: 0.75rem;
            color: #666;
        }

        /* ================= RESPONSIVE ================= */
        @media (max-width: 576px) {
            body {
                padding: 1rem;
            }

            .register-card {
                padding: 2rem 1.5rem;
            }

            .welcome-title {
                font-size: 1.8rem;
            }

            .social-register {
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

            .terms-container {
                padding: 0.8rem;
            }
        }
    </style>
</head>
<body>
    <div class="register-container">
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
                Buat Akun Baru
            </h2>
            <p class="welcome-subtitle">
                Daftar untuk mulai berbelanja di Ayyra Stationery
            </p>
        </div>

        {{-- ================= REGISTER CARD ================= --}}
        <div class="register-card">
            <form method="POST" action="{{ route('register') }}" class="register-form">
                @csrf

                {{-- Nama --}}
                <div class="form-group">
                    <label for="name" class="form-label">
                        Nama Lengkap
                    </label>
                    <input id="name" name="name" type="text" required
                        value="{{ old('name') }}"
                        placeholder="Nama lengkap Anda"
                        class="form-input">
                    @error('name')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

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
                    <label for="password" class="form-label">
                        Kata Sandi
                    </label>
                    <input id="password" name="password" type="password" required
                        placeholder="••••••••"
                        class="form-input">
                    <div class="password-strength">
                        <div class="strength-meter">
                            <div class="strength-fill" id="passwordStrengthFill"></div>
                        </div>
                        <div class="strength-text" id="passwordStrengthText">
                            Minimal 8 karakter, kombinasi huruf dan angka
                        </div>
                    </div>
                    @error('password')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Konfirmasi Password --}}
                <div class="form-group">
                    <label for="password_confirmation" class="form-label">
                        Konfirmasi Kata Sandi
                    </label>
                    <input id="password_confirmation" name="password_confirmation" type="password" required
                        placeholder="••••••••"
                        class="form-input">
                </div>

                {{-- Terms and Conditions --}}
                <div class="terms-container">
                    <input id="terms" name="terms" type="checkbox" required
                        class="terms-checkbox">
                    <label for="terms" class="terms-label">
                        Saya setuju dengan
                        <a href="#" class="terms-link">Syarat & Ketentuan</a>
                        dan
                        <a href="#" class="terms-link">Kebijakan Privasi</a>
                        Ayyra Stationery
                    </label>
                </div>

                {{-- Submit Button --}}
                <button type="submit" class="btn-register">
                    Daftar Sekarang
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

            {{-- Social Register --}}
            <div class="social-register">
                <button type="button" class="btn-social">
                    <i class="fab fa-google" style="color: #DB4437;"></i>
                    Google
                </button>
                <button type="button" class="btn-social">
                    <i class="fab fa-facebook" style="color: #4267B2;"></i>
                    Facebook
                </button>
            </div>

            {{-- Login Link --}}
            <p class="login-link">
                Sudah punya akun?
                <a href="{{ route('login') }}">
                    Masuk sekarang
                </a>
            </p>
        </div>
    </div>

    <script>
        // Animasi sederhana saat halaman dimuat
        document.addEventListener('DOMContentLoaded', function() {
            const registerCard = document.querySelector('.register-card');
            registerCard.style.opacity = '0';
            registerCard.style.transform = 'translateY(20px)';

            setTimeout(() => {
                registerCard.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                registerCard.style.opacity = '1';
                registerCard.style.transform = 'translateY(0)';
            }, 100);
        });

        // Password strength indicator
        const passwordInput = document.getElementById('password');
        const strengthFill = document.getElementById('passwordStrengthFill');
        const strengthText = document.getElementById('passwordStrengthText');

        passwordInput.addEventListener('input', function() {
            const password = this.value;
            let strength = 0;
            let text = 'Minimal 8 karakter, kombinasi huruf dan angka';
            let color = '#ddd';

            if (password.length >= 8) strength += 25;
            if (/[A-Z]/.test(password)) strength += 25;
            if (/[0-9]/.test(password)) strength += 25;
            if (/[^A-Za-z0-9]/.test(password)) strength += 25;

            strengthFill.style.width = `${strength}%`;

            if (strength === 0) {
                color = '#ddd';
                text = 'Masukkan kata sandi';
            } else if (strength <= 25) {
                color = '#ff4444';
                text = 'Sangat lemah';
            } else if (strength <= 50) {
                color = '#ff8800';
                text = 'Lemah';
            } else if (strength <= 75) {
                color = '#ffbb33';
                text = 'Cukup kuat';
            } else {
                color = '#00C851';
                text = 'Sangat kuat';
            }

            strengthFill.style.backgroundColor = color;
            strengthText.textContent = text;
            strengthText.style.color = color;
        });

        // Confirm password validation
        const confirmPasswordInput = document.getElementById('password_confirmation');

        function validatePassword() {
            const password = passwordInput.value;
            const confirmPassword = confirmPasswordInput.value;

            if (confirmPassword === '') return;

            if (password !== confirmPassword) {
                confirmPasswordInput.style.borderColor = '#ff4444';
                confirmPasswordInput.style.boxShadow = '0 0 0 3px rgba(255, 68, 68, 0.2)';
            } else {
                confirmPasswordInput.style.borderColor = '#00C851';
                confirmPasswordInput.style.boxShadow = '0 0 0 3px rgba(0, 200, 81, 0.2)';
            }
        }

        passwordInput.addEventListener('input', validatePassword);
        confirmPasswordInput.addEventListener('input', validatePassword);

        // Terms checkbox validation
        const termsCheckbox = document.getElementById('terms');
        const registerButton = document.querySelector('.btn-register');

        termsCheckbox.addEventListener('change', function() {
            if (this.checked) {
                registerButton.disabled = false;
                registerButton.style.opacity = '1';
            } else {
                registerButton.disabled = true;
                registerButton.style.opacity = '0.6';
            }
        });

        // Set initial state
        registerButton.disabled = !termsCheckbox.checked;
        registerButton.style.opacity = termsCheckbox.checked ? '1' : '0.6';
    </script>
</body>
</html>
