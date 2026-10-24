
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Daftar Akun | AquaCraft</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        * {
            box-sizing: border-box;
        }

        :root {
            --navy: #073b4c;
            --teal: #087f8c;
            --cyan: #64dfdf;
            --muted: #718096;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: 'DM Sans', sans-serif;
            color: #183044;
            background: #f1f7f8;
        }

        a {
            text-decoration: none;
        }

        .page {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 35px 20px;
            background:
                radial-gradient(circle at 8% 8%, #d8f7ef 0, transparent 30%),
                radial-gradient(circle at 92% 90%, #dceefa 0, transparent 30%),
                #f5f9fc;
        }

        .register-card {
            width: 100%;
            max-width: 1000px;
            display: grid;
            grid-template-columns: .85fr 1.15fr;
            overflow: hidden;
            border: 1px solid #e2eaed;
            border-radius: 25px;
            background: #fff;
            box-shadow: 0 24px 70px rgba(7, 59, 76, .12);
        }

        /* PANEL KIRI */

        .visual {
            position: relative;
            display: flex;
            min-height: 650px;
            flex-direction: column;
            justify-content: space-between;
            padding: 30px;
            overflow: hidden;
            color: #fff;
            background:
                linear-gradient(180deg, rgba(4, 38, 55, .35), rgba(4, 38, 55, .88)),
                url('/images/akuarium-hero.png') center / cover no-repeat,
                linear-gradient(145deg, #073b4c, #118ab2);
        }

        .brand {
            position: relative;
            z-index: 1;
            display: flex;
            align-items: center;
            gap: 11px;
            color: #fff;
        }

        .brand-icon {
            display: grid;
            width: 46px;
            height: 46px;
            place-items: center;
            border: 1px solid #ffffff45;
            border-radius: 14px;
            background: #ffffff20;
            font-size: 25px;
        }

        .brand-name {
            font-family: 'Manrope', sans-serif;
            font-size: 24px;
            font-weight: 800;
            letter-spacing: -.8px;
        }

        .brand-name span {
            color: var(--cyan);
        }

        .visual-content {
            position: relative;
            z-index: 1;
            margin: 45px 0;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 18px;
            padding: 8px 12px;
            border: 1px solid #ffffff45;
            border-radius: 30px;
            background: #ffffff15;
            color: #b9fff0;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .visual-content h1 {
            margin: 0 0 17px;
            font-family: 'Manrope', sans-serif;
            font-size: clamp(30px, 3.5vw, 42px);
            font-weight: 800;
            line-height: 1.2;
            letter-spacing: -1.4px;
        }

        .visual-content h1 span {
            color: var(--cyan);
        }

        .visual-content p {
            max-width: 330px;
            margin: 0;
            color: #e2f2f5;
            font-size: 13px;
            line-height: 1.9;
        }

        .visual-footer {
            position: relative;
            z-index: 1;
            padding-top: 20px;
            border-top: 1px solid #ffffff40;
            color: #d8eaf0;
            font-size: 11px;
            line-height: 1.8;
        }

        .visual-footer strong {
            color: white;
        }

        /* PANEL FORM */

        .form-panel {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 42px clamp(25px, 5vw, 58px);
        }

        .form-content {
            width: 100%;
            max-width: 390px;
        }

        .form-heading {
            margin-bottom: 27px;
        }

        .form-label {
            margin-bottom: 9px;
            color: var(--teal);
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 1.8px;
            text-transform: uppercase;
        }

        .form-heading h2 {
            margin: 0;
            color: var(--navy);
            font-family: 'Manrope', sans-serif;
            font-size: 29px;
            font-weight: 800;
            letter-spacing: -.8px;
        }

        .form-heading p {
            margin: 9px 0 0;
            color: var(--muted);
            font-size: 12px;
            line-height: 1.8;
        }

        .field {
            margin-bottom: 17px;
        }

        .field label {
            display: block;
            margin-bottom: 8px;
            color: #30495a;
            font-size: 12px;
            font-weight: 700;
        }

        .field input {
            display: block;
            width: 100%;
            height: 47px;
            padding: 0 14px;
            border: 1px solid #dce6e9;
            border-radius: 10px;
            outline: none;
            background: #fbfdfe;
            color: #183044;
            font-family: inherit;
            font-size: 12px;
            transition: .2s ease;
        }

        .field input::placeholder {
            color: #a0afb8;
        }

        .field input:hover {
            border-color: #b8d8d8;
        }

        .field input:focus {
            border-color: var(--teal);
            background: #fff;
            box-shadow: 0 0 0 3px rgba(8, 127, 140, .10);
        }

        .field input.invalid {
            border-color: #dc6262;
        }

        .error {
            margin: 6px 0 0;
            color: #d64040;
            font-size: 11px;
            line-height: 1.6;
        }

        .submit-button {
            display: flex;
            width: 100%;
            min-height: 48px;
            align-items: center;
            justify-content: center;
            gap: 9px;
            margin-top: 23px;
            border: 0;
            border-radius: 10px;
            background: linear-gradient(110deg, #087f8c, #0b9998);
            box-shadow: 0 7px 16px rgba(8, 127, 140, .17);
            color: white;
            cursor: pointer;
            font-family: inherit;
            font-size: 12px;
            font-weight: 800;
            transition: .2s ease;
        }

        .submit-button:hover {
            transform: translateY(-2px);
            background: #066975;
            box-shadow: 0 10px 22px rgba(8, 127, 140, .23);
        }

        .login-text {
            margin-top: 23px;
            color: #718096;
            font-size: 12px;
            text-align: center;
        }

        .login-text a {
            color: var(--teal);
            font-weight: 800;
        }

        .login-text a:hover {
            text-decoration: underline;
        }

        .privacy-note {
            display: flex;
            gap: 9px;
            align-items: flex-start;
            margin-top: 24px;
            padding: 12px;
            border: 1px solid #e1f0e8;
            border-radius: 10px;
            background: #f5fbf7;
            color: #687f73;
            font-size: 10px;
            line-height: 1.7;
        }

        .privacy-note span {
            color: #16805d;
            font-size: 14px;
        }

        /* RESPONSIVE */

        @media (max-width: 760px) {
            .page {
                padding: 18px 12px;
            }

            .register-card {
                max-width: 480px;
                grid-template-columns: 1fr;
                border-radius: 20px;
            }

            .visual {
                min-height: 245px;
                padding: 23px;
            }

            .visual-content {
                margin: 25px 0 12px;
            }

            .visual-content h1 {
                max-width: 360px;
                font-size: 30px;
            }

            .visual-content p {
                font-size: 12px;
            }

            .visual-footer {
                display: none;
            }

            .form-panel {
                padding: 30px 24px;
            }

            .form-heading h2 {
                font-size: 27px;
            }
        }

        @media (max-width: 380px) {
            .form-panel {
                padding: 27px 18px;
            }

            .visual-content h1 {
                font-size: 27px;
            }
        }
    </style>
</head>

<body>
<div class="page">
    <main class="register-card">

        <!-- BAGIAN GAMBAR -->
        <section class="visual">
            <a href="{{ route('home') }}" class="brand">
                
                <span class="brand-name">Aqua<span>Craft</span></span>
            </a>

            <div class="visual-content">
                <span class="eyebrow">✦ Dunia akuarium dalam genggamanmu</span>

                <h1>
                    Wujudkan
                    <span>Akuarium Impianmu.</span>
                </h1>

                <p>
                    Bergabunglah bersama AquaCraft dan temukan
                    perlengkapan, inspirasi, serta layanan untuk
                    menciptakan dunia bawah air yang indah.
                </p>
            </div>

            <div class="visual-footer">
                
                
            </div>
        </section>

        <!-- BAGIAN REGISTER -->
        <section class="form-panel">
            <div class="form-content">

                <div class="form-heading">
                    <div class="form-label">Pendaftaran akun</div>
                    <h2>Buat akun baru</h2>
        
                </div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- NAMA -->
                    <div class="field">
                        <label for="name">Nama lengkap</label>

                        <input
                            id="name"
                            type="text"
                            name="name"
                            value="{{ old('name') }}"
                            placeholder="Masukkan nama lengkap"
                            autocomplete="name"
                            required
                            autofocus
                            class="{{ $errors->has('name') ? 'invalid' : '' }}"
                        >

                        @error('name')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- EMAIL -->
                    <div class="field">
                        <label for="email">Alamat email</label>

                        <input
                            id="email"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="nama@email.com"
                            autocomplete="username"
                            required
                            class="{{ $errors->has('email') ? 'invalid' : '' }}"
                        >

                        @error('email')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- PASSWORD -->
                    <div class="field">
                        <label for="password">Password</label>

                        <input
                            id="password"
                            type="password"
                            name="password"
                            placeholder="Buat password"
                            autocomplete="new-password"
                            required
                            class="{{ $errors->has('password') ? 'invalid' : '' }}"
                        >

                        @error('password')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- KONFIRMASI PASSWORD -->
                    <div class="field">
                        <label for="password_confirmation">
                            Konfirmasi password
                        </label>

                        <input
                            id="password_confirmation"
                            type="password"
                            name="password_confirmation"
                            placeholder="Ulangi password"
                            autocomplete="new-password"
                            required
                            class="{{ $errors->has('password_confirmation') ? 'invalid' : '' }}"
                        >

                        @error('password_confirmation')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- TOMBOL -->
                    <button type="submit" class="submit-button">
                        Daftar Sekarang
                        <span aria-hidden="true">→</span>
                    </button>
                </form>

                <div class="login-text">
                    Sudah punya akun?
                    <a href="{{ route('login') }}">Masuk di sini</a>
                </div>

                

            </div>
        </section>

    </main>
</div>
</body>
</html>
