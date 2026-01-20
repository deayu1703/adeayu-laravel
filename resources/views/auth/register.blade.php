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
            --pink-dark: #E48B95;
            --pink-medium: #F2A7B1;
            --pink-light: #FFD6DC;
            --pink-soft: #FFF0F3;
            --cream: #FFF8F6;
            --lavender: #EFE8FF;
            --text-dark: #5A4A4A;
            --shadow: rgba(228, 139, 149, 0.25);

            --radius-lg: 20px;
            --radius-xl: 30px;
            --transition: all .3s ease;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, var(--pink-soft), var(--lavender));
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
            color: var(--text-dark);
        }

        .register-container {
            max-width: 480px;
            width: 100%;
        }

        .brand-header {
            text-align: center;
            margin-bottom: 2.5rem;
        }

        .logo-link {
            display: inline-flex;
            align-items: center;
            gap: .75rem;
            margin-bottom: 1.5rem;
        }

        .logo-icon {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 6px 20px var(--shadow);
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
        }

        .welcome-subtitle {
            font-size: .95rem;
            margin-top: .4rem;
        }

        .register-card {
            background: white;
            border-radius: var(--radius-xl);
            padding: 2.5rem;
            box-shadow: 0 20px 40px var(--shadow);
        }

        .form-group { margin-bottom: 1.3rem; }

        .form-label {
            font-size: .9rem;
            font-weight: 500;
            color: var(--pink-dark);
            margin-bottom: .4rem;
            display: block;
        }

        .form-input {
            width: 100%;
            padding: 1rem;
            border-radius: var(--radius-lg);
            border: 1px solid #ddd;
            background: var(--cream);
            transition: var(--transition);
        }

        .form-input:focus {
            outline: none;
            border-color: var(--pink-medium);
            box-shadow: 0 0 0 3px rgba(242,167,177,.3);
            background: white;
        }

        .password-wrapper { position: relative; }

        .password-toggle {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            border: none;
            background: none;
            cursor: pointer;
            color: var(--pink-medium);
        }

        .btn-register {
            width: 100%;
            margin-top: .5rem;
            padding: 1rem;
            border-radius: var(--radius-lg);
            border: none;
            cursor: pointer;
            background: linear-gradient(135deg, var(--pink-medium), var(--pink-dark));
            color: white;
            font-family: 'Quicksand', sans-serif;
            font-weight: 600;
            font-size: 1.05rem;
            transition: var(--transition);
        }

        .btn-register:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px var(--shadow);
        }

        .error-message {
            margin-top: .4rem;
            font-size: .8rem;
            color: #c00;
        }

        .login-link {
            text-align: center;
            margin-top: 1.8rem;
            font-size: .9rem;
        }

        .login-link a {
            color: var(--pink-medium);
            font-weight: 600;
        }
    </style>
</head>
<body>

<div class="register-container">

    <div class="brand-header">
        <a href="/" class="logo-link">
            <div class="logo-icon">
                <i class="fas fa-pencil-alt" style="color: var(--pink-dark);"></i>
            </div>
            <div class="logo-text">Ayyra <span>Stationery</span></div>
        </a>

        <h2 class="welcome-title">Bergabung Yuk ✨</h2>
        <p class="welcome-subtitle">Bikin belanja alat tulis makin seru</p>
    </div>

    <div class="register-card">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" name="name" class="form-input" value="{{ old('name') }}" required>
                @error('name') <div class="error-message">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-input" value="{{ old('email') }}" required>
                @error('email') <div class="error-message">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label class="form-label">Password</label>
                <div class="password-wrapper">
                    <input type="password" name="password" id="password" class="form-input" required>
                    <button type="button" class="password-toggle" onclick="toggle('password')">
                        <i class="far fa-eye"></i>
                    </button>
                </div>
                @error('password') <div class="error-message">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label class="form-label">Konfirmasi Password</label>
                <div class="password-wrapper">
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-input" required>
                    <button type="button" class="password-toggle" onclick="toggle('password_confirmation')">
                        <i class="far fa-eye"></i>
                    </button>
                </div>
            </div>

            <button class="btn-register">
                <i class="fas fa-user-plus"></i> Daftar Sekarang
            </button>
        </form>

        <p class="login-link">
            Sudah punya akun?
            <a href="{{ route('login') }}">Masuk</a>
        </p>
    </div>
</div>

<script>
function toggle(id) {
    const input = document.getElementById(id);
    input.type = input.type === 'password' ? 'text' : 'password';
}
</script>

</body>
</html>
