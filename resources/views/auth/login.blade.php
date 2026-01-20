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
            /* === WARNA DISAMAKAN DENGAN INDEX === */
            --maroon: #6b1d1d;
            --maroon-dark: #541616;

            --pink-soft: #fdecec;
            --pink-card: #f5dada;
            --pink-border: #e7bcbc;

            --text-dark: #4a3a3a;
            --text-light: #ffffff;

            --shadow: rgba(107, 29, 29, 0.15);

            --radius-sm: 8px;
            --radius-md: 12px;
            --radius-lg: 20px;
            --radius-xl: 30px;

            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, var(--pink-soft), #fff);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: var(--text-dark);
            padding: 1.5rem;
        }

        h1, h2 {
            font-family: 'Quicksand', sans-serif;
        }

        /* ================= CONTAINER ================= */
        .login-container {
            max-width: 480px;
            width: 100%;
        }

        /* ================= BRAND ================= */
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
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 15px var(--shadow);
        }

        .logo-icon i {
            color: var(--maroon);
        }

        .logo-text {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--maroon);
        }

        .logo-text span {
            color: var(--text-dark);
        }

        .welcome-title {
            font-size: 2.1rem;
            color: var(--maroon);
        }

        .welcome-subtitle {
            font-size: 1rem;
            color: var(--text-dark);
        }

        /* ================= CARD ================= */
        .login-card {
            background: white;
            border-radius: var(--radius-xl);
            padding: 2.5rem;
            box-shadow: 0 20px 40px var(--shadow);
        }

        .login-form {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .form-label {
            font-size: 0.9rem;
            font-weight: 500;
            color: var(--maroon);
            margin-bottom: 0.5rem;
        }

        .form-input {
            width: 100%;
            padding: 1rem;
            border-radius: var(--radius-lg);
            border: 1px solid var(--pink-border);
            background: var(--pink-soft);
            transition: var(--transition);
        }

        .form-input:focus {
            outline: none;
            border-color: var(--maroon);
            background: white;
            box-shadow: 0 0 0 3px rgba(107, 29, 29, 0.15);
        }

        .forgot-link {
            font-size: 0.85rem;
            color: var(--maroon);
        }

        .forgot-link:hover {
            text-decoration: underline;
        }

        /* ================= BUTTON ================= */
        .btn-login {
            background: linear-gradient(135deg, var(--maroon), var(--maroon-dark));
            color: white;
            padding: 1rem;
            border-radius: var(--radius-lg);
            font-size: 1.1rem;
            font-weight: 600;
            border: none;
            cursor: pointer;
            transition: var(--transition);
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px var(--shadow);
        }

        /* ================= ERROR ================= */
        .error-message {
            background: var(--pink-soft);
            border: 1px solid var(--pink-border);
            color: var(--maroon);
            padding: 0.75rem;
            border-radius: var(--radius-md);
            font-size: 0.85rem;
        }

        /* ================= REGISTER ================= */
        .register-link {
            text-align: center;
            font-size: 0.9rem;
            margin-top: 1.5rem;
        }

        .register-link a {
            color: var(--maroon);
            font-weight: 600;
        }
    </style>
</head>

<body>

<div class="login-container">

    <div class="brand-header">
        <a href="/" class="logo-link">
            <div class="logo-icon">
                <i class="fas fa-pencil-alt"></i>
            </div>
            <div class="logo-text">
                Ayyra <span>Stationery</span>
            </div>
        </a>

        <h2 class="welcome-title">Selamat Datang Kembali ✨</h2>
        <p class="welcome-subtitle">Masuk untuk melanjutkan aktivitas Anda</p>
    </div>

    <div class="login-card">
        <form method="POST" action="{{ route('login') }}" class="login-form">
            @csrf

            <div>
                <label class="form-label">Alamat Email</label>
                <input type="email" name="email" class="form-input" value="{{ old('email') }}" required>
            </div>

            <div>
                <label class="form-label">Kata Sandi</label>
                <input type="password" name="password" class="form-input" required>
            </div>

            <button type="submit" class="btn-login">
                Masuk
            </button>

            <p class="register-link">
                Belum punya akun?
                <a href="{{ route('register') }}">Daftar sekarang</a>
            </p>
        </form>
    </div>

</div>

</body>
</html>
